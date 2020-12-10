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
        $exam = Form::find($id);

        $question_list = json_decode($exam->content, true);

        foreach ($question_list as &$part) {
            $part['questionList'] = Test::find($part["questionList"]);
        }

        $exam->content = $question_list;

        return view('client.index', [
            'title' => 'Test',
            'data' => $exam
        ]);
    }
}