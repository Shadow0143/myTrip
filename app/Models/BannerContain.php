<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BannerContain extends Model
{
    use HasFactory;
    protected $table = 'bannercontains';

    function Allrecords()
    {
    		return DB::table('bannercontains')->get();
    }
    function edit($id)
    {
    	return DB::table('bannercontains')->where('id', '=', $id)->first();
    }
    function del($id)
    {
    	return DB::table('bannercontains')->where('id', '=', $id)->delete();
    }
}
