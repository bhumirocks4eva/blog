<?php

namespace App\Http\Controllers;
use App\Setting;
use Session;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index()
    {
    	$settings= Setting::first();

    	return view('admin.settings.settings')->with('settings', $settings);
    }

    public function update(Request $request )
    {
    	$this->validate($request,[
    		'site_name' => 'required',
    		'contact_no'=> 'required',
    		'contact_email'=> 'required|email',
    		'address' => 'required'
    	]);

    	$settings = Setting::first();

    	$settings->site_name = $request->site_name;
    	$settings->contact_no=$request->contact_no;
    	$settings->contact_email=$request->contact_email;
    	$settings->address=$request->address;

    	$settings->save();

    	Session::flash('success','Settings saved successfully');

    	return redirect()->back();
    }
}
