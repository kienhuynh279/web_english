<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Test;
use App\Models\TestCategory;
use App\Models\FormCategory;

class ExamController extends Controller
{
    public function index($id)
    {
        $form = Form::where('id', '=', $id)->get();
        $test = Test::all();
       // $formCate = FormCategory::all();
        return view('client.index', [
            'title' => 'Test',
            'data' => [
                'form' => $form,
                'test' => $test,
                //'FormCate' => $formCate
            ]
        ]);
    }
}