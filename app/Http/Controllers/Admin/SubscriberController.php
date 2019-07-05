<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscriber;
use Toastr;

class SubscriberController extends Controller
{
    public function index()
    {
    	$subscribers = Subscriber::latest()->get();
    	return view('admin.subscriber', compact('subscribers'));
    }

    public function destroy($subscriber)
    {
    	$subscriber = Subscriber::findOrFail($subscriber);
    	$subscriber->delete();
    	Toastr::success('Subscriber successfully deleted','Success');
    	return redirect()->back();
    } 
}
