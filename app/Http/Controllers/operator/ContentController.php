<?php

namespace App\Http\Controllers\operator;

use App\content;
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
         $content->course_id=$request->course_id;
         $content->contentName=$request->contentName;
         $content->price=$request->price;
         $content->user=$request->user;
         $content->term=$request->term;
         $content->save();
         return redirect(route('content.create'))->with('successMsg', 'user successfully added');
     }
     public function show()
     {
         $data['contents'] = DB::table('contents')->get();
         return view('operator.testShowContent', $data);

     }
}
