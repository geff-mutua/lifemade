<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class PageController extends Controller
{
    public function index(){
        return view('content.index');
    }
    public function about(){
        return view('content.about');
    }
    public function services(){
        return view('content.services');
    }
    public function contact(){
        return view('content.contact');
    }

    public function ContactUS(Request $request){
        $data=$request->validate([
            'name'=>'required',
            // 'postal_code'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'service'=>'required',
            'message'=>'required'
        ]);
        try {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($data));
            flash()->success('Your request has been submitted successfully and you will be notified shortly');
            return redirect()->back();

       } catch (\Throwable $th) {
        info($th->getMessage());
        flash()->error('Something went wrong. Try again later');
        return redirect()->back();
       }
        
    }
}
