<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DeletePostController extends Controller
{
    public function deletePost($id){
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return response()->json([
                'message' => 'Post con ID ' . $id . ' è stato eliminato con successo.',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Post con ID ' . $id . ' non trovato.',
            ], 404);
        }
    }
}
