<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Features;
use Illuminate\Support\Facades\Auth;
class FeaturesController extends Controller
{
    // public function featuresView(){
    //     return view('admin/add-features');
    // }
    public function featuresView(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->categoryId;
        $features= Features::all();
        return view('admin/add-features')->with('data',$features);
        } else {
            return redirect('admin/dashboard');
        }
    }
        public function featuresSaves(Request $request){
        $image = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        $features= new Features;
        $features->name = $request->name;
        $features->subTitle = $request->subTitle;
        $features->description = $request->description;
        $features->image = $image;
        $features->sequence = $request->sequence;
        $features->save();
        return back();
    }
        public function updatefeaturesStatus(Request $request){
        if($request->type=='status'){
            features::where('id', $request->id)->update([
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
    public function fatchfeatures(Request $request){   
        $key = $request->id;
        $features= features::all()->where('id','!=',$key);
        $features= features::find($key);
        return response()->json([ 'categorys'=>$features, 'data'=>$features]);
    }
    public function updateFeatures(Request $request){
        if($request->file('imageUpdate')!='' && $request->file('imageUpdate')!= null) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'features';
            $file->move($location,$image);
        }  else {
            $image = $request->imageUpdateOld;
        }
        features::where("id", $request->idUpdate)->update([
            'name' => $request->nameUpdate,
            'subTitle' => $request->subTitleUpdate,
            'description' => $request->descriptionUpdate,
            'image' => $image,
            'sequence' => $request->sequenceUpdate,
        ]);
        return back();
    }
}