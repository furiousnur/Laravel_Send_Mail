<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Student;
use App\Subject;
use App\Mail\StudentExam;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();



class ExamController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //send function
    public function sendExam(Request $request){

    	//first time for check send email

    	// mail::send('email.exam', ['name'=>'Nur Alam'], function($m){
    	// 	$m->from('nurbd830@gmail.com');
    	// 	$m->to('furiousnur@gmail.com');
    	// 	$m->subject('Examination');
    	// });

    	//2nd time

        if (!empty($request['id'])) {
            foreach ($request['id'] as $key => $id) {
                $student = Student::find($id);
                Mail::to($student->email)->send(new StudentExam($student));
            }

            return back();
        }else{
            echo "Please check box only one more multi";
        }

    	// $student = Student::find();
    	// Mail::to($student->email)->send(new StudentExam($student));

    	// echo "Send email successfully!!";
    }

    public function getSendMail(){

        $students = Student::all();
        return view('student.list', compact('students'));
    }


    public function insertinfo(){
        return view('student.insert');
    }

    public function submit_info(Request $request){
        $data = array();
        $data['name'] = $request->s_name;
        $data['sex'] = $request->s_sex;
        $data['phone'] = $request->s_phone;
        $data['email'] = $request->s_email;

        DB::table('students')->insert($data);
        session::put('message', 'Submit Successfully in Database!!');
        return Redirect::to('/insertinfo');
    }


     public function insertsub(){
        return view('student.insertSub');
    }


    public function submit_sub(Request $request){
        $data = array();
        $data['subject'] = $request->sub_name;

        DB::table('subjects')->insert($data);
        session::put('message', 'Submit Successfully in Database!!');
        return Redirect::to('/insertsub');
    }



     public function insertScore(){
        $students = Student::all();
        $subjects = Subject::all();
        return view('student.insertScore', compact('students','subjects'));
    }


       public function submitScore(Request $request){

        $data = array();

        $data['student_id'] = $request->st_id;
        $data['subject_id'] = $request->sub_id;
        $data['score'] = $request->s_score;

        DB::table('scores')->insert($data);
        session::put('message', 'Submit Successfully in Database!!');
        return Redirect::to('/insertScore');
    }

}
