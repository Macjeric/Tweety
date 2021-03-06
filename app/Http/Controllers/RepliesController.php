<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\Replies;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Tweet $tweet)
    {
        //
        $attributes = request()->validate([
            'body' => 'required|max:880',
        ]);

        $tweet->addReply([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function show(Replies $replies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function edit(Replies $replies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Replies $replies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Replies $replies)
    {
        //
        $replies->delete();
        return back();
    }
}
