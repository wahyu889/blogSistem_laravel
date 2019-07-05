<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Toastr;

class AuthorController extends Controller
{
   public function index()
   {
   	 $authors = User::authors()
    ->withCount('posts')
    ->withCount('comments')
    ->withCount('favorite_posts')
    ->get();

    return view('admin.authors', compact('authors'));
   }

   public function destroy($id)
   {
   	$author = User::findOrFail($id);
   	$author->delete();
   	Toastr::success('author successfully delete :)','Success');
    return redirect()->back();
   }
}
