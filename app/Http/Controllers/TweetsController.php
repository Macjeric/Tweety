<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;


class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()
                ->user()
                ->timeline(),
        ]);
    }

    public function store(Tweet $tweet)
    {
        $attributes = request()->validate([
            'body' => 'required|max:880',
            // something here
            'document' => ['required', 'file'],

        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'document' => $attributes['document'] = request('document')->store('documents'),

        ]);


        return redirect()->route('home');
    }

    public function show(Tweet $tweet)
    {
        return view('tweets.show', compact('tweet'));
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        return back()->with('success', 'Post Removed');
    }

    public function getDocAttribute($value)
    {
        return asset($value);
    }

}
