<?php

namespace App\Http\Controllers\operator;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SelectcoursesController extends Controller
{
    public function index()
    {
        $data['users'] = DB::table('users')->where('type', 'Student')->get();
        return view('operator.testshowStudentForSelectTerm',$data);
    }

    public function create($id)
    {
        return view('operator.testcreateTerm')->with(['user_id'=>$id]);
    }
    public function show($id)
    {
        $data['students'] = DB::table('students')->where('user_id',$id)->get();
        if(Student::where('user_id',$id)->count()==0){
            swal()->error('',' اطلاعاتی ثبت نشده ');
            return redirect(route('selectTerm.index'));
        }
        else
        return view('operator.testshowTerm',$data);

    }


    public function store(StudentRequest $request)
    {
        $student = new Student();
        $student->ave = $request->ave ;
        $student->ave_term =$request->ave_term;
        $student->unit_getting =$request->unit_getting;
        $student->unit_spent =$request->unit_spent;
        $student->unit_term =$request->unit_term;
        $student->state_term =$request->state_term;
        $student->state =$request->state;
        $student->term =$request->term;
        $student->arrival =$request->arrival;
        $student->nighday =$request->nighday;
        $student->num_term =$request->num_term;
        $student->user_id =$request->user_id;
        $student->save();
        swal()->success('',' اطلاعات ترم با موفقیت ثبت شد');
        return redirect(route('selectTerm.create',$student->user_id ));
            //->with('user_id',$student->user_id);
    }
    public function delete($id)
    {
        $student = Student::where('id' , $id)->first();
        if($student){
            $student->delete();
            return redirect()->route('selectTerm.show' ,$student->user_id );

        }
        return redirect()->route('selectTerm.show' ,$student->user_id );

    }
    public function edit($id)
    {
        $student= Student::find($id);
        return view('operator.testeditTerm' ,compact('student'));


    }
    public function update(StudentRequest $request , $id)
    {
        $student = Student::find($id);
        $student->ave = $request->ave ;
        $student->ave_term =$request->ave_term;
        $student->unit_getting =$request->unit_getting;
        $student->unit_spent =$request->unit_spent;
        $student->unit_term =$request->unit_term;
        $student->state_term =$request->state_term;
        $student->state =$request->state;
        $student->term =$request->term;
        $student->arrival =$request->arrival;
        $student->nighday =$request->nighday;
        $student->num_term =$request->num_term;
        $student->user_id =$request->user_id;
        $student->save();
        swal()->success('','  تغییر مورد نظر اعمال شد');
        return redirect()->route('selectTerm.show' ,$student->user_id );


    }

}
