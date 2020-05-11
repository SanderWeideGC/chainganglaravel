<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;

class BlogController extends Controller
{
    public function show($id)
    {
        $post = \DB::table('blog')->where('id', $id)->first();

        if (! $post) {
            abort(404);
        }

        return view('blog-post', [
            'post' => $post
        ]);
    }

    public function create($id)
    {
        $post = \DB::table('blog')->where('id', $id)->first();

        if (! $post) {
            abort(404);
        }

        return view('blog-post', [
            'post' => $post
        ]);
    }

    public function store()
    {
        $blog = new blog();

        $blog->titel = request('titel');
        $blog->body = request('body');
        $blog->image = request('image');

        $blog->save();

        return redirect('/blog');
    }
}
