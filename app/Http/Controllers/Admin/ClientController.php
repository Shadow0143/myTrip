<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->models=new client();
    }
    public function index() {
        $clientlist=$this->models->Allrecords();

        return view('admin/client/client-list')->with(compact('clientlist'));
    }
	public function addClient() {
        return view('admin/client/add-client');
    }
    public function editClient($id) {
        $editdata=$this->models->edit($id);
        return view('admin/client/edit-client')->with(compact('editdata'));

    }
    public function postClient(Request $request) {
       // dd($request);
       /* $rules = [
			'name' => 'required|string|min:3|max:255',

		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
            dd("123");
			return redirect('admin/clients')
			->withInput()
			->withErrors($validator);
		}
        else{*/
                $data = $request->input();

				$client = new Client();
                $client->name = $data['name'];

                if ($files = $request->file('image')) {
                    $destinationPath = 'clientimage/'; // upload path
                    //dd($destinationPath);
                    $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $profilefile);
                    $client->image= "$profilefile";
                 }
                 $client->status = "1";
                 $client->sequence = $data['sequence'];

                $client->save();
				return redirect('admin/clients')->with('status',"Insert successfully");


    }
    public function updateClient(Request $request)
    {
        //dd($request->id);
         $rec['name']=$request->name;

         $id=$request->id;
           if ($files = $request->file('image')) {
           $destinationPath = 'clientimage/'; // upload path
           $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profilefile);
           $rec['image'] = "$profilefile";
        }
        Client::whereId($id)->update($rec);
        return  redirect('admin/clients')->withSuccess('Record Save successfully');

    }
    public function destroyClient($id)
    {

        $del=$this->models->del($id);
        if($del)
        {
            return  redirect('admin/clients')->withSuccess('Record deleted successfully');
        }
    }
    //
}
