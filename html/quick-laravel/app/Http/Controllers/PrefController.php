<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrefController extends Controller
{
    function index(Request $request)
    {
        $data = DB::select("SELECT * FROM kvs1");
        return $this->responseJsonUnescapedUnicode($data);
    }

    function randomOne(Request $request)
    {
        $data = 'random oneです';
        return $this->responseJsonUnescapedUnicode($data);
    }
}
