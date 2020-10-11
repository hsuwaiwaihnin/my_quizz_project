@extends('frontendtemplate')
@section('content')
	

	<div class="container text-dark text-center mt-5 bg-faded">
		
		<table class="table">
			<tr class="bg-dark text-white">
				<th>No</th>
				<th>Subject Name</th>
				<th>Answer Date</th>
				<th>Total Marks</th>
			</tr>
			@php 
			$count=1;
			@endphp
			@foreach(Auth::user()->subjects as $subject)
			<tr class="bg-light">
				<td>{{$count++}}</td>
				<td>{{$subject->name}}</td>
				<td>{{$subject->pivot->answer_date}}</td>
				<td>{{$subject->pivot->total}}</td>
			</tr>
			@endforeach
		</table>
	</div>
<div class="container py-4 my-5 " style="background-color: #F2F3F4;border-radius: 20px;">
    <h1 class="text-center mb-5">Explore Solutions</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card text-center py-3" style="border-radius: 20px;">
                <div class="card-img-top">
                    <img src="frontend/img/Cases2.png" class="w-75 h-75">
                </div>
                <div class="card-body">
                    <h4 class="mb-5" style="font-weight: 400;">Employee Training and Education</h4>
                    <a href="" class="btn btn-outline-danger">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card text-center py-3" style="border-radius: 20px;">
                <div class="card-img-top">
                    <img src="frontend/img/Cases1.png" class="w-75 h-75">
                </div>
                <div class="card-body">
                    <h4 class="mb-5" style="font-weight: 400;">Customer and Community Engagement</h4>
                    <a href="" class="btn btn-outline-danger">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card text-center py-3" style="border-radius: 20px;">
                <div class="card-img-top">
                    <img src="frontend/img/Solutions3.png" class="w-75 h-75">
                </div>
                <div class="card-body">
                    <h4 class="mb-5" style="font-weight: 400;">Meetings and Presentations Skill</h4>
                    <a href="" class="btn btn-outline-danger">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection