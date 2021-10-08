<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {

    /**
     * Get posts
     *
     * @return void
     */
    public function getPosts() {
        $post = new Object;

        $post->content = "Lol";

        $post->author->uuid = "ba4161c03a42496c8ae07d13372f3371";
        $post->author->username = "james090500";

        $post->likes->currentUser = false;
        $post->likes->total = 10;

        return response()->json($posts)
    }

}
