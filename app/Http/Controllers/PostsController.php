<?php

namespace App\Http\Controllers;

use \App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            // 'user_id' => Auth::
            'caption' => 'required',
            'image' => ['required', 'mimes:jpeg,bmp,png']
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        // dd(request()->all());
        return redirect('/profile/'.auth()->user()->id);
    }
}
