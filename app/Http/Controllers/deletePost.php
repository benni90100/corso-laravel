<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DeletePostController extends Controller
{
    public function deletePost($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            $message = 'Post con ID ' . $id . ' è stato eliminato con successo.';
        } else {
            $message = 'Post con ID ' . $id . ' non trovato.';
        }

        return view('post.delete', compact('message'));
    }
}
