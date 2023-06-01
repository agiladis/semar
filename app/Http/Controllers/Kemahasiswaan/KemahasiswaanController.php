<?php

namespace App\Http\Controllers\Kemahasiswaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KemahasiswaanController extends Controller
{
    function index()
    {
        $data = [];
        $home = home("get");
        $data['totalDosen'] = $home['data']['totalDosen'];
        $data['totalMhs'] = $home['data']['totalMhs'];
        $data['lulusan'] = $home['data']['lulusan'];
        $data['peminat'] = $home['data']['peminat'];

        return view('kemahasiswaan.kemahasiswaan')->with($data);
    }

    function Jumlah()
    {

        $data = [];
        // $api = tahunData("get");
        // $apiFakultas = fakultas("get");

        $data['kemahasiswaan'] = array(
            'jumlah' => [
                "2018",
                "2019",
                "2020",
                "2021",
                "2022",
                "2023",
            ],
            // 'tahun' => $api['data']['tahun'],
            'aktif' => [
                "35841",
                "36810",
                "37002",
                "46910",
                "52014",
                "0",
            ],
            'diterima' => [
                "7192",
                "7410",
                "7302",
                "9274",
                "12974",
                "0",
            ],
            'lulus' => [
                "4083",
                "4902",
                "3082",
                "5083",
                "5900",
                "0",
            ],
        );

        return $data['kemahasiswaan'];
    }
}
