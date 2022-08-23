<?php
namespace App\Http\Controllers\Admin;
use App\Models\BannerContain;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class BannerContainController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->models = new bannercontain();
    }
    public function index() {
        if(Auth::user()->role_id == 1){
            $bannercontainlist = $this->models->Allrecords();
            return view('admin/bannercontain/bannercontain-list')->with(compact('bannercontainlist'));
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function addBannerContain() {
        return view('admin/bannercontain/add-bannercontain');
    }
    public function editBannerContain($id) {
        $editdata = $this->models->edit($id);
        return view('admin/bannercontain/edit-bannercontain')->with(compact('editdata'));
    }
    public function postBannerContain(Request $request) {
        $rules = [
            'title' => 'required|string|min:3|max:255',

        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('admin/bannercontain')
                ->withInput()
                ->withErrors($validator);
        } else {
            $data = $request->input();
            $bannercontain = new BannerContain();
            $bannercontain->title = $data['title']; //dd($bannercontain->title);
            $bannercontain->link = $data['link'];
            $bannercontain->image = $data['image'];
            $bannercontain->status = 1;
            $bannercontain->sequence = $data['sequence'];
            /*if ($files = $request->file('image')) {
                $destinationPath = 'bannercontain/'; // upload path
                $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilefile);
                $bannercontain->image= "$profilefile";
            }*/
            $bannercontain->save();
            return redirect('admin/bannercontain')->with('status', "Insert successfully");
        }
    }
    public function updateBannerContain(Request $request) {
        $rec['title'] = $request->title;
        $rec['link'] = $request->link;
        $id = $request->id;
        $rec['image'] = $request->image;
        /*if ($files = $request->file('image')) {
           $destinationPath = 'bannercontain/'; // upload path
           $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profilefile);
           $rec['mage'] = "$profilefile";
        }*/
        BannerContain::whereId($id)->update($rec);
        return  redirect('admin/bannercontain')->withSuccess('Record Save successfully');
    }
    public function destroyBannerContain($id) {
        $del = $this->models->del($id);
        if ($del) {
            return  redirect('admin/bannercontain')->withSuccess('Record deleted successfully');
        }
    }
}