<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        $defaultcfg = config('defaultcfg.defaultcfg');
        return view('viewpages.input', [
            'title' => $defaultcfg['PAGE_TITLE'],
            'config' => $defaultcfg ]);
    }
    
    public function displayview()
    {
        $defaultcfg = config('defaultcfg.defaultcfg');
        return view('viewpages.viewpage', [
            'title' => $defaultcfg['PAGE_TITLE'],
            'config' => $defaultcfg ]);
    }
}
