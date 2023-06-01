<?php

// use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Http;


if (!function_exists('pre')) {
    function pre($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (! function_exists('api_sadewa')) {
    function api_sadewa($method, $url, $datapost = null, $files = null, $jwt=false)
    {
        $sadewa_api_url = env('REST_API_SADEWA_URL', 'xxx').$url;
        $sadewa_api_username = env('REST_API_SADEWA_USERNAME', 'xxx');
        $sadewa_api_password = env('REST_API_SADEWA_PASSWORD', 'xxx');

        $http_req = Http::withBasicAuth($sadewa_api_username, $sadewa_api_password)->withOptions(['verify' => false]);
        if($jwt):
            $http_req = $http_req->withHeaders(['jwt'=>sess_jwt()]);
        endif;

        // $http_req->dd();
        
        switch ($method) {
            case 'POST':
                $response = $http_req->asForm()->post($sadewa_api_url, $datapost);
            break;

            // GET
            default:
                $response = $http_req->get($sadewa_api_url);
            break;
        }

        return $response;
    }
}

if (! function_exists('api_unnes')) {
    function api_unnes($method, $url, $datapost = null, $files = null, $jwt=false)
    {
        $unnes_api_url = env('REST_API_UNNES_URL', 'xxx').$url;
        $unnes_api_username = env('REST_API_UNNES_USERNAME', 'xxx');
        $unnes_api_password = env('REST_API_UNNES_PASSWORD', 'xxx');

        $http_req = Http::withBasicAuth($unnes_api_username, $unnes_api_password);
        if($jwt):
            $http_req = $http_req->withHeaders(['jwt'=>sess_jwt()]);
        endif;

        switch ($method) {
            case 'POST':
                $response = $http_req->post($unnes_api_url, $datapost);
            break;

            // GET
            default:
                $response = $http_req->get($unnes_api_url);
            break;
        }

        // dd($response);
        return $response;
    }
}


if (!function_exists('home')) {
    function home($method)
    {
        $sadewa_api_url = env('API_SADEWA_URL', 'https://sadewa.upnyk.ac.id/api/semar/dashboard/home');
        $sadewa_api_username = env('API_SADEWA_USERNAME', 'SEMArAp1');
        $sadewa_api_password = env('API_SADEWA_PASSWORD', '*SEMArAp1#');

        $http_req = Http::withBasicAuth($sadewa_api_username, $sadewa_api_password);
        // if ($jwt) :
        //     $http_req = $http_req->withHeaders(['jwt' => sess_jwt()]);
        // endif;

        switch ($method) {
            case 'POST':
                // $response = $http_req->post($sadewa_api_url, $datapost);
                break;

            default:
                $response = $http_req->get($sadewa_api_url);
                break;
        }

        // dd($response);
        return $response;
    }
}

if (!function_exists('tahunData')) {
    function tahunData($method)
    {
        $sadewa_api_url = env('API_SADEWA_URL', 'https://sadewa.upnyk.ac.id/api/semar/dashboard/tahun');
        $sadewa_api_username = env('API_SADEWA_USERNAME', 'SEMArAp1');
        $sadewa_api_password = env('API_SADEWA_PASSWORD', '*SEMArAp1#');

        $http_req = Http::withBasicAuth($sadewa_api_username, $sadewa_api_password);
        // if ($jwt) :
        //     $http_req = $http_req->withHeaders(['jwt' => sess_jwt()]);
        // endif;

        switch ($method) {
            case 'POST':
                // $response = $http_req->post($sadewa_api_url, $datapost);
                break;

            default:
                $response = $http_req->get($sadewa_api_url);
                break;
        }

        // dd($response);
        return $response;
    }
}

if (!function_exists('fakultas')) {
    function fakultas($method)
    {
        $sadewa_api_url = env('API_SADEWA_URL', 'https://sadewa.upnyk.ac.id/api/semar/dashboard/fakultas');
        $sadewa_api_username = env('API_SADEWA_USERNAME', 'SEMArAp1');
        $sadewa_api_password = env('API_SADEWA_PASSWORD', '*SEMArAp1#');

        $http_req = Http::withBasicAuth($sadewa_api_username, $sadewa_api_password);
        // if ($jwt) :
        //     $http_req = $http_req->withHeaders(['jwt' => sess_jwt()]);
        // endif;

        switch ($method) {
            case 'POST':
                // $response = $http_req->post($sadewa_api_url, $datapost);
                break;

            default:
                $response = $http_req->get($sadewa_api_url);
                break;
        }

        // dd($response);
        return $response;
    }
}

if (!function_exists('jenjang')) {
    function jenjang($method)
    {
        $sadewa_api_url = env('API_SADEWA_URL', 'https://sadewa.upnyk.ac.id/api/semar/dashboard/jenjang');
        $sadewa_api_username = env('API_SADEWA_USERNAME', 'SEMArAp1');
        $sadewa_api_password = env('API_SADEWA_PASSWORD', '*SEMArAp1#');

        $http_req = Http::withBasicAuth($sadewa_api_username, $sadewa_api_password);
        // if ($jwt) :
        //     $http_req = $http_req->withHeaders(['jwt' => sess_jwt()]);
        // endif;

        switch ($method) {
            case 'POST':
                // $response = $http_req->post($sadewa_api_url, $datapost);
                break;

            default:
                $response = $http_req->get($sadewa_api_url);
                break;
        }

        // dd($response);
        return $response;
    }
}

if (!function_exists('dsnFakultas')) {
    function dsnFakultas($method)
    {
        $sadewa_api_url = env('API_SADEWA_URL', 'https://sadewa.upnyk.ac.id/api/semar/dashboard/dsnFakultas');
        $sadewa_api_username = env('API_SADEWA_USERNAME', 'SEMArAp1');
        $sadewa_api_password = env('API_SADEWA_PASSWORD', '*SEMArAp1#');

        $http_req = Http::withBasicAuth($sadewa_api_username, $sadewa_api_password);
        // if ($jwt) :
        //     $http_req = $http_req->withHeaders(['jwt' => sess_jwt()]);
        // endif;

        switch ($method) {
            case 'POST':
                // $response = $http_req->post($sadewa_api_url, $datapost);
                break;

            default:
                $response = $http_req->get($sadewa_api_url);
                break;
        }

        // dd($response);
        return $response;
    }
}

if (!function_exists('dsnJenjang')) {
    function dsnJenjang($method)
    {
        $sadewa_api_url = env('API_SADEWA_URL', 'https://sadewa.upnyk.ac.id/api/semar/dashboard/dsnJenjang');
        $sadewa_api_username = env('API_SADEWA_USERNAME', 'SEMArAp1');
        $sadewa_api_password = env('API_SADEWA_PASSWORD', '*SEMArAp1#');

        $http_req = Http::withBasicAuth($sadewa_api_username, $sadewa_api_password);
        // if ($jwt) :
        //     $http_req = $http_req->withHeaders(['jwt' => sess_jwt()]);
        // endif;

        switch ($method) {
            case 'POST':
                // $response = $http_req->post($sadewa_api_url, $datapost);
                break;

            default:
                $response = $http_req->get($sadewa_api_url);
                break;
        }

        // dd($response);
        return $response;
    }
}
