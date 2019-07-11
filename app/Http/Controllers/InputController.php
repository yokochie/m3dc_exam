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

    public function store(Request $request)
    {
        $input = $request->all();
        $ip_address = \Request::ip();
        $referer = $request->header('referer');
        $user_agent = $request->header('user-agent');

        $log_store = new \App\LogStore();
        $log_store->store_request($input, $ip_address, $referer, $user_agent);
        return redirect()->to('/viewpage');
    }
}
