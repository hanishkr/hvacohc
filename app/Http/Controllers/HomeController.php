<?php

namespace App\Http\Controllers;

use App\Mail\HomepageEmailForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact1');
    }

    public function emailEnquiry(Request $mailData){

        Mail::to('ohcinc22@gmail.com')->send(new HomepageEmailForm($mailData));
        return 'true';
    }
}
