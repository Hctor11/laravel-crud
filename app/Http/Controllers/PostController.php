<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
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
