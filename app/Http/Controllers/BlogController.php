<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;
use Image;

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

    public function created()
    {
        return view('admin.blog-create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'titel' => ['required', 'max:100'],
            'body' => ['required'],
            'image' => ['required']
        ]);

        $blog = new blog();

        $blog->titel = $request->input('titel');
        $blog->body = $request->input('body');

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            Image::make($file)->save( public_path('/uploads/blog/' . $filename));
            $blog->image = $filename;
        }

        $blog->save();

        return redirect('/blog');
    }

    public function edit($id){
        $blog = Blog::find($id);

        return view('admin.blog-edit', ['blog' => $blog]);

    }

    public function update($id, Request $request)
    {
        $blog = Blog::find($id);

        $blog->titel = $request->input('titel');
        $blog->body = $request->input('body');

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            Image::make($file)->save( public_path('/uploads/blog/' . $filename));
            $blog->image = $filename;
        }

        $blog->save();

        return redirect('/dashboard');
    }

    public function destroy(blog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
}
