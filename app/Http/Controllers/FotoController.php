<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\foto;
use Image;

class FotoController extends Controller
{
    public function show($id)
    {
        $post = \DB::table('foto')->where('id', $id)->first();

        if (! $post) {
            abort(404);
        }

        return view('recipes-post', [
            'post' => $post
        ]);
    }

    public function create($id)
    {
        $post = \DB::table('foto')->where('id', $id)->first();

        if (! $post) {
            abort(404);
        }

        return view('recipes-post', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'titel' => ['required', 'max:100'],
            'body' => ['required'],
            'image' => ['required']
        ]);

        $foto = new foto();

        $foto->titel = $request->input('titel');
        $foto->body = $request->input('body');

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            Image::make($file)->save( public_path('/uploads/recipes/' . $filename));
            $foto->image = $filename;
        }

        $foto->save();

        return redirect('/recipes');
    }
}
