<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\ExcludeIf;

class ArtikelController extends Controller
{
    public function index(){
        $artikels = Artikel::limit(3)->get();
        $otherArtikels = [];
            if (!$artikels->isEmpty()) {
                $otherArtikels = Artikel::where('id', '>', $artikels->last()->id)->get();
            }


        return view('welcome', compact('artikels', 'otherArtikels'));
    }

    public function show(string $id){
        $artikel = Artikel::find($id);

        return view('artikel.show', compact('artikel'));
    }

    public function admin(){
        $artikels = Artikel::all();

        return view('admin.artikel', compact('artikels'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required'
        ]);

        $filenameExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenameSave = $filename.'_'.time().'.'.$extension;
        $request->file('image')->storeAs('public/artikelphoto', $filenameSave);

        Artikel::create([    
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filenameSave
        ]);

        return redirect()->back();
    }

    public function update(Request $request, string $id){
        $artikel = Artikel::find($id);

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if($request->file('image')){
             if(Storage::disk('public')->exists('artikelphoto/'. $artikel->image)){
                Storage::disk('public')->delete('artikelphoto/'. $artikel->image);
            }
            $filenameExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameSave = $filename.'_'.time().'.'.$extension;
            $request->file('image')->storeAs('public/artikelphoto', $filenameSave);

            $artikel->update(['image' => $filenameSave]);
        }

        $artikel->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    public function destroy(string $id){
        $artikel = Artikel::find($id);
        if(Storage::disk('public')->exists('artikelphoto/'. $artikel->image)){
            Storage::disk('public')->delete('artikelphoto/'. $artikel->image);
        }

        $artikel->delete();

        return redirect()->back();
    }
}
