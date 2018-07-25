<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Student;
use App\Score;

class StudentExam extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $student;
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $scores = Score::join('subjects', 'subjects.id','=', 'scores.subject_id')
        ->join('students', 'students.id','=', 'scores.student_id')
        ->select(

                'subjects.id as sub_id',
                'subjects.subject',
                'scores.score'
            )
        ->where('students.id',$this->student->id)->get();

        return $this->from('nurbd830@gmail.com')
                    ->subject('Eximanation')
                    ->view('email.exam')
                    ->with(['student' =>$this->student, 'exams' => $scores]);
    }
}
