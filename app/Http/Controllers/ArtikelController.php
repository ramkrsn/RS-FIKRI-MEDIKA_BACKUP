<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\ExcludeIf;

class ArtikelController extends Controller
{

    public function showArticle(){
        $artikels = Artikel::limit(3)->get();
        $otherArtikels = Artikel::where('id', '>', $artikels->last()->id)->get();

        return view('artikel.show', compact('artikels', 'otherArtikels'));
    }

    public function show(string $id){
        $artikel = Artikel::find($id);
        return view('artikel.detail-artikel', compact('artikel'));
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

        $imagePath = $request->file('image')->store('article_image', 'public');
        
        Artikel::create([    
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
        
        return redirect()->back();
    }

    public function update(Request $request, string $id){
        $artikel = Artikel::find($id);

        $artikel->title = $request->input('title');
        $artikel->description = $request->input('description');

        if ($request->hasFile('image')) {
            if ($artikel->image && \Storage::disk('public')->exists($artikel->image)) {
                \Storage::disk('public')->delete($artikel->image);
            }

            $artikel_image_path = $request->file('image')->store('article_image', 'public');
            $artikel->image = $artikel_image_path;
        }

        $artikel->save();
        return redirect()->back()->with('success', 'Data Berhasil Diubah');
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
