<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
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

        return view('kepegawaian.dosen')->with($data);
    }

    function Jenjang()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['dosen'] = array(
            'jenjang' => [
                "Sp",
                "N/A",
                "S3",
                "S2",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "5",
                "20",
                "17",
                "140",
            ],
        );

        return $data['dosen'];
    }

    function Jabatan()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['dosen'] = array(
            'jabatan' => [
                "N/A",
                "Lektor",
                "Asisten Ahli",
                "Tenaga Pengajar",
                "Lektor Kepala",
                "Profesor",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "5",
                "60",
                "70",
                "102",
                "20",
                "8",
            ],
        );

        return $data['dosen'];
    }

    function Status()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['dosen'] = array(
            'status' => [
                "BLU",
                "Kontrak",
                "Non PNS",
                "PNS",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "5",
                "60",
                "20",
                "102",
            ],
        );

        return $data['dosen'];
    }

    function Fakultas()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $api = dsnFakultas("get");

        $data['dosen'] = array(
            'fakultas' => $api['data']['fakultas'],
            'values' => $api['data']['data'],
        );

        return $data['dosen'];
    }

    function Kelamin()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['dosen'] = array(
            'kelamin' => [
                "Laki-laki",
                "Perempuan",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "190",
                "98",
            ],
        );

        return $data['dosen'];
    }

    function Studi()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['dosen'] = array(
            'studi' => [
                "Studi lnjut dengan biaya sendiri",
                "Studi lanjut dengan biaya sponsor swasta",
                "Studi lanjut dengan biaya negara",
            ],
            // 'tahun' => $api['data']['tahun'],
            'values' => [
                "103",
                "9",
                "30",
            ],
        );

        return $data['dosen'];
    }

    function Usia()
    {

        $data = [];
        // $api = tahunData("get");
        // dd($api);
        // $apiFakultas = fakultas("get");

        $data['dosen'] = array(
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

        return $data['dosen'];
    }
}
