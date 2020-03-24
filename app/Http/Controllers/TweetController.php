<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetController extends Controller
{
    public function store()
    {
        $validated = request()->validate([
            'body' => 'required|max:255',
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $validated['body'],
        ]);

        return redirect()->route('home');
    }
}
