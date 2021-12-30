<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //Services
    public function services(){
        $services = Service::get();
        return view('admin.service.services',compact('services'));
    }

    //Service Add
    public function service_add(Request $request){
        $request->validate([
            'title' => 'required',
            'icon'  => 'required',
            'detail'=> 'required'
        ],[
            'title.required' => 'Please Enter Service Name',
            'icon.required'  => 'Please Enter Icon Name',
            'detail.required'=> 'Please Enter Detail About Service'
        ]);

        $service_added = Service::create([
            'title' => $request->title,
            'icon'  => $request->icon,
            'detail'=> $request->detail
        ]);
        if($service_added){
            return back()->with('success','Service added successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }

    //Service Delete
    public function service_delete($id){
        $service = Service::find($id);
        $service_deleted = $service->delete();
        if($service_deleted){
            return back()->with('success','Service deleted Successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }
}
