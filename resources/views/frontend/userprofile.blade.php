@extends('frontendtemplate')
@section('content')
	
	<div class="container">
		<div class="row shadow">
			<div class="col-12">
				<p>User Name: {{$user_name}}</p> 
				<p>Subject Name: {{$subject_name}}</p>
				<p>Answer Date: {{$answer_date}}</p>
				<p>Total Mark: {{$total}}</p>
			</div>
			
		</div>
		
	</div>

@endsection