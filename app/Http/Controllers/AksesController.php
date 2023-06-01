<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\SemarAuth;

class AksesController extends Controller
{

    function authentication(Request $req)
    {
        // pre($req->all());

        $datapost = array(
            'username' => $req->username,
            'password' => $req->password
        );
        $login = api_sadewa('POST', 'api/semar/akses/login', $datapost, null, false);
        $login = $login->object();
        // dd($login);

        $validator = Validator::make($req->all(), [
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $validated = $validator->validated();

        if($login->success):
            $sess_data = (array) $login->data;
            // dd($sess_data);
            SemarAuth::saveUser($sess_data);
            return redirect()->route('dashboard.dashboard.index');
        else:
            $arr_msg[$login->msg] = 'alert-danger';
            return redirect()->route('login')->with('msg', $arr_msg);
        endif;
    }

    function logout()
    {
        SemarAuth::logout();
        return redirect()->route('login');
    }

    function sess()
    {
        $sess = session()->all();
        dd($sess);
    }
}
