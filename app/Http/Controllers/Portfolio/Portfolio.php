<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Http\Request;

class Portfolio extends Controller
{
    //My Portfolio
    public function portfolio(){
        $skills = Skill::get();
        $banner = Banner::get()->first();
        $user   = User::get()->first();
        $about  = About::get()->first();
        return view('portfolio.portfolio.portfolio',compact('user','banner','about','skills'));
    }
}
