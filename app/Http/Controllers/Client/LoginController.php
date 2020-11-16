<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('client.index', [
            'title' => 'Docs',
            'page' => 'login.index'
        ]);
    }
}