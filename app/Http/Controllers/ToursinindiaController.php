<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ToursinindiaController extends Controller
{
    public function index() {
        return view('toursinindia/index');
    }
    public function adventureTourPackages() {
        return view('toursinindia/packages-holiday');
    }
}