<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    function index()
    {
        $data = [];
        $home = home("get");
        $data['totalDosen'] = $home['data']['totalDosen'];
        $data['totalMhs'] = $home['data']['totalMhs'];
        $data['lulusan'] = $home['data']['lulusan'];
        $data['peminat'] = $home['data']['peminat'];
        $api = tahunData("get");
        $data['tahun'] = $api;

        return view('kepegawaian.tendik')->with($data);
    }

    function jumlah()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['tendik'] = array(
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
            'values' => [
                "10",
                "9",
                "11",
                "12",
                "4",
                "6",
                "15",
                "19",
                "2",
                "12",
                "9",
                "1",
                "15",
            ],
        );

        return $data['tendik'];
    }

    function Golongan()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['tendik'] = array(
            'golongan' => [
                "I/c",
                "I/d",
                "II/a",
                "II/b",
                "II/c",
                "II/d",
                "III/a",
                "III/b",
                "III/c",
                "III/d",
                "IV/a",
                "IV/b",
                "IV/c",
                "N/A",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "2",
                "4",
                "9",
                "40",
                "36",
                "45",
                "55",
                "62",
                "32",
                "80",
                "62",
                "22",
                "9",
                "102",
            ],
        );

        return $data['tendik'];
    }

    function Status()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['tendik'] = array(
            'status' => [
                "BLU",
                "Non PNS",
                "Kontrak",
                "PNS",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "20",
                "120",
                "30",
                "206",
            ],
        );

        return $data['tendik'];
    }

    function Usia()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['tendik'] = array(
            'usia' => [
                "20",
                "21",
                "22",
                "23",
                "24",
                "25",
                "26",
                "27",
                "28",
                "29",
                "30",
                "31",
                "32",
                "33",
                "34",
                "35",
                "36",
                "37",
                "38",
                "39",
                "40",
                "41",
                "42",
                "43",
                "44",
                "45",
                "46",
                "47",
                "48",
                "49",
                "50",
                "51",
                "52",
                "53",
                "54",
                "55",
                "56",
                "57",
                "58",
                "59",
                "60",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "2",
                "8",
                "4",
                "5",
                "4",
                "8",
                "6",
                "11",
                "17",
                "20",
                "19",
                "30",
                "43",
                "37",
                "27",
                "14",
                "25",
                "12",
                "24",
                "11",
                "20",
                "40",
                "23",
                "38",
                "12",
                "7",
                "10",
                "20",
                "12",
                "14",
                "3",
                "14",
                "7",
                "30",
                "14",
                "14",
                "9",
                "4",
                "1",
                "4",
                "2",
            ],
        );

        return $data['tendik'];
    }
}
