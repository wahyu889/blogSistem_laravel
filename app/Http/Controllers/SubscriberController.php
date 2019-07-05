<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Toastr;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email|unique:subscribers'
    	]);

    	$subscriber = new Subscriber();
    	$subscriber->email = $request->email;
    	$subscriber->save();

    	Toastr::success('you successfully add to our subscribe','Success');
    	return redirect()->back();
    }
}
