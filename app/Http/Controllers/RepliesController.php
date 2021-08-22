<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Thread;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function CreateReply(Request $request, Thread $thread)
    {
        $request->validate([
            'body' => 'required'
        ]);

        $reply = new Reply;
        $reply->body = $request->body;
        $reply->user_id = auth()->user()->id;
        $thread->replies()->save($reply);
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editply = Reply::find($id);

        // Check authorized user
        if(auth()->user()->id !== $editply->user->id) {
            abort('401');
        }
        
        return view('threads.replyedit')->with('reply', $editply);
    }


/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$editply = Reply::find($id);
        Reply::where('id', $id)
                ->update(['body' => $request->body]);
        return redirect("/threads/$editply->thread_id")->with('status', 'Jawaban sudah diubah!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$editply = Reply::find($id);
        // Check authorized user
        if(auth()->user()->id !== $editply->user->id) {
            abort('401');
        }
        
        Reply::destroy($id);
        return redirect()->back()->with('status', 'Jawaban sudah dihapus!');
    }
}

