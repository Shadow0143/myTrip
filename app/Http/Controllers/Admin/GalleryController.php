<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class GalleryController extends Controller
{
    public function galleryView(){
        return view('admin/gallery');
    }
}