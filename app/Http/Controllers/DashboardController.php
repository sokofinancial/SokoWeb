<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        return view('dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function test()
    {
        return view('test', [
            'title' => 'Test'
        ]);
    }
}
