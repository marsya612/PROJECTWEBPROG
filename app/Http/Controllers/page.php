<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page extends Controller
{

    public function homePage()
    {
        $tabs = [
            ['id' => 'nct', 'title' => 'NCT', 'active' => ' active', 'selected' => 'true'],
            ['id' => 'aespa', 'title' => 'AESPA', 'active' => '', 'selected' => 'false'],
            ['id' => 'bts', 'title' => 'BTS', 'active' => '', 'selected' => 'false'],
        ];

        return view('home', compact('tabs'));
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
