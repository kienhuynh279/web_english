<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddStudent;
use App\Http\Requests\EditStudent;
use App\Models\Student;
class StudentController extends Controller
{
    public function getStudent()
    {
        $data['student'] = Student::all();
        return view('admin.page.student.student', $data);
    }
    public function getAddStudent()
    {
        return view('admin.page.student.addstudent');
    }
    public function postAddStudent(AddStudent $request)
    {
        $filename = $request->img->getClientOriginalName();
        $student = new Student;
        $student->name = $request->name;
        $student->content = $request->content;
        $student->avatar = $filename;
        $request->img->storeAs('public/upload/img/student', $filename);
        $student->save();
        return back();
    }
    public function getEditStudent($id)
    {
        $data['student'] = Student::find($id);
        return view('admin.page.student.editstudent', $data);
    }
    public function postEditStudent(EditStudent $request, $id)
    {
        $banner = new Student();
        $arr['name'] = $request->name;
        $arr['content'] = $request->content;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['avatar'] = $img;
            $request->img->storeAs('public/upload/img/student', $img);
        }
        $banner::where('id', $id)->update($arr);
        return redirect('admin/student');
    }
    public function getDeleteStudent($id)
    {
        Student::destroy($id);
        return back();
    }
}
