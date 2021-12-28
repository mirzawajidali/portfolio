<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class Profile extends Controller
{
    //profile
    public function profile(){
        $user = User::get()->first();
        $skills = Skill::get();
        return view('admin.profile.profile',compact('user','skills'));
    }
    public function profile_update(Request $request){
        $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'twitter'  => 'required',
            'instagram'=> 'required'
        ]);

        //For image
        $image = $request->file('image');
        if(!empty($image)){
            //Delete Already existed image
            $exited_image = User::get()->first();
            $image_deleted = $exited_image['image'];
            unlink($image_deleted);
            $image_random_name = sha1(time());
            $image_extension   = strtolower($image->getClientOriginalExtension());
            $image_path        = "public/images/profile/";
            $image_full_name   = $image_random_name.".".$image_extension;
            $image_move        = $image->move($image_path,$image_full_name);
            $image_last_name   = $image_path.$image_full_name;
            $update = User::where('id',1)->update([
                'name' => $request->name,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'address' => $request->address,
                'image'   => $image_last_name,
                'facebook'=> $request->facebook,
                'linkedin'=> $request->linkedin,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter
            ]);

            if($update){
                return back()->with('success','profile updated successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong!',3);
            }
        }else{
            $update = User::where('id',1)->update([
                'name' => $request->name,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'address' => $request->address,
                'facebook'=> $request->facebook,
                'linkedin'=> $request->linkedin,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter
            ]);

            if($update){
                return back()->with('success','profile updated successfully!',3);
            }else{
                return back()->with('error','Sorry! Something went wrong!',3);
            }
        }
    }
}
