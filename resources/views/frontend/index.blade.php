@extends('frontendtemplate')
@section('content')

<div class="container-fluid p-0" style="position: relative;width: 100%;height: 100vh;overflow: hidden;">
    <!-- image   -->
    <div class="background-img" style="position: absolute;width: 100%;height: 100%;overflow: hidden;">
        <img src="{{asset('frontend/img/q2.jpg')}}" style="position: absolute;width: 100%;height: 100%;background-size: cover;background-position: center;">
    </div>
    <div class="content-bg" style="position: absolute;top: 35%;left: 7%;z-index: 2;">
        <p style="font-size: 30px;font-weight: 100;opacity: .8;" class="text-light">The Best Quiz Of The State</p>
        <h1 class="text-light" style="font-size: 50px;line-height: 70px;margin-bottom: 15px;letter-spacing: 5px;">Online Quiz</h1>
        <button class="btn btn-light text-dark my-3">Improve Now</button>
    </div>
    <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgba(0,0,0,.3);left: 0;top: 0;z-index: 1;">         
    </div>
</div>
<!-- service -->
<div class="container-fluid " id="service" style="background-color: #EBEDEF;padding-top: 50px;padding-bottom: 50px;">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="d-flex">
                <div class="icon">
                    <i class="fas fa-university mr-2" style="font-size: 60px;"></i>
                </div>
                <div class="content">
                    <h4 style="font-size:25px;">Faster than Work Sheets</h4>
                    <p>many questions for you</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="d-flex">
                <div class="icon">
                    <i class="fas fa-car mr-2" style="font-size: 60px;"></i>
                </div>
                <div class="content">
                    <h4 style="font-size:25px;">Learning The Weekend</h4>
                    <p>many questions for you</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="d-flex">
                <div class="icon">
                    <i class="fas fa-paper-plane mr-2" style="font-size: 60px;"></i>
                </div>
                <div class="content">
                    <h4 style="font-size:25px;">Create Your Own Quizz</h4>
                    <p>many questions for you</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="d-flex">
                <div class="icon ">
                    <i class="fas fa-comments-dollar mr-2" style="font-size: 60px;"></i>
                </div>
                <div class="content">
                    <h4 style="font-size:25px;">Feeback to Work</h4>
                    <p>many questions for you</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->
<!-- start learning -->
<div class="container" style="margin:100px auto;">
    <h1 class="text-center ">Using Quizizz for Distance Learning</h1>
    <div class="row" style="margin-top:150px;">
        <div class="col-12 col-md-4">
            <div class="card text-center" style="border:none;">
                <div class="card-img-top">
                    <img src="frontend/img/phone.png" class="w-50 h-50">
                </div>
                <div class="card-body">
                    <h4>Students ALWAYS see questions on their own screen.</h4>
                    <p class="text-secondary">No stressing about whether everyone joined your video conference.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card text-center" style="border:none;">
                <div class="card-img-top">
                    <img src="frontend/img/people.png" class="w-50 h-50">
                </div>
                <div class="card-body">
                    <h4>Bring people together (apart) with live quizzes and polls.</h4>
                    <p class="text-secondary">No stressing about whether everyone joined your video conference.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card text-center" style="border:none;">
                <div class="card-img-top">
                    <img src="frontend/img/globe.png" class="w-50 h-50">
                </div>
                <div class="card-body">
                    <h4>Assign quizzes and engage families on their own time.</h4>
                    <p class="text-secondary">No stressing about whether everyone joined your video conference.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->
{{-- choose section --}}
<div class="container my-3">
    <h1 class="text-center mb-3">Explore millions of Created quizzes</h1>
    <div class="row">
        <div class="col-12 col-md-5 mb-3 offset-md-1">
            <div class="card text-center">
                <div class="card-body py-5 shadow">
                    <img src="{{asset('frontend/img/mcq.jpg')}}" style="width: 100%; height: 200px;">
                    @if(Auth::check())
                    <a class="btn btn-success btn-md mt-3" href="{{route('subjectListMCQ')}}">Multiple Choice</a>
                    @else
                    <a class="btn btn-success btn-md mt-3" href="{{route('login')}}">Multiple Choice</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 mb-3">
            <div class="card text-center">
                <div class="card-body py-5 shadow">
                    <img src="{{asset('frontend/img/tf.jpg')}}" style="width: 100%; height: 200px;">
                    @if(Auth::check())
                    <a class="btn btn-success btn-md mt-3" href="{{route('subjectListTF')}}">True or False</a>
                    @else
                    <a class="btn btn-success btn-md mt-3" href="{{route('login')}}">True or False</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end choose section --}}
<!-- what we can do -->
<div class="container-fluid" style="width: 100%;background-image: url('frontend/img/q1.jpg');height: 70vh;background-attachment: fixed;background-size: cover;position: relative;padding: 0px;" id="whatdo">
    <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgba(0,0,0,.7);">
    </div>
    <div class="row" style="position: absolute;top: 18%;left:13%;">
        <div class="col-12 col-md-4 text-center">
            <div class="card" style="width: 300px;background-color:transparent;padding: 50px 20px;border:1px solid white;">
                <div class="card-body">
                    <h5 style="font-weight:400;" class="text-info">Pick the perfect quiz or create your own</h5>
                    <p class="text-secondary mt-4">Choose from millions of free teacher-created quizzes or quickly make your own.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="card" style="width: 300px;background-color:transparent;padding: 50px 20px;border:1px solid white;">
                <div class="card-body">
                    <h5 style="font-weight:400;" class="text-info">Students engage at their own pace</h5>
                    <p class="text-secondary mt-4">Choose from millions of free teacher-created quizzes or quickly make your own.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="card" style="width: 300px;background-color:transparent;padding: 50px 20px;border:1px solid white;">
                <div class="card-body">
                    <h5 style="font-weight:400;" class="text-info">Put feedback to work, no grading required</h5>
                    <p class="text-secondary mt-4">Choose from millions of free teacher-created quizzes or quickly make your own.</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- end -->
<!-- start little word -->
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
<!-- end  -->
<!-- exlore solutions -->
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
<!-- end solutions -->
@endsection