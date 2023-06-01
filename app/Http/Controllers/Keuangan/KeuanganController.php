<?php

namespace App\Http\Controllers\Keuangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    function index()
    {
        $data = [];
        $home = home("get");
        $data['totalDosen'] = $home['data']['totalDosen'];
        $data['totalMhs'] = $home['data']['totalMhs'];
        $data['lulusan'] = $home['data']['lulusan'];
        $data['peminat'] = $home['data']['peminat'];

        return view('keuangan.keuangan')->with($data);
    }

    function keuangan()
    {

        $data = [];
        // $api = tahunData("get");
        // $apiFakultas = fakultas("get");

        $data['keuangan'] = array(
            'unit' => [
                "Biro Umum",
                "Biro AKPK",
                "LPPM",
                "LP3M",
                "FTM",
                "FTI",
                "FISIP",
                "FEB",
                "FP",
                "UPT Lab Bahasa",
                "UPT Lab Terpadu",
                "UPT Karir",
                "UPT TIK",
            ],
            // 'tahun' => $api['data']['tahun'],
            'pagu' => [
                "7820368000",
                "4827836000",
                "2947839000",
                "3847028000",
                "2047927000",
                "1604028000",
                "2947027000",
                "1100279000",
                "1700368000",
                "937927900",
                "902864800",
                "792704700",
                "1204803000",
            ],
            'realisasi' => [
                "5820368000",
                "3827836000",
                "1947839000",
                "1847028000",
                "1047927000",
                "604028000",
                "1447027000",
                "100279000",
                "700368000",
                "337927900",
                "102864800",
                "292704700",
                "404803000",
            ],
        );

        return $data['keuangan'];
    }
}
