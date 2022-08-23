<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\testimonial;

class TestimonialController extends Controller
{
    // public function testimonialView(){
    //     return view('admin/add-testimonial');
    // }
    public function testimonialView(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->categoryId;
        $testimonial= testimonial::all();
        return view('admin/add-testimonial')->with('data',$testimonial);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function testimonialSaves(Request $request){
        $image = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        $testimonial= new testimonial;
        $testimonial->name = $request->name;
        $testimonial->subTitle = $request->subTitle;
        $testimonial->description = $request->description;
        $testimonial->image = $image;
        $testimonial->sequence = $request->sequence;
        $testimonial->save();
        return back();
    }
    public function updateTestimonialStatus(Request $request){
        if($request->type=='status'){
            testimonial::where('id', $request->id)->update([
                'status' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' =>"Status update Success full"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' =>"Update failed"
            ]);
        }
    }
    public function fatchTestimonial(Request $request){   
        $key = $request->id;
        $testimonial= testimonial::all()->where('id','!=',$key);
        $testimonial= testimonial::find($key);
        return response()->json([ 'categorys'=>$testimonial, 'data'=>$testimonial]);
    }
    public function updateTestimonial(Request $request){
        if($request->file('imageUpdate')!='' && $request->file('imageUpdate')!= null) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'testimonial';
            $file->move($location,$image);
        }  else {
            $image = $request->imageUpdateOld;
        }
        testimonial::where("id", $request->idUpdate)->update([
            'name' => $request->nameUpdate,
            'subTitle' => $request->subTitleUpdate,
            'description' => $request->descriptionUpdate,
            'image' => $image,
            'sequence' => $request->sequenceUpdate,
        ]);
        return back();
    }
}
