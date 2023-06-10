<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/layout-tabs-tooltip.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:56 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Uni Pro Admin Template - Admin Dashboard</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/show_report.css") }}">

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .fa-signal,
        .fa-chart-pie {
            color: black;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #F9F9F9
        }
    </style>
</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        @include('layouts.sidebar')

        <!-- Sidebar wrapper end -->

        <!-- *************
				************ Main container start *************
			************* -->
        <div class="main-container" style="background-color: #FFFFFF;">

            <!-- Page header starts -->
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12">
                            <!-- Card start -->
                            <div class="">
                                <div class="card-title">
                                    <div class="d-flex flex-wrap">
                                        <h1 class="card-title col-xl-10 col-lg-10 col-md-8 col-sm-8 col-8" style="font-size: 20px;">Ringkasan Pengeluaran <i class="icon-star2 " style="padding-left: 10px; font-size: 19px;"></i> </h1>
                                        <button type="button" class="btn btn-secondary col-xl-1 col-lg-1 col-md-2 col-sm-2 col-2 ">cetak</button>
                                        <button type="button" class="btn btn-secondary col-xl-1 col-lg-1 col-md-2 col-sm-2  col-2  ">Expor</button>
                                    </div>
                                </div>

                            </div>
                            <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <select class="mt-5 mb-3" id="ex-caret-position" multiple autocomplete="off" placeholder="How cool is this?">
                                <option selected>amazing</option>
                                <option selected>awesome</option>
                                <option>cool</option>
                                <option>excellent</option>
                                <option>great</option>
                                <option>neat</option>
                                <option>superb</option>
                                <option>wonderful</option>
                            </select>
                            </div>
                            <div class="d-flex flex-column flex-sm-row">
                                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                  <div class="row">
                                  <div class="d-flex">
                                        <div class="col-2 ">
                                            <h5 class="mt-3">Pendapatan</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr class="udin" style="height: 3px; background-color: #000000;">
                                        <div class="d-flex ">
                                        <div class="col-2 ">
                                            <h5>Deposit</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                    </div>
                                    <hr class=" col-12"style="background-color: #A9A9A9;">
                                    <div class="d-flex">
                                        <div class="col-2 ">
                                            <h5 class="">Total</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                   </div>
                                  </div>
                                    </div>
                                </div>
                                </div>
                            <div class="d-flex flex-column flex-sm-row">
                                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                  <div class="row">
                                  <div class="d-flex">
                                        <div class="col-2 ">
                                            <h5 class="mt-5">Biaya</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr class="" style="height: 3px; background-color: #000000;">
                                        <div class="d-flex ">
                                        <div class="col-2 ">
                                            <h5>Lainnya</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5>Rp.0.0</h5>
                                        </div>
                                    </div>
                                    <hr class=" col-12" style="background-color: #A9A9A9;">
                                    <div class="d-flex">
                                        <div class="col-2 ">
                                            <h5 class="">Total</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                        <div class="col-2 ">
                                            <h5 class="">Rp.0.0</h5>
                                        </div>
                                   </div>
                                  </div>
                                    </div>
                                </div>
                                </div>

                            </div>


                        </div>
                        <!-- Card end -->
                    </div>
                </div>
                <!-- Row end -->

            </div>
            <!-- Content wrapper end -->

            <!-- App Footer start -->
            <div class="app-footer">© Uni Pro Admin 2021</div>
            <!-- App footer end -->

        </div>
        <!-- Content wrapper scroll end -->

    </div>
    <!-- *************
				************ Main container end *************
			************* -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset("Gmbslagi/js/jquery.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/modernizr.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/moment.js") }}"></script>

    <!-- *************
			************ Vendor Js Files *************
            ************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/megamenu.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/custom.js") }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/slimscroll.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/custom-scrollbar.js") }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset("Gmbslagi/vendor/search-filter/search-filter.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.js") }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset("Gmbslagi/vendor/apex/apexcharts.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/sales/revenue.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/apex/custom/sales/tickets.js") }}"></script>

    <!-- Circleful Charts -->
    <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.custom.js") }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6.3.1/dist/tippy-bundle.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script src="{{ asset("Gmbslagi/js/show_laporan_bar.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/show_laporan_pie.js") }}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/layout-tabs-tooltip.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:56 GMT -->

</html>
