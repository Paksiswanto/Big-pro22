<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UniPro App">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>Login</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/bootstrap.min.css")}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/main.css")}}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

</head>

<body class="authentication">

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <!-- *************
			************ Login container start *************
		************* -->
    <div class="login-container">

        <div class="container-fluid h-100 row" style="overflow: hidden">

            <!-- Row start -->
            <div class="row g-0 h-100">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-about">
                        {{-- <div class="slogan">
							<img src="{{asset("Gmbslagi/img/Carausel/carausel.png")}}" alt="">
                    </div> --}}
                    <div class="card">
                        <div class="card-body">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset("Gmbslagi/img/Carausel/carausel.png")}}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset("Gmbslagi/img/Carausel/carausel_2.png")}}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset("Gmbslagi/img/Carausel/carausel_11.png")}}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset("Gmbslagi/img/Carausel/carausel_6.png")}}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset("Gmbslagi/img/Carausel/carausel_12.png")}}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="login-wrapper">

                        <div class="login-screen" style="margin-left: 27px; margin-bottom: 100px;">
                            <div class="login-body">
                                <a href="crm.html" class="login-logo">
                                    <img src="{{ asset ("gmbslagi/img/logo.svg")}}" alt="iChat">
                                </a>
                                <form action="{{ route('users.updatePassword', $user) }}" method="POST">
                                    @csrf
                                <div class="field-wrapper">
                                    <div class="form-group ">
                                        <label for="Email">Email</label>
                                        <input type="Email" name="Email" value="{{ $user->email }}" id="Email" class="form-control" readonly>
                                     
                                </div>
                                <div class="field-wrapper">
                                    <div class="form-group ">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control  @error('password')
                                        is-invalid
                                    @enderror" required>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                    </div>
                                </div>
                                <div class="field-wrapper">
                                    <div class="form-group">
                                        <label for="password_confirmation">Konfirmasi Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control  @error('password')
                                        is-invalid
                                    @enderror" required>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3">Simpan Password</button>
                                </form>
                                </div>
                                
                                
                </div>
            </div>
        </div>

        <!-- Row end -->


    </div>
    </div>
    <!-- *************
			************ Login container end *************
		************* -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset ("Gmbslagi/js/jquery.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/modernizr.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/moment.js")}}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Main Js Required -->
    <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>
