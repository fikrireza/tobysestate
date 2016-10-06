<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Subscribe;
use Mail;
use DB;
use Validator;

class WelcomePageController extends Controller
{

    public function index() {
      return view('front.index');
    }

    public function career() {
      return view('front.career');
    }

    public function subscribePost(Request $request) {

      $message = [
        'name.required' => "Fill This Field",
        'email.required' => "Fill This Field",
        'email.unique'  => "Your Email Has Been Registered"
      ];

      $validation = Validator::make($request->all(), [
        'name'  => 'required',
        'email' => 'required|email|unique:fra_subscribe,email',
      ], $message);

      if($validation->fails()) {
        return redirect()->route('index', array('#subscribe'))->withErrors($validation)->withInput();
      }

      $post = new Subscribe;
      $post->name = $request->name;
      $post->email  = $request->email;
      $post->flag_used = 1;
      $post->save();

      return redirect()->route('index')->with('message', 'Thank You');
    }

}
