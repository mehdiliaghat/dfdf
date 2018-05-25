<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignedcourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

        public function rules()
    {
        return [
        //   'course_id'=>'required',
        //    'course_gp'=>'required',
        //   'name'=>'required',
        //   'capacity'=>'required',
        //    'unit'=>'required',
        //   'date'=>'required',
        //   'day'=>'required',
        //   'time'=>'required',
        //  'location'=>'required',
        //  'term'=>'required',
        //  'prerequisite'=>'required',
        //  'need'=>'required',
        //  'type'=>'required',
            //  'prof'=>'required',
            //'pdf_path'=>'required|mimes:pdf|max:10000',

        ];
    }
        public function messages()
    {
        return [
            'pdf_path.required' => 'منبع انتخاب نشده',
            'pdf_path.mimes:pdf'  => 'فرمت فایل مورد نظر درست نیست',
            'pdf_path.max:10000'  => 'اندازه فایل مشخص نیست',

        ];
    }

}
