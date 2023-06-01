<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function index()
    {
        // tes api ke sadewa
        // $rest = api_sadewa('GET', 'api/semar/mahasiswa/tes', null, null, false);
        // $dt_rest = $rest->object();
        // dd($dt_rest);

        $data = [];
        $data['title'] = 'Semar';
        // $data['api'] = api_sadewa("get", "");
        return view('homepage')->with($data);
    }
}
