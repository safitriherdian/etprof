<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function detail()
    {
        return view('detail');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}