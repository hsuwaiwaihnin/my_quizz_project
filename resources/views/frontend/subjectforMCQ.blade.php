@extends('frontendtemplate')
@section('content')
<div class="container mt-5">
	<div class="row">
        {{-- @foreach($subs as $sub)
        @php
        $sub_id=$sub->id;
        @endphp 
        @endforeach--}}
        @foreach($subjects as $sub)
        <div class="col-12 col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body py-5 shadow">
                    <img src="{{$sub->subject->photo}}" style="width: 100%; height: 150px;">
                    <a class="btn btn-success btn-md" href="{{route('questionListMCQ',$sub->subject_id)}}">Start Quizz</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection