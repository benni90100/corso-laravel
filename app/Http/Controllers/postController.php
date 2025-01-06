<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function getSinglePost(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function putSinglePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->content = $request->Input('content');
        $post->save();

        return redirect()->route('post.show', ['id' => $post->id])->with('success', 'post aggiornato con successo');
    }
    public function deleteSinglePost($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'post eliminato con successo');
    }
}
