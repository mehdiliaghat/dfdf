<?php

namespace App\Http\Controllers\operator;

use App\Assignedcourse;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SelectCourseStudentController extends Controller
{
     public function index()
     {
         $data['users'] = DB::table('users')->where('type', 'Student')->get();
         return view('operator.testshowStudentForSelectCourse',$data);

     }
    public function getTerm_id($id)
    {
       // $student_id=Student::where('user_id',$id)->where('term' ,'972')->first()->id;
        $data['students'] = DB::table('students')->where('user_id',$id)->get();
        if(Student::where('user_id',$id)->count()==0){
            swal()->error('',' اطلاعاتی ثبت نشده ');
            return redirect(route('selectCourseIndex'));
        }
        else
            return view('operator.testshowTermForSelectCourse',$data);
    }
    public function term_id($id)
    {


       /* if ($assignedcourses) {
        foreach ($assignedcourses as $assignedcourse) {
            $unit_count = $assignedcourse->sum('unit');
        }
    }else
            $unit_count = 0 ;
       */
        $student = Student::find($id);
        $assignedcourses = $student->assignedcourses;
        $unit_count = $student->assignedcourses->sum('unit');
        return view('operator.testselectCourseIndex' ,compact('assignedcourses') )->with(['unit_count' => $unit_count,'student_id' => $id ]);
    }

    public function store(Request $request)
    {
        $data = $request->student_id;
        $student = Student::find($data);
        $assignedcourse = Assignedcourse::where('course_id', $request->course_id)
            ->where('course_gp', $request->course_gp)
            ->get();


        if (count($assignedcourse) == 000) {
            $assignedcourses = $student->assignedcourses;
            $unit_count = $student->assignedcourses->sum('unit');
            swal()->error('', ' اطلاعاتی درس صحیح نیست ');
            return view('operator.testselectCourseIndex', compact('assignedcourses'))
                ->with(['unit_count' => $unit_count,'student_id' => $data ]);
        } else {
            $assignedcourse_id = DB::table('assignedcourses')
                ->where('course_id', $request->course_id)
                ->where('course_gp', $request->course_gp)
                ->first()->id;
            $exists = DB::table('assignedcourse_student')
                    ->whereAssignedcourseId($assignedcourse_id)
                    ->whereStudentId($data)
                    ->get();

            if(count($exists)==0) {
                $student->assignedcourses()->attach($assignedcourse_id);
                $assignedcourses = $student->assignedcourses;
                $unit_count = $student->assignedcourses->sum('unit');


                    return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                        ['unit_count' => $unit_count,'student_id' => $data ]);

            }else{
                $assignedcourses = $student->assignedcourses;
                $unit_count = $student->assignedcourses->sum('unit');
                swal()->error('', ' درس قبلا انتخاب شده ');
                return view('operator.testselectCourseIndex', compact('assignedcourses'))
                    ->with(['unit_count' => $unit_count,'student_id' => $data ]);

            }
        }




        /* if ($assignedcourses) {
             foreach ($assignedcourses as $assignedcourse) {
                 $unit_count = $assignedcourse->sum('unit');
             }
         }*/



    }
    public function delete($id ,$student_id)
    {
        $student = Student::find($student_id);
        $student->assignedcourses()->wherepivot('assignedcourse_id',$id)->detach();
        return redirect(route('selectCourse.term_id' ,$student_id ));

    }

}
