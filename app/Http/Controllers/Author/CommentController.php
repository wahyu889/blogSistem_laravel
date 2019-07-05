<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;
use Toastr;
use Auth;

class CommentController extends Controller
{
     public function index()
    {
    	$posts = Auth::user()->posts;
    	return view('author.comments', compact('posts'));
    }

    public function destroy($id)
    {
    	$comment = Comment::findOrFail($id);
        if($comment->post->user->id == Auth::id())
        {
            $comment->delete();
            Toastr::success('comment successfully deleted','Success');
        }else{
            Toastr::error('you are not authorized to deleted','Access Denied!');

        }
    	
    	
    	return redirect()->back();
    }
}
