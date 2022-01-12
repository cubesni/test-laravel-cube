<?php

namespace App\Http\Controllers;

use App\Charts\UsersChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showUser()
    {
        $sql = DB::select('SELECT * FROM users');
        DB::disconnect('postgres');
        if ($sql) {
            return response()->json($sql);
        }
    }
}
