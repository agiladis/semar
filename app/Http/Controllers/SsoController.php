<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SsoController extends Controller
{
    function index()
    {
        require_once($_SERVER['DOCUMENT_ROOT'].'/idp/lib/_autoload.php');
        $as = new \SimpleSAML\Auth\Simple('ldap');

        $as->requireAuth();
        $attributes = $as->getAttributes();

        dd($attributes);
    }
}
