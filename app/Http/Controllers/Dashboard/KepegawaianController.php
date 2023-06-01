<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    function index()
    {
        $data = [];
        // $data['api'] = api_sadewa("get", "");

        return view('kepegawaian.kepegawaian')->with($data);
    }
}
