<?php

namespace App\Http\Controllers;

use App\Models\Password;
use App\Models\Social;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class BackendController extends Controller
{
    public function social() {
        $socials = Social::latest()->paginate(25);
        return view ('social', compact('socials'));
    }
    
    
    public function socialPost(Request $request) {
        
        $validated = $request->validate([
            'name' => 'required',
        ]);

        Social::create([
            'name' => $request->name
        ]);

        return back();
    }
    public function authentications() {
        $socials = Social::all();
        $passwords = Password::latest()->paginate(25);
        return view ('passwords', compact('passwords', 'socials'));
    }

    public function authenticationsPost(Request $request) {
        
        $validated = $request->validate([
            'social_id' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        Password::create([
            'social_id' => $request->social_id,
            'password' => $request->password,
            'email' => $request->email
        ]);

        return back();
    }


    public function authenticationsUpdate(Request $request) {
        
        $validated = $request->validate([
            'social_id' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);



        $password = Password::where('id', $request->id)->first();
        $password->email = $request->email;
        $password->social_id = $request->social_id;
        $password->password = $request->password;
        $password->save();



        return back();
    }

  public function authenticationsDelete(Request $request) {
   

    $password = Password::find($request->id);

    if(!$password || $password->password != $request->name) return back()->withErrors(['errors' => 'Somthing went wrong']);
    

    $password->delete();

    return back()->withErrors(['errors' => $password->id . ' has been deleted']);


        
        return back();
    }



    public function socialUpdate(Request $request) {


        
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $social = Social::where('id', $request->id)->first();
   
        $social->name = $request->name;
        $social->save();



        return back();
    }

  public function socialDelete(Request $request) {
   

    $social = Social::find($request->id);
    if(!$social || $social->name != $social->name) return back()->withErrors(['errors' => 'Somthing went wrong']);
    

    $social->delete();

    return back()->withErrors(['errors' => $social->name . ' has been deleted']);


        
        return back();
    }


}
