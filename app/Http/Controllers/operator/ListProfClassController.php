<?php

namespace App\Http\Controllers\operator;

use App\Assignedcourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListProfClassController extends Controller
{
    public function index()
    {
        return view('operator.ListProfClassIndex');

    }
    public function getPost_id(Request $request)
    {
        $id = DB::table('users')->where('post_id', $request->post_id)->first()->id;
        $data['assignedcourses'] = DB::table('assignedcourses')
            ->where('user_id',$id)
            ->get();
        return view('operator.showProfCourses',$data);
    }
    public function listStudentClass($id)
    {
        $assignedcourse = Assignedcourse::find($id);
        $students = $assignedcourse->students;
        $user_id = $students->pluck('user_id');

        return $user_id;
            //view('operator.showCourseClassList' , $users);
    }
}
