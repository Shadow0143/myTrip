<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class InternationaltourController extends Controller
{
    public function index() {
        return view('internationaltour/index');
    }
    public function adventureTourPackages() {
        return view('internationaltour/packages-holiday');
    }
}