<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Validator;
class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->models=new page();
    }
    public function index() {
        $pagelist=$this->models->Allrecords();
        return view('admin/pages/pages-list')->with(compact('pagelist'));
    }
    public function addPages() {
        return view('admin/pages/add-pages');
    }
    public function postPages(Request $request) {
        $rules = [
			'module_name' => 'required|string|min:3|max:255',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('admin/pages')
			->withInput()
			->withErrors($validator);
		} else {
            $data = $request->input();
            $page = new Page();
            $page->module_name = $data['module_name'];
            //$page->slug = "aboutus";
            $page->slug= str_replace(' ', '_', $data['module_name']);
            $page->pages_id = 2;
            $page->is_header = "yes";
            $page->is_footer = "yes";
            $page->status = 1;
            $page->sequence = 2;
            $page->meta_title = "yes";
            $page->meta_description = "yes";
            $page->meta_keywords = "yes";
            if ($files = $request->file('banner')) {
                $destinationPath = 'pagebanner/'; // upload path
                $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilefile);
                $page->banner_image= "$profilefile";
            }
            if ($files = $request->file('image')) {
                $destinationPath = 'pageimage/'; // upload path
                $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profilefile);
                $page->image= "$profilefile";
            }
            $page->description = $data['description'];
            $page->save();
            return redirect('admin/pages')->with('status',"Insert successfully");
        }
    }
    public function editPages($id) {
        $editdata=$this->models->edit($id);
        return view('admin/pages/edit-pages')->with(compact('editdata'));

    }
    public function updatePages(Request $request) {
        $rec['module_name']=$request->module_name;
        $rec['description']=$request->description;
        //$rec['url']= str_replace(' ', '_', $rec['title1']);
        $id=$request->id;
        if ($files = $request->file('banner')) {
            $destinationPath = 'pagebanner/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $rec['banner_image'] = "$profilefile";
        }
        if ($files = $request->file('image')) {
            $destinationPath = 'pageimage/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $rec['image'] = "$profilefile";
        }
        Page::whereId($id)->update($rec);
        return  redirect('admin/pages')->withSuccess('Record Save successfully');
    }
    public function destroyPages($id) {
        $del=$this->models->del($id);
        if($del) {
            return  redirect('admin/pages')->withSuccess('Record deleted successfully');
        }
    }
}