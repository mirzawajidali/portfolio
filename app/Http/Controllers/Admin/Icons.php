<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Icons extends Controller
{
    //Icons
    public function icons(){
        return view('admin.icons.icon');
    }
}
