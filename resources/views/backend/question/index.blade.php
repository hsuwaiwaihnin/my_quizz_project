@extends('backendtemplate')

@section('content')
<h1>Question List</h1>
<a href="{{route('question.create')}}" class="btn btn-outline-success btn-sm my-3"><i class="fas fa-plus"></i></a>
<div class="row">
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Status</th>
			<th>Subject</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=0 ?>
		@foreach($questions as $question)
		<?php $i++ ?>
		<tr>
			<td>{{$i}}</td>
			<td>{{$question->name}}</td>
			<td>{{$question->status}}</td>
			<td>{{$question->subject->name}}</td>
			
			<td>
				{{-- <a href="{{route('question.edit',$question->id)}}" class="btn btn-warning"><i class="fas fa-tools"></i></a> --}}
				<form action="{{route('question.destroy',$question->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are u sure?')">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger" value="Delete"><i class="fas fa-times"></i></button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection
