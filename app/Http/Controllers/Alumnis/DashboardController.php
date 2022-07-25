<?php

namespace App\Http\Controllers\Alumnis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('alumnis.dashboard.index');
    }
}
