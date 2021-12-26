<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //banner
    public function banner(){
        $banner = Banner::get()->first();
        return view('admin.banner.banner',compact('banner'));
    }

    //banner update
    public function banner_update(Request $request){
        $request->validate([
            'designation' => 'required',
        ],[
            'designation.required' => 'Please Enter your designation'
        ]);
        //banner
        $banner = $request->file('banner');
        if(!empty($banner)){
            //Delete Already exist image
            $banner_already_exist = Banner::where('id',1)->first();
            $banner_deleted       = $banner_already_exist['banner'];
            unlink($banner_deleted);
            $banner_random_name = sha1(time());
            $banner_extention   = strtolower($banner->getClientOriginalExtension());
            $banner_full_name   = $banner_random_name.".".$banner_extention;
            $banner_path        = "public/images/banner/";
            $banner_move        = $banner->move($banner_path,$banner_full_name);
            $banner_last_name   = $banner_path.$banner_full_name;
            $update             = Banner::where('id',1)->update([
                'designation' => $request->designation,
                'banner'      => $banner_last_name
            ]);
            if($update){
                return back()->with('success','Information updated successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong!',3);
            }
        }else{
            $update = Banner::where('id',1)->update([
                'designation' => $request->designation,
            ]);
            if($update){
                return back()->with('success','Information updated successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong!',3);
            }
        }
    }
}
