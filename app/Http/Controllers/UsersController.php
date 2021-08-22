<?php

namespace App\Http\Controllers;

use App\User;
use App\Thread;
use App\Reply;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        if( request()->is('api/*')){
            return User::all();
        }else{
            if($request->has('cari')){
                $users = User::where('name', 'LIKE', '%'.$request->cari.'%')->get();
            }else{
                $users = User::all();
            }
            return view('user.index', ['users' => $users]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);

        // Check authorized user
        if(auth()->user()->id !== $user->id) {
            return redirect('/threads');
        }

        return view('user/edit', ['user' => $user]);
    } 

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save();
        }
        return redirect('/threads')->with('status', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $threads = Thread::where('user_id', $id);
        $replies = Reply::where('user_id', $id);

        // Check authorized user
        if(auth()->user()->id !== $user->id) {
            return redirect('/threads');
        }

        $user->delete();
        $threads->delete();
        $replies->delete();
        return redirect('/logout');
    }

}
