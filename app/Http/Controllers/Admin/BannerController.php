<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->models = new banner();
    }
    public function index(){
        $bannerlist = $this->models->Allrecords();
        return view('admin.banner.banner-list')->with(compact('bannerlist'));
    }
    public function addBanner(){
        return view('admin/banner/add-banner');
    }
    public function editBanner($id){
        $editdata = $this->models->edit($id);
        return view('admin/banner/edit-banner')->with(compact('editdata'));
    }
    public function postBanner(Request $request){
        $rules = [
            'title' => 'required|string|min:3|max:255',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('admin/banner')
                ->withInput()
                ->withErrors($validator);
        } else {            
            $data = $request->input();
            $banner = new Banner();
            $banner->title = $data['title'];
            $banner->sub_title = $data['sub_title'];
            $banner->status = '1';
            if ($files = $request->file('banner')) {
                $destinationPath = 'banner/'; // upload path
                $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilefile);
                $banner->banner_image = "$profilefile";
            }
            $banner->save();
            return redirect('/banner')->with('status', "Insert successfully");
        }
    }
    public function updateBanner(Request $request){        
        $rec['title'] = $request->title;
        $rec['sub_title'] = $request->sub_title;
        $id = $request->id;
        if ($files = $request->file('banner')) {
            $destinationPath = 'banner/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $rec['banner_image'] = "$profilefile";
        }
        Banner::whereId($id)->update($rec);
        return  redirect('/banner')->withSuccess('Record Save successfully');
    }
    public function destroyBanner($id){
        $del = $this->models->del($id);
        if ($del) {
            return  redirect('/banner')->withSuccess('Record deleted successfully');
        }
    }
}
