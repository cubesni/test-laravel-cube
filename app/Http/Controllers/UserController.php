<?php

namespace App\Http\Controllers;

use App\Charts\UsersChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index(UsersChart $chart)
    {
        $request = Request::create('/api/get_users', 'GET');

        $response = Route::dispatch($request);

        $responseBody = $response->getContent();
        $json = json_decode($responseBody, true);

        $user_arr = array();
        $count_arr = array();
        foreach ($json as $user) {
            $user_arr[] = $user['name'];
            $email = $user['email'];
        }
        // print_r($user_arr);
        $a = array_fill(0, count($json), 100);

        return view('users_chart', compact('responseBody'), ['charts' => $chart->build('Users', '', $a, $user_arr)]);
    }
}
