<?php

namespace De_ik_app_storing\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Questions;


class QuestionFormController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questionform', [
            'questions' => self::getQuestions(),
        ]);
    }

    public function getQuestions()
    {
        return response()->json(Questions::get());
        //$questions = array("question1", "question1");
        //return $questions;
    }
    
}
