<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Category;
use App\Question;
use App\Answer;
use App\User;
use Auth;


class FrontendController extends Controller
{
	public function index()
	{
	    $subjects=Subject::all();

	    return view('frontend.index',compact('subjects'));
	}

	
	public function subjectTestMCQ()
	{
		$subjects=Question::where('status',1)->distinct()->get(['subject_id']);
		return view('frontend.subjectforMCQ',compact('subjects'));
	}

	public function subjectTestTF()
	{
		$subjects=Question::where('status',0)->distinct()->get(['subject_id']);
		//dd($subjects);
		return view('frontend.subjectforTF',compact('subjects'));
	}

	public function questionTestMCQ($id)//subject_id
	{
		$questions=Question::where('subject_id',$id)->where('status',1)->get();
		return view('frontend.questionMCQ',compact('questions'));
	}

	public function questionTestTF($id)
	{
		$questions=Question::where('subject_id',$id)->where('status',0)->get();
		return view('frontend.questionTF',compact('questions'));
	}

	public function storedata(Request $request)
	{
		$carts=json_decode($request->data);
		//dd($carts);

		$user=User::find(Auth::id());
		$total=0;
		$subject_id=$carts[0]->subject_id;
		foreach ($carts as $row) {
			$total+=$row->status;
		}
		$user->subjects()->attach($subject_id,['answer_date'=>date('Y-m-d'),'total'=>$total]);

		return $total;


		
	}
}
