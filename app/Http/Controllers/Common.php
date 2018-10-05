<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 6/27/2018
 * Time: 8:16 PM
 */

namespace App\Http\Controllers;



class Common extends Controller
{

    public function faq(){
        return view('faq');
    }

    public function how(){
        return view('how_it_work');
    }

    public function coverage(){
        return view("coverage");
    }

    public function about(){
        return view("about-us");
    }

    public function service(){
        return view("service");
    }

    public function terms(){
        return view("terms");
    }

    public function help(){
        return view("help");
    }

    public function pricing(){
        return view("pricing");
    }

    public function insurance(){
        return view("insurance");
    }

    public function privacy(){
        return view("privacy");
    }

    public function career(){
     return view("careers");   
    }

    public function partner(){
        return view("partner");
    }
}