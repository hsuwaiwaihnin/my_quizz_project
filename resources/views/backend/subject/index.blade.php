@extends('backendtemplate')

@section('content')
<h1>Subject List</h1>
<a href="{{route('subject.create')}}" class="btn btn-outline-success btn-sm my-3"><i class="fas fa-plus"></i></a>
<div class="row">
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Photo</th>
			<th>Category</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=0 ?>
		@foreach($subjects as $subject)
		<?php $i++ ?>
		<tr>
			<td>{{$i}}</td>
			<td>{{$subject->name}}</td>
			<td><img src="{{URL::asset($subject->photo)}}" style="width: 50px;height: 50px;"></td>
			<td>{{$subject->category->name}}</td>
			<td>
				<a href="{{route('subject.edit',$subject->id)}}" class="btn btn-warning"><i class="fas fa-tools"></i></a>
				<form action="{{route('subject.destroy',$subject->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are u sure?')">
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
