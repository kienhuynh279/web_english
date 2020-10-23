<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
       return view('client.index',[
           'title' => 'Tin Tức',
           'page' => 'news.index'
       ]);
    }

    public function detail()
    {
       return view('client.index',[
           'title' => 'Chi Tiết Tin Tức',
           'page' => 'news.detail'
       ]);
    }
}
