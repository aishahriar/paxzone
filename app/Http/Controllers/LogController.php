<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index()
    {
        $logs = log::all();
        return view('logdatashow', compact('logs'));
    }

    public function create(Request $req)
    {
        $log = new log();
        $log->user_id = $req->user_id;
        $log->fin = $req->fin;
        $log->lout = $req->lout;
        $log->save();
        return back()->with('success','Data added successfully');
    }
}
