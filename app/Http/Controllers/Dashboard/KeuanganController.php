<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    function index()
    {
        $PAGU = 100000000000;
        $persen = 80;
        $rupiah = 10000000000;

        // Format variabel $rupiah dengan tanda titik sebagai pemisah ribuan
        $rupiahFormatted = number_format($rupiah);
        $paguFormatted = number_format($PAGU);

        return view('keuangan.keuangan', compact('paguFormatted', 'persen', 'rupiahFormatted'));
    }
}
