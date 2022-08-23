<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userView(Request $request){
        $User= User::all();
        return view('admin/user')->with('data',$User);
    }
    public function userSaves(Request $request){
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role;
        $user->save();
        return back();
    }
    // public function updateUserStatus(Request $request){
    //     if($request->type=='status'){
    //         testimonial::where('id', $request->id)->update([
    //             'status' => $request->value
    //         ]);
    //         return response()->json([
    //             'status' => true,
    //             'msg' =>"Status update Success full"
    //         ]);
    //     } else {
    //         return response()->json([
    //             'status' => false,
    //             'msg' =>"Update failed"
    //         ]);
    //     }
    // }
    public function fatchUser(Request $request){   
        $key = $request->id;
        $User= User::all()->where('id','!=',$key);
        // dd($User);
        $User= User::find($key);
        return response()->json([ 'categorys'=>$User, 'data'=>$User]);
    }
    public function updateUser(Request $request){
        if($request->passwordUpdate != ''){
            User::where("id", $request->idUpdate)->update([
                'name' => $request->nameUpdate,
                'email' => $request->emailUpdate,
                'password' =>Hash::make($request->passwordUpdate),
                'role_id' => $request->roleUpdate
            ]);
        } else{
            User::where("id", $request->idUpdate)->update([
                'name' => $request->nameUpdate,
                'email' => $request->emailUpdate,
                'role_id' => $request->roleUpdate
            ]); 
        }
        return back();
    }
}
