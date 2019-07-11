<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogStore;
use App\ExamLog;

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

        $log_store = new LogStore;
        $log_store->store_request($input, $ip_address, $referer, $user_agent);

        $exam_log = new ExamLog;
        $exam_log->cmt_date = new \DateTime('now');
        $exam_log->todohuken = $input['todohuken'];
        $exam_log->fname = $input['first_name'];
        $exam_log->lname = $input['family_name'];
        $exam_log->viewcnt = $input['people_num'];
        $exam_log->ip_addr = $ip_address;
        $exam_log->referer = $referer;
        $exam_log->usr_agent = $user_agent;

        $exam_log->save();

        return redirect()->to('/viewpage');
    }
}
