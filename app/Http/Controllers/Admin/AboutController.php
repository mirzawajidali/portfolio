<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //about
    public function about(){
        $about = About::get()->first();
        return view('admin.about.about',compact('about'));
    }

    //about update
    public function about_update(Request $request){
        $request->validate([
            'birthday' => 'required',
            'age'      => 'required',
            'website'  => 'required',
            'degree'   => 'required',
            'phone'    => 'required',
            'email'    => 'required',
            'city'     => 'required',
            'freelance'=> 'required',
            'about'    => 'required'
        ]);

        $update = About::where('id',1)->update([
            'birthday' => $request->birthday,
            'age'      => $request->age,
            'website'  => $request->website,
            'degree'   => $request->degree,
            'phone'    => $request->phone,
            'email'    => $request->email,
            'city'     => $request->city,
            'freelance'=> $request->freelance,
            'about'    => $request->about
        ]);
        if($update){
            return back()->with('success','About updated successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong',3);
        }
    }

    //Skills
    public function skill(){
        $skills = Skill::get();
        return view('admin.about.skill',compact('skills'));
    }

    //Skill Add
    public function skill_add(Request $request){
        $request->validate([
            'skill' => 'required',
            'percentage' => 'required'
        ],[
            'skill.required' => 'Please Enter Skill Name',
            'percentage.required' => 'Give Percentage Value to Skill'
        ]);
        $skill = new Skill();
        $skill->name = $request->skill;
        $skill->percentage = $request->percentage;
        $skill_added = $skill->save();
        if($skill_added){
            return back()->with('success','Skill added successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }

    //Skill Deleted 
    public function skill_delete($id){
        $skill = Skill::find($id);
        $skill_deleted = $skill->delete();
        if($skill_deleted){
            return back()->with('success','Skill deleted successfully!',3);
        }else{
            return back()->with('error','Sorry! Something went wrong!',3);
        }
    }
}
