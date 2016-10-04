<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use DB;

class WelcomePageController extends Controller
{

    public function index()
    {
      return view('front.index');
    }

}
