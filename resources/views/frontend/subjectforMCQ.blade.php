@extends('frontendtemplate')
@section('content')
<div class="container mt-5">
    <h1 class="text-center my-5">Explore millions of created QUIZZ</h1>
	<div class="row">
        
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
<div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 p-4">
                <video autoplay="autoplay" muted="muted" playsinline="playsinline" loop="loop" src="frontend/img/Assign.mp4" {{-- src="https://cf.quizizz.com/img/marketing/ET,%20Assign.mp4" --}} poster="https://cf.quizizz.com/img/marketing/Marketing_Homepage-Carousel-2.jpg" style="width: 400px;"></video>
            </div>
            <div class="col-12 col-md-6">
                <div class="mt-5">
                    <h1 class="mb-4">...and keep them up-to-date afterwards.</h1>
                    <p style="font-size: 20px;line-height: 30px;">Assign e-learning with or without deadlines for asynchronous learning.</p>
                    <p style="font-size: 20px;line-height: 30px;">Use study tools like retakes and flashcards to help employees retain information over time.</p>
                </div>
            </div>
        </div>
    </div>

@endsection