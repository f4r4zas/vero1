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

}