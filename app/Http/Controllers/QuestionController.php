<?php

namespace App\Http\Controllers;

use App\Question;
use App\Subject;
use App\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Question::all();
        return view('backend.question.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects=Subject::all();
        return view('backend.question.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "subject"=>"required",
            "question"=>"required",
            "status"=>"required",
            "rightanswer"=>"required",
            "rightanswer1"=>"required"

        ]);

        $question=new Question;
        
        $question->name= $request->question;
        $question->subject_id=$request->subject;
        $question->status=$request->status;
        $question->save();


        if($question->status==1){
            $answers = [$request->answerone,$request->answertwo,$request->answerthree,$request->answerfour];
            foreach ($answers as $ans) {
                $answer=new Answer;
                $answer->question_id=$question->id;
                $answer->answer=$ans;
                if($ans == $request->rightanswer){
                    $answer->status=1;
                }else{
                    $answer->status=0;
                }
                
                $answer->save();
            }
        }
        else{


            $answer=new Answer;
            $answer->question_id=$question->id;
            $answer->answer=$request->rightanswer1;
            $answer->status=1;
            

            $answer->save();
        }
        
        

        // return redirect
        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question=Question::find($id);
        $subjects=Subject::all();
        $answers=Answer::where('question_id',$question->id)->get();
        //dd($answers);
        return view('backend.question.edit',compact('subjects','question','answers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            "subject"=>"required",
            "question"=>"required",
            "status"=>"required",
            "rightanswer"=>"required",
            "rightanswer1"=>"required"

        ]);

        //$question=new Question;
        
        $question->name= $request->question;
        $question->subject_id=$request->subject;
        $question->status=$request->status;
        $question->save();


        if($question->status==1){
            $answers = [$request->answerone,$request->answertwo,$request->answerthree,$request->answerfour];
            foreach ($answers as $ans) {
                //$answer=new Answer;
                $answer->question_id=$question->id;
                $answer->answer=$ans;
                if($ans == $request->rightanswer){
                    $answer->status=1;
                }else{
                    $answer->status=0;
                }
                
                $answer->save();
            }
        }
        else{

            //$answer=new Answer;
            $answer->question_id=$question->id;
            $answer->answer=$request->rightanswer1;
            $answer->status=1;

            $answer->save();
        }
        
        

        // return redirect
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Question::find($id);
        $question->delete();
        return redirect()->route('question.index');
    }
}
