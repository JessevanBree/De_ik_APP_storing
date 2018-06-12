<?php

namespace De_ik_app_storing\Http\Controllers;

use Illuminate\Http\Request;
use De_ik_app_storing\Question;


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
        $allQuestions = Question::get();
        return $allQuestions;
    }
    
}
