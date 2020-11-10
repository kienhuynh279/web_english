<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MakeTestController extends Controller
{
    public function index()
    {
        return view('admin.page.make-test.index');
    }
   
}
