<!DOCTYPE html>
<html lang="en">


<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{url('Admin/assets/img/favicon.ico')}}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{url('Admin/assets/css/vendors.css')}}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{url('Admin/assets/css/style.css')}}" />
</head>

<body class="bg-white">
@include('sweetalert::alert')
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            
            <!-- end pre-loader -->

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h1 class="mb-2">We Are Mentor</h1>
                                        <p>Welcome back, please login to your account.</p>
                                        <form method="POST" action="{{url('/adminlogin')}}" enctype="multipart/form-data" class="needs-validation" class="mt-3 mt-sm-5">
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">User Name*</label>
                                                        <input type="text" class="form-control" placeholder="Username" name="email"/>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Password*</label>
                                                        <input type="password" class="form-control" placeholder="Password" name="password"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 mt-3">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Send" >Login
                                                </button>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <p>Don't have an account ?<a href="{{url('/register')}}"> Sign Up</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="{{url('Admin/assets/img/bg/login.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end login contant-->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->



    <!-- plugins -->
    <script src="{{url('Admin/assets/js/vendors.js')}}"></script>

    <!-- custom app -->
    <script src="{{url('Admin/assets/js/app.js')}}"></script>
</body>


</html>