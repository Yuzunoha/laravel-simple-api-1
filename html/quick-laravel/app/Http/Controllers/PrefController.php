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

    /**
     * random_int(2, 5) は値2と5をそれぞれ取り得る。
     */
    function randomOne(Request $request)
    {
        $all = DB::select("SELECT * FROM kvs1");
        $idxMax = count($all) - 1;
        $idxRandom = random_int(0, $idxMax);
        $data = $all[$idxRandom];
        return $this->responseJsonUnescapedUnicode($data);
    }
}
