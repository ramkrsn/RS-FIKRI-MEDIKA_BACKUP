<?php

<<<<<<< HEAD
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'message'];

    protected $primaryKey = "idfeedback";
    protected $guarded="idfeedback";

=======
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.index');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Buat instance Feedback
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        
        // Simpan data ke database
        $feedback->save();

        return redirect()->route('feedback')->with('success', 'Thank you for your feedback!');
    }
>>>>>>> 700c57d34432be0c020c6fd752b62dad45873037
}
