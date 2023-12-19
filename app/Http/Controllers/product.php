<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{

    public function showcasePage($selected=null)
    {
        if(!is_null($selected)){
            $showcase=[];
        }else{
            $showcase=[];
        }
        return view('nct', compact('showcase'));
    }

    public function showPage()
    {
        $tabs = [
            ['id' => 'nct', 'title' => 'NCT', 'active' => ' active', 'selected' => 'true'],
            ['id' => 'aespa', 'title' => 'AESPA', 'active' => '', 'selected' => 'false'],
            ['id' => 'bts', 'title' => 'BTS', 'active' => '', 'selected' => 'false'],
        ];

        return view('partials.nctpage', compact('tabs'));
    }
}