<?php

namespace App\Http\Controllers\operator;

use App\content;
use App\type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
     public function create()
     {
         return view('operator.testCreateContent');
     }
     public function store(Request $request )
     {
         $content = new content();
         if ($request->hasFile('link')) {
             $link = $request->file('link');
             $client_name = time() . '.' . $link->getClientOriginalExtension();
             $dir_upload = public_path() . '/upload_files/contents/';
             $link->move($dir_upload, $client_name);
             $content->link = $client_name;
         }
         $content->assignedcourse_id=$request->assignedcourse_id;
         $content->contentName=$request->contentName;
         $content->price=$request->price;
         $content->user=$request->user;
         $content->term=$request->term;
         $content->type_id=$request->type_id;
         $content->save();
         return redirect(route('content.create'))->with('successMsg', 'user successfully added');
     }
     public function showCourse()
     {

         $data['assignedcourses'] = DB::table('assignedcourses')->get();

         return view('operator.testaShowCourseForContent', $data);

     }
     public function showContent($id)
     {
         $data['contents'] = content::where('assignedcourse_id', $id)->get();
         dd($data);

          return view('operator.testShowContent' ,$data );

     }
}
