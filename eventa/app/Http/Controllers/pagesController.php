<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class pagesController extends Controller
{
    //


    public function index(){

        $events = event::orderBy('created_at','desc')->take(12)->get();

        return view('welcome')->with('events',$events);
    }


    public function contact(){
        return view('pages.contact');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function about(){
        return view('pages.about');
    }

    public function products(){
        return view('pages.products');
    }
}
