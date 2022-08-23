<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DomestictourController extends Controller
{
    public function index() {
        return view('internationaltour/index');
    }
    public function adventureTourPackages() {
        return view('domestictour/packages-holiday');
    }
}