<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $data = [];
        $home = home("get");
        $data['totalDosen'] = $home['data']['totalDosen'];
        $data['totalMhs'] = $home['data']['totalMhs'];
        $data['lulusan'] = $home['data']['lulusan'];
        $data['peminat'] = $home['data']['peminat'];

        return view('dashboard.dashboard')->with($data);
    }

    function tahun()
    {

        $data = [];
        $api = tahunData("get");
        // $apiFakultas = fakultas("get");

        $data['dashboard'] = array(
            'tahun' => $api['data']['tahun'],
            'dataTahun' => $api['data']['dataTahun'],
        );

        return $data['dashboard'];
    }

    function fakultas()
    {

        $data = [];
        $api = fakultas("get");

        $data['dashboard'] = array(
            'fakultas' => $api['data']['fakultas'],
            'data' => $api['data']['data'],
            // 'api' => $data['api'],
            // 'non_pns' => '223',
        );

        return $data['dashboard'];
    }

    function jenjang()
    {

        $data = [];
        $api = jenjang("get");

        $data['dashboard'] = array(
            'jenjang' => $api['data']['jenjang'],
            'data' => $api['data']['data'],
            // 'api' => $data['api'],
            // 'non_pns' => '223',
        );

        return $data['dashboard'];
    }

    function dsnFakultas()
    {

        $data = [];
        $api = dsnFakultas("get");

        $data['dashboard'] = array(
            'fakultas' => $api['data']['fakultas'],
            'data' => $api['data']['data'],
            // 'api' => $data['api'],
            // 'non_pns' => '223',
        );

        return $data['dashboard'];
    }

    function dsnJenjang()
    {

        $data = [];
        $api = dsnJenjang("get");

        $data['dashboard'] = array(
            'jenjang' => $api['data']['jenjang'],
            'data' => $api['data']['data'],
            // 'api' => $data['api'],
            // 'non_pns' => '223',
        );

        return $data['dashboard'];
    }
}
