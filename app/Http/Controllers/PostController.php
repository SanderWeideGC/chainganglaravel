<?php

namespace App\Http\Controllers;

class PostController
{
    public function show()
    {
        $post = \DB::table('post')->where('title', 'testingg')->first();

        dd($post);
    }
}

?>