<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('frontend.index');
    }
    public function characters(){
        return view('frontend.character');
    }
    public function maps(){
        return view('frontend.map.map');
    }
    public function weapons(){
        return view('frontend.weapons.weapon');
    }
    // characters
    public function st(){
        return view('frontend.ch.template');
    }
    public function spe(){
        return view('frontend.ch.spe');
    }
    public function xxefs(){
        return view('frontend.ch.xxefs');
    }
    public function sps(){
        return view('frontend.ch.sps');
    }
    public function te(){
        return view('frontend.ch.te');
    }
    // characters
    public function login(){

    }
    public function singup(){

    }
}
