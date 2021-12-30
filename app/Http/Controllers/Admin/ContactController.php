<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //contacts
    public function contacts(){
        $user = User::where('id',1)->first();
        $contacts = Contact::orderBy('id','DESC')->get();
        return view('admin.contact.contacts',compact('contacts','user'));
    }
}
