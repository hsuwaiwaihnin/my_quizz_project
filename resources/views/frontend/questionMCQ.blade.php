@extends('frontendtemplate')
@section('content')

<div class="container my-5">
	<input type="hidden" name="" data-id=" {{Auth::user()->id}}" id="user">
	<?php $i=1 ?>
	<div class="row">
		@foreach($questions as $ques)
		@if($i==1)
			<input type="hidden" name="" id="subject" data-id="{{$ques->subject_id}}">
		@endif
		<div class="col-12 shadow mb-4 p-3">
			<h5><span class="mr-3">{{$i}}.</span>{{$ques->name}}</h5>
			<div class="d-flex"> 
				@foreach($ques->answers as $ans) 
					<div class="form-check mr-3 my-3">
						<input type="radio" name="answer{{$i}}" data-answer="{{$ans->status}}" data-name="answer{{$i}}" class="form-check-input mr-3 checkme" id="{{$ans->answer}}" value="{{$ans->status}}">
					 	<label class="form-check-label" for="{{$ans->answer}}">{{$ans->answer}}</label>
					</div>
				@endforeach
			</div>
		</div>
		<?php $i++; ?>
		@endforeach
		<button class="btn btn-success" id="submitBtn">Submit</button>
	</div>	
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function  (argument) {
		$('.checkme').click(function(){
			status = $(this).val();
			subject_id =$('#subject').data('id');
			// alert(subject_id);
			name   = $(this).data('name');
			userid = $('#user').data('id');
			cond = false;
			datagp={
				userid :userid,
				subject_id:subject_id,
				status :status,
				name   :name,
			}
			let qstr = localStorage.getItem('qdata');
			let qarr;
			if(qstr==null){
				qarr =  Array();
			}
			else{
				qarr = JSON.parse(qstr);
			}
			$.each(qarr,function(i,v){
				if(v.name == name && v.subject_id == subject_id){
					v.status = status;
					cond = true;
				}
			});
			if (!cond) {
				qarr.push(datagp);
			}
			localStorage.setItem('qdata',JSON.stringify(qarr));
		});

		$('#submitBtn').click(function(event){
			// alert('message?: DOMString');

			let qstr = localStorage.getItem('qdata');
			$.ajaxSetup({
				headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
			});
			$.post('/storeanswer',{data:qstr},function(response){
				alert(response);
				localStorage.clear();

			});
	});

})


</script>
@endsection