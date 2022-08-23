<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialoffer;
use Illuminate\Support\Facades\Auth;
class SpecialofferController extends Controller
{
    // public function specialofferView(){
    //     return view('admin/add-specialoffer');
    // }
    
    public function specialofferView(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->categoryId;
        $specialoffer= Specialoffer::all();
        return view('admin/add-specialoffer')->with('data',$specialoffer);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function specialofferSaves(Request $request){
        $image = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'specialoffer';
            $file->move($location,$image);
        }
        $specialoffer= new Specialoffer;
        $specialoffer->name = $request->name;
        $specialoffer->subTitle = $request->subTitle;
        $specialoffer->description = $request->description;
        $specialoffer->image = $image;
        $specialoffer->sequence = $request->sequence;
        $specialoffer->save();
        return back();
    }
    public function updateSpecialofferStatus(Request $request){
        if($request->type=='status'){
            specialoffer::where('id', $request->id)->update([
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
    public function fatchSpecialoffer(Request $request){   
        $key = $request->id;
        $specialoffer= specialoffer::all()->where('id','!=',$key);
        $specialoffer= specialoffer::find($key);
        return response()->json([ 'categorys'=>$specialoffer, 'data'=>$specialoffer]);
    }
    public function updateSpecialoffer(Request $request){
        if($request->file('imageUpdate')!='' && $request->file('imageUpdate')!= null) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'specialoffer';
            $file->move($location,$image);
        }  else {
            $image = $request->imageUpdateOld;
        }
        specialoffer::where("id", $request->idUpdate)->update([
            'name' => $request->nameUpdate,
            'subTitle' => $request->subTitleUpdate,
            'description' => $request->descriptionUpdate,
            'image' => $image,
            'sequence' => $request->sequenceUpdate,
        ]);
        return back();
    }
}