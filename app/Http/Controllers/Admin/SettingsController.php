<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Storage;
use Toastr;
use App\User;
use Image;
use Hash;

class SettingsController extends Controller
{
    public function index()
    {
    	return view('admin.settings');
    }

    public function updateProfile(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email',
    		'image' => 'required|image',
    	]);

    	$image = $request->file('image');
    	$slug = str_slug($request->name);
    	$user = User::findOrFail(Auth::id());

    	if(isset($image))
    	{
    		$currentDate = Carbon::now()->toDateString();
    		$imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
    		if(!Storage::disk('public')->exists('profile'))
    		{
    			Storage::disk('public')->makeDirectory('profile');
    		}

    		if(Storage::disk('public')->exists('profile/'.$user->image))
    		{
    			Storage::disk('public')->delete('profile/'.$user->image);
    		}
    		$profile = Image::make($image)->resize('500,500')->save($imageName);
    		Storage::disk('public')->put('profile/'.$imageName,$profile);
    	} else {
    		$imageName = $user->image;
    	}
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->image = $imageName;
    	$user->about = $request->about;

    	$user->save();
    	Toastr::success('Profile successfully update','Success');
    	return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
    	$this->validate($request,[
    		'old_password' => 'required',
    		'password' => 'required|confirmed',
    	]);

    	$hashedPassword = Auth::user()->password;
    	if(Hash::check($request->old_password, $hashedPassword))
    	{
    		if(!Hash::check($request->password, $hashedPassword))
    		{
    			$user = User::find(Auth::id());
    			$user->password = Hash::make($request->password);
    			$user->save();
		    	Toastr::success('Password successfully update','Success');
		    	Auth::logout();
		    	return redirect()->back();

    		}else{
		    	Toastr::error('new password cannot be the same as old password','Error');
		    	return redirect()->back();

    		}
    	}else{
		    	Toastr::error('current password not match','Error');
		    	return redirect()->back();

    	}
    }
}
