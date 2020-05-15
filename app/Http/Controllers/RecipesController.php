<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\recipes;
use Image;

class RecipesController extends Controller
{
    public function show($id)
    {
        $recipes = \DB::table('foto')->where('id', $id)->first();

        if (! $recipes) {
            abort(404);
        }

        return view('foto-post', [
            'recipes' => $recipes
        ]);
    }

    public function create($id)
    {
        $recipe = \DB::table('foto')->where('id', $id)->first();

        if (! $recipe) {
            abort(404);
        }

        return view('foto-post', [
            'recipe' => $recipe
        ]);
    }

    public function created()
    {
        return view('admin.recipes-create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'titel' => ['required', 'max:100'],
            'body' => ['required'],
            'image' => ['required']
        ]);

        $recipes = new Recipes();

        $recipes->titel = $request->input('titel');
        $recipes->body = $request->input('body');

        $recipes->save();

        return redirect('/recipesd');
    }

    public function edit($id){
        $recipes = Recipes::find($id);

        return view('admin.recipes-edit', ['recipes' => $recipes]);

    }

    public function update($id, Request $request)
    {
        $recipes = Recipes::find($id);

        $recipes->titel = $request->input('titel');

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            Image::make($file)->save( public_path('/uploads/recipes/' . $filename));
            $recipes->image = $filename;
        }

        $recipes->body = $request->input('body');
// dd($recipes->image);
        $recipes->save();

        return redirect('/recipesd');
    }

    public function destroy(recipes $recipes)
    {
        $recipes->delete();
        return redirect()->back();
    }
}
