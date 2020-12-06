<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestResource;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $condition = [
            'del_flg' => 0,
            'status' => 1,
        ];

        if ($request->has('id')) array_push($condition, ['id', $request->query('id')]);
        else if ($request->has('k')) array_push($condition, ['title', 'LIKE', '%' . $request->query('k') . '%']);

        // dd($condition);

        return TestResource::collection(Test::where($condition)->get());
    }
}