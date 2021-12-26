<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //dashboard
    public function dashboard(){
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin.dashboard.dashboard',compact('data'));
    }
}
