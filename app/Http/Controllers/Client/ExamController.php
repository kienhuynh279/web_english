<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
   public function index()
   {
       return view('client.index', [
            'title' => 'Test',
            'page' => 'exam.index',
       ]);
   }
}
