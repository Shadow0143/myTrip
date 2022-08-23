<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    use HasFactory;
    function Allrecords()
    {
    		return DB::table('pages')->get();
    }
    function edit($id)
    {
    	return DB::table('pages')->where('id', '=', $id)->first();
    }
    function del($id)
    {
    	return DB::table('pages')->where('id', '=', $id)->delete();
    }
}
