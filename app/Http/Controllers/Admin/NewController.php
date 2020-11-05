<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        return view('admin.page.news.index');
    }

    public function getAdd()
    {
        return view('admin.page.news.detail');
    }

    public function postAdd()
    {
        # code...
    }

    public function getEdit($id)
    {
        # code...
    }

    public function putEdit($id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}
