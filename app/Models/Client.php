<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    function Allrecords()
    {
    		return DB::table('clients')->get();
    }
    function edit($id)
    {
    	return DB::table('clients')->where('id', '=', $id)->first();
    }
    function del($id)
    {
    	return DB::table('clients')->where('id', '=', $id)->delete();
    }

}
