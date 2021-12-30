<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class Portfolio extends Controller
{
    //My Portfolio
    public function portfolio(){
        $user   = User::get()->first();
        $about  = About::get()->first();
        $skills = Skill::get();
        $banner = Banner::get()->first();
        $testimonials = Testimonial::get();
        $services = Service::get();
        return view('portfolio.portfolio.portfolio',compact('user','banner','about','skills','testimonials','services'));
    }

    //Contact
    public function contact(Request $request){
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'subject'   => 'required',
            'message'   => 'required'
        ],[
            'name.required' => 'Enter Your name',
            'email.required'=> 'Enter Your email',
            'subject.required'=> 'Enter Subject',
            'message.required'=> 'Enter Your Message'
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message
        ]);

        if($contact){
            return back()->with('success','Thank You! We will contact you soon through email.',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }
}
