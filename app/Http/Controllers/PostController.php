<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showEditScreen(Post $post)
    {

        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        } else {
            return view('edit-post', ['post' => $post]);
        }
    }

    public function actuallyUpdatePost(Post $post, Request $request)
    {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/');
    }

    public function deletePost(Post $post){
        if (auth()->user()->id === $post['user_id']) {
            $post->delete();
        }
        return redirect('/');
    }

    public function createPost(Request $request)
    {
        $incomingFieds = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $incomingFieds['title'] = strip_tags($incomingFieds['title']);
        $incomingFieds['body'] = strip_tags($incomingFieds['body']);
        $incomingFieds['user_id'] = auth()->id();

        post::create($incomingFieds);

        return redirect('/');
    }
}
