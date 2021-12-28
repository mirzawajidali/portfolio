<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
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
        return view('portfolio.portfolio.portfolio',compact('user','banner','about','skills','testimonials'));
    }
}
