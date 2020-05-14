<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\users;

class UserController extends Controller
{
    public function show($id)
    {
        $post = \DB::table('users')->where('id', $id)->first();

        if (! $post) {
            abort(404);
        }

        return view('users-post', [
            'post' => $post
        ]);
    }

    public function create($id)
    {
        $post = \DB::table('users')->where('id', $id)->first();

        if (! $post) {
            abort(404);
        }

        return view('users-post', [
            'post' => $post
        ]);
    }

    public function created()
    {
        return view('admin.users-create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'titel' => ['required', 'max:100'],
            'body' => ['required'],
            'image' => ['required']
        ]);

        $user = new users();

        $user->titel = $request->input('titel');
        $user->body = $request->input('body');

        $user->save();

        return redirect('/user');
    }

    public function edit($id){
        $user = Users::find($id);

        return view('admin.users-edit', ['user' => $user]);

    }

    public function update($id, Request $request)
    {
        $user = Users::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->usertype = $request->input('role');

        $user->save();

        return redirect('/users');
    }

    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
