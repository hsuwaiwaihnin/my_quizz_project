<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Quizz</title>
    <style type="text/css" href="{{asset('frontend/quiz.css')}}"></style>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
    <style type="text/css">
        #nav-btn a{
            font-size: 17px;
            margin-right: 14px;
            transition: .5s;
            color: black;
            /*background-color: green;*/
            padding: 5px 15px;
        }
        #nav-btn a:hover{
            background-color:#1F618D;
            color: white;
        }
        #whatdo .card{
            opacity: .7;
            transition: .5s;
        }
        #whatdo p{
            transition: .5;
        }
        #whatdo .card:hover{
            opacity: 1;
            transform: translateY(-20px);
        }
        #whatdo .card:hover #whatdo p{
            color: white;
        }
        .footul p a{
            display: block;
            /*text-decoration: none;*/
            line-height: 25px;
            color:white;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <!-- HOME -->
    <div class="container-fluid p-0" style="position: relative;width: 100%;height: 100vh;overflow: hidden;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-5" style="z-index: 3;">
            <a class="navbar-brand" href="#"><img src="{{asset('frontend/img/quiz_logo.png')}}" style="width: 50px; height: 40px; border-radius: 50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav" id="nav-btn">
                        <a class="nav-item nav-link active" href="#">Home</a>
                        @guest
                        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
                        @else
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="javascript:void(0)">Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                        
                    </div>
                </div>
        </nav>
    

            <!-- image   -->
            <div class="background-img" style="position: absolute;width: 100%;height: 100%;overflow: hidden;">
                <img src="{{asset('frontend/img/q2.jpg')}}" style="position: absolute;width: 100%;height: 100%;background-size: cover;background-position: center;">
            </div>
            <div class="content-bg" style="position: absolute;top: 35%;left: 7%;z-index: 2;">
                <p style="font-size: 30px;font-weight: 100;opacity: .8;" class="text-light">The Best Quiz Of The State</p>
                <h1 class="text-light" style="font-size: 50px;line-height: 70px;margin-bottom: 15px;letter-spacing: 5px;">Online Quizz System</h1>
                <button class="btn btn-light text-dark my-3">Improve Now</button>
            </div>
            <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgba(0,0,0,.3);left: 0;top: 0;z-index: 1;">
                
            </div>
    </div>
    <!-- END HOME -->
    <div> @yield('content') </div>
    <!-- footer -->
    <div class="container-fluid" id="footer" style="background-color: #1C2833;padding:100px;padding-bottom: 0px;padding-top: 70px;b  ">
        <div class="row">
            <div class="col-12 col-md-3">
                <p class="mb-4 text-light" style="font-size: 25px;">&copy; 2020 Quizizz Inc.</p>
                <div class="d-flex">
                    <span class="mr-3 text-light pb-3">Follow</span>
                    <i class="fab fa-facebook mr-4" style="color:white;font-size: 20px;"></i>
                    <i class="fab fa-instagram mr-4" style="color: white;font-size: 20px;"></i>
                    <i class="fab fa-tiktok mr-4" style="color: white;font-size: 20px;"></i>
                </div>
            </div>
            <div class="col-12 col-md-3 footul">
                <p><a href="">The Quizz Blog</a></p>
                <p><a href="">Teaching Resources</a></p>
                <p><a href="">Help Center</a></p>
                <p><a href="">Quizz for Work</a></p>
            </div>
            <div class="col-12 col-md-3 footul">
                <p><a href="">Terms of Services</a></p>
                <p><a href="">Pravicy Policy</a></p>
                <p><a href="">Careers</a></p>
                <p><a href="">About us</a></p>
            </div>
            <div class="col-12 col-md-3 ">
                <p class="text-light mb-4" style="font-size: 20px;">Search Me</p>
                <!-- Search form -->
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-12">
                <p class="text-light pt-3" style="border-top: 1px solid white;margin-top: 50px;">Copyright &copy; All Right Reserved, Designed By Susu</p>
            </div>
        </div>
    </div>

    <!-- end footer -->
    <script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('script')
</body>
</html>