<?php

namespace App\Http\Controllers\operator;

use App\Http\Requests\AssignedcourseRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Assignedcourse;
use Alert;
use Softon\SweetAlert\Facades\SWAL;
class AssignedcoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function index()
   {
       $data['assignedcourses'] = DB::table('assignedcourses')->get();
       return view('operator.testshowAssignedcourses', $data);
   }
   public function store(AssignedcourseRequest $request)
   {
       $result=User::where('post_id',$request->post_id);
       if($result->count()==000){
           swal()->error('',' استادی با کد وارد شده ثبت نشده ');
           return redirect(route('assignedcourses.create'));
       }else{
           $assignedcourse = new Assignedcourse();
           if ($request->hasFile('pdf_path')) {
               $pdf_path = $request->file('pdf_path');
               $pdf_name = $request->course_id . '.' . $pdf_path->getClientOriginalExtension();
               $dir_upload = public_path() .'/upload_files/assignedCourse/';
               $pdf_path->move($dir_upload, $pdf_name);
               $assignedcourse->pdf_path = $pdf_name;
           }
          // dd($request->course_id . '.' . $request->file('pdf_path')->getClientOriginalExtension());
           $assignedcourse->course_id =$request->course_id;
           $assignedcourse->course_gp =$request->course_gp;
           $assignedcourse->name =$request->name;
           $assignedcourse->capacity =$request->capacity;
           $assignedcourse->unit =$request->unit;
           $assignedcourse->date =$request->date;
           $assignedcourse->day =$request->day;
           $assignedcourse->time=$request->time;
           $assignedcourse->location=$request->location;
           $assignedcourse->term =$request->term;
           $assignedcourse->post_id =$request->post_id;
           $assignedcourse->prerequisite =$request->prerequisite;
           $assignedcourse->need =$request->need;
           $assignedcourse->type =$request->type;
           $assignedcourse->prof =$request->prof;
           $assignedcourse->user_id=User::where('post_id',$request->post_id)->first()->id;
           $assignedcourse->save();
           swal()->success('',' کاربر با موفقیت ثبت شد');
           return redirect(route('assignedcourses.create'));
       }

   }
   public function create()
   {
       return view('operator.testcreateAssignedcourse');
   }
   public function edit($id)
   {
       $assignedcourse = Assignedcourse::find($id);
       return view('operator.testeditAssignedcourses', compact('assignedcourse'));
   }
   public function update(AssignedcourseRequest $request, $id)
   {
       $result=User::where('post_id',$request->post_id);
       if($result->count()>0){
           $assignedcourse = Assignedcourse::find($id);
           if($request->hasfile('pdf_path'))
           {
               $dir_upload = public_path() . '/upload_files/assignedCourse/';
               if(!empty($assignedcourse->pdf_path))
               {
                   \File::delete($dir_upload .$assignedcourse->pdf_path);
               }
               if ($request->hasFile('pdf_path'))
               {
                   $pdf_path = $request->file('pdf_path');
                   $pdf_name = $request->course_id . '.' . $pdf_path->getClientOriginalExtension();
                   $dir_upload = public_path() . '/upload_files/assignedCourse/';
                   $pdf_path->move($dir_upload, $pdf_name);
                   $assignedcourse->pdf_path = $pdf_name;
               }
           }
           $assignedcourse->course_id =$request->course_id;
           $assignedcourse->course_gp =$request->course_gp;
           $assignedcourse->name =$request->name;
           $assignedcourse->capacity =$request->capacity;
           $assignedcourse->unit =$request->unit;
           $assignedcourse->date =$request->date;
           $assignedcourse->day=$request->day;
           $assignedcourse->time=$request->time;
           $assignedcourse->location=$request->location;
           $assignedcourse->term=$request->term;
           $assignedcourse->post_id=$request->post_id;
           $assignedcourse->prerequisite=$request->prerequisite;
           $assignedcourse->need=$request->need;
           $assignedcourse->type=$request->type;
           $assignedcourse->prof=$request->prof;
           $assignedcourse->user_id=User::where('post_id',$request->post_id)->first()->id;
           $assignedcourse->save();
           swal()->success('','  تغییر مورد نظر باموفقیت اعمال شد');
           return redirect(route('assignedcourses.index'));
       }else
           swal()->error('',' استادی با کد وارد شده ثبت نشده ');
       return redirect(route('assignedcourses.edit', [$id]));
   }

   public function delete($id)
   {
       $assignedcourse = Assignedcourse::where('id', $id)->first();
       if($assignedcourse){
           $assignedcourse->delete();
           return redirect()->route('assignedcourses.index');
       }
       return redirect()->route('assignedcourses.index');
   }
   public function show(){}
}
