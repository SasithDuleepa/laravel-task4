<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StudentData;
class StudentDataController extends Controller
{
    function addStudentData(Request $req)
    {
        $studentdata = new StudentData;
        $studentdata->name=$req->name;
        $studentdata->registration_number=$req->registration_number;
        $studentdata->contact_number=$req->contact_number;
        $studentdata->year=$req->year;
        $studentdata->stream=$req->stream;

        $studentdata->stream_subjects=     json_encode($req->stream_subjects);

        // dd($studentdata);

        $studentdata->save();


        return redirect('/');
    }
}
