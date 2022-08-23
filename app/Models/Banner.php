<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Banner extends Model
{
    use HasFactory;
    function Allrecords()
    {
    		return DB::table('banners')->get();
    }
    function edit($id)
    {
    	return DB::table('banners')->where('id', '=', $id)->first();
    }
	function del($id)
    {
    	return DB::table('banners')->where('id', '=', $id)->delete();
    }
}
