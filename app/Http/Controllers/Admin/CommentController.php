<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;
use Toastr;

class CommentController extends Controller
{
    public function index()
    {
    	$comments = Comment::latest()->get();
    	return view('admin.comments', compact('comments'));
    }

    public function destroy($id)
    {
    	$comment = Comment::findOrFail($id);
    	$comment->delete();
    	Toastr::success('comment successfully deleted','Success');
    	return redirect()->back();
    }
}
