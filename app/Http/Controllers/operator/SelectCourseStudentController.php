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



        $student = Student::find($id);
        $assignedcourses = $student->assignedcourses;
        $unit_count = $student->assignedcourses->sum('unit');
        return view('operator.testselectCourseIndex' ,compact('assignedcourses') )->with(['unit_count' => $unit_count,'student_id' => $id ]);
    }

    public function store(Request $request)
    {
        // get request and check that this course is existing or not
        $data = $request->student_id;
        $student = Student::find($data);
        $assignedcourse = Assignedcourse::where('course_id', $request->course_id)
            ->where('course_gp', $request->course_gp)
            ->get();
        // if count of $assignedcourse is 0 this course by this course_id and course_gp not existing and return error
        if (count($assignedcourse) == 000) {
            $assignedcourses = $student->assignedcourses;
            $unit_count = $student->assignedcourses->sum('unit');// compute count of unit that selected before this
            swal()->error('', ' اطلاعاتی درس صحیح نیست ');
            return view('operator.testselectCourseIndex', compact('assignedcourses'))
                ->with(['unit_count' => $unit_count,'student_id' => $data ]);
        } else {
            //if count of $assignedcourse not 0 check that this course  selected before or not
            $assignedcourse_id = DB::table('assignedcourses')
                ->where('course_id', $request->course_id)
                ->where('course_gp', $request->course_gp)
                ->first()->id;
            $exists = DB::table('assignedcourse_student')
                    ->whereAssignedcourseId($assignedcourse_id)
                    ->whereStudentId($data)
                    ->get();
            //if count of $exists is 0 means this course not selected before
            if(count($exists)==0) {
                $student_term = Student::where('id',$data)->first()->term;
                //this check previous term ave
                if($student_term%10==1){
                    //if present term in one autumnal term
                    $Previous_term=$student_term-10;//for find previous term
                    $user_id=Student::where('id',$data)->first()->user_id;
                    $ave_term=Student::where('user_id',$user_id)
                        ->where('term',$Previous_term)->first()->ave_term;
                    //if ave_term for previous term is <12
                    if($ave_term<12){
                        $max=14;
                        $assignedcourse_unit = DB::table('assignedcourses')
                            ->where('course_id', $request->course_id)
                            ->where('course_gp', $request->course_gp)
                            ->first()->unit;
                        $assignedcourses = $student->assignedcourses;
                        //sum previous selected unit course by present unit  course for compute
                        $p_unit_count = $student->assignedcourses->sum('unit')+$assignedcourse_unit ;
                        $unit_count=$student->assignedcourses->sum('unit');
                        //if $unit_count > of 14
                        if($p_unit_count>$max){
                            swal()->error('', ' شما مجاز به انتخاب بیش از 14 واحد نیستید  ');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);
                        }else{
                            $student->assignedcourses()->attach($assignedcourse_id);
                            $assignedcourses = $student->assignedcourses;
                            $unit_count = $student->assignedcourses->sum('unit') ;
                            $student->unit_term=$unit_count;
                            $student->save();
                            swal()->error('', '  درس با موفقیت ثبت شد');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);

                        }

                    }elseif ($ave_term>=17){
                        $max=24;
                        $assignedcourse_unit = DB::table('assignedcourses')
                            ->where('course_id', $request->course_id)
                            ->where('course_gp', $request->course_gp)
                            ->first()->unit;
                        $assignedcourses = $student->assignedcourses;
                        $p_unit_count = $student->assignedcourses->sum('unit')+$assignedcourse_unit ;
                        $unit_count=$student->assignedcourses->sum('unit');
                        if($p_unit_count>$max){
                            swal()->error('', ' شما مجاز به انتخاب بیش از 24 واحد نیستید  ');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);
                        }else{
                            $student->assignedcourses()->attach($assignedcourse_id);
                            $assignedcourses = $student->assignedcourses;
                            $unit_count = $student->assignedcourses->sum('unit') ;
                            $student->unit_term=$unit_count;
                            $student->save();
                            swal()->error('', '  درس با موفقیت ثبت شد');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);

                        }

                    }else{
                        $max=20;
                        $assignedcourse_unit = DB::table('assignedcourses')
                            ->where('course_id', $request->course_id)
                            ->where('course_gp', $request->course_gp)
                            ->first()->unit;
                        $assignedcourses = $student->assignedcourses;
                        $p_unit_count = $student->assignedcourses->sum('unit')+$assignedcourse_unit ;
                        $unit_count=$student->assignedcourses->sum('unit');
                        if($p_unit_count>$max){
                            swal()->error('', ' شما مجاز به انتخاب بیش از 20 واحد نیستید  ');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);
                        }else{
                            $student->assignedcourses()->attach($assignedcourse_id);
                            $assignedcourses = $student->assignedcourses;
                            $unit_count = $student->assignedcourses->sum('unit') ;
                            $student->unit_term=$unit_count;
                            $student->save();
                            swal()->error('', '  درس با موفقیت ثبت شد');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);

                        }

                    }


                }elseif($student_term%10==2){
                    $Previous_term=$student_term-1;
                    $user_id=Student::where('id',$data)->first()->user_id;
                    $ave_term=Student::where('user_id',$user_id)
                        ->where('term',$Previous_term)->first()->ave_term;
                    if($ave_term<12){
                        $max=14;
                        $assignedcourse_unit = DB::table('assignedcourses')
                            ->where('course_id', $request->course_id)
                            ->where('course_gp', $request->course_gp)
                            ->first()->unit;
                        $assignedcourses = $student->assignedcourses;
                        $p_unit_count = $student->assignedcourses->sum('unit')+$assignedcourse_unit ;
                        $unit_count=$student->assignedcourses->sum('unit');
                        if($p_unit_count>$max){
                            swal()->error('', ' شما مجاز به انتخاب بیش از 14 واحد نیستید  ');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);
                        }else{
                            $student->assignedcourses()->attach($assignedcourse_id);
                            $assignedcourses = $student->assignedcourses;
                            $unit_count = $student->assignedcourses->sum('unit') ;
                             $student->unit_term=$unit_count;
                             $student->save();
                            swal()->error('', '  درس با موفقیت ثبت شد');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);

                        }

                    }elseif ($ave_term>=17){
                        $max=24;
                        $assignedcourse_unit = DB::table('assignedcourses')
                            ->where('course_id', $request->course_id)
                            ->where('course_gp', $request->course_gp)
                            ->first()->unit;
                        $assignedcourses = $student->assignedcourses;
                        $p_unit_count = $student->assignedcourses->sum('unit')+$assignedcourse_unit ;
                        $unit_count=$student->assignedcourses->sum('unit');
                        if($p_unit_count>$max){
                            swal()->error('', ' شما مجاز به انتخاب بیش از 24 واحد نیستید  ');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);
                        }else{
                            $student->assignedcourses()->attach($assignedcourse_id);
                            $assignedcourses = $student->assignedcourses;
                            $unit_count = $student->assignedcourses->sum('unit') ;
                            $student->unit_term=$unit_count;
                            $student->save();
                            swal()->error('', '  درس با موفقیت ثبت شد');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);

                        }

                    }else{
                        $max=20;
                        $assignedcourse_unit = DB::table('assignedcourses')
                            ->where('course_id', $request->course_id)
                            ->where('course_gp', $request->course_gp)
                            ->first()->unit;
                        $assignedcourses = $student->assignedcourses;
                        $p_unit_count = $student->assignedcourses->sum('unit')+$assignedcourse_unit ;
                        $unit_count=$student->assignedcourses->sum('unit');
                        if($p_unit_count>$max){
                            swal()->error('', ' شما مجاز به انتخاب بیش از 20 واحد نیستید  ');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);
                        }else{
                            $student->assignedcourses()->attach($assignedcourse_id);
                            $assignedcourses = $student->assignedcourses;
                            $unit_count = $student->assignedcourses->sum('unit') ;
                            $student->unit_term=$unit_count;
                            $student->save();
                            swal()->error('', '  درس با موفقیت ثبت شد');
                            return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                                ['unit_count' => $unit_count,'student_id' => $data ]);

                        }

                    }


                }elseif($student_term%10==3){
                    $max=6;
                    $assignedcourse_unit = DB::table('assignedcourses')
                        ->where('course_id', $request->course_id)
                        ->where('course_gp', $request->course_gp)
                        ->first()->unit;
                    $assignedcourses = $student->assignedcourses;
                    $p_unit_count = $student->assignedcourses->sum('unit')+$assignedcourse_unit ;
                    $unit_count=$student->assignedcourses->sum('unit');
                    if($p_unit_count>$max){
                        swal()->error('', ' شما مجاز به انتخاب بیش از 6 واحد نیستید  ');
                        return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                            ['unit_count' => $unit_count,'student_id' => $data ]);
                    }else{
                        $student->assignedcourses()->attach($assignedcourse_id);
                        $assignedcourses = $student->assignedcourses;
                        $unit_count = $student->assignedcourses->sum('unit') ;
                        $student->unit_term=$unit_count;
                        $student->save();
                        swal()->error('', '  درس با موفقیت ثبت شد');
                        return view('operator.testselectCourseIndex', compact('assignedcourses') ,
                            ['unit_count' => $unit_count,'student_id' => $data ]);

                    }

                }else{
                    swal()->error('', ' خطا در ثبت ترم  ');
                    return view('operator.testshowTermForSelectCourse',$data);
                }


            }else{
                $assignedcourses = $student->assignedcourses;
                $unit_count = $student->assignedcourses->sum('unit');
                swal()->error('', ' درس قبلا انتخاب شده ');
                return view('operator.testselectCourseIndex', compact('assignedcourses'))
                    ->with(['unit_count' => $unit_count,'student_id' => $data ]);

            }
        }

    }
    public function delete($id ,$student_id)
    {
        $student = Student::find($student_id);
        $student->assignedcourses()->wherepivot('assignedcourse_id',$id)->detach();
        return redirect(route('selectCourse.term_id' ,$student_id ));

    }

}
