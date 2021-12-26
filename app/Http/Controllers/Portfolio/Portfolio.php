<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;

class Portfolio extends Controller
{
    //My Portfolio
    public function portfolio(){
        $banner = Banner::get()->first();
        $user = User::get()->first();
        return view('portfolio.portfolio.portfolio',compact('user','banner'));
    }
}
