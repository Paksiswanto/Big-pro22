<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:00:09 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Beranda</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/dashboard.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/daterange/daterange.css") }}">

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper" role="status">
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
        <div class="main-container">

            <!-- Page header starts -->
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="">
                            <div class="card-title">
                                <div class="d-flex flex-wrap">
                                    <h1 class="card-title col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12" style="font-size: 20px;">Dashboard

                                    </h1>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">

                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="input-group">
                                                <input type="text" name="datefilter" class="form-control" style="z-index: auto" value="" />
                                                <span class="input-group-text">
                                                    <i class="icon-calendar1"></i>
                                                </span>
                                            </div>
                                            <div class="field-placeholder">Date Range Auto Apply</div>
                                        </div>
                                        <!-- Field wrapper end -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chart-container">
                        <h6>Arus kas</h6>
                        <p>Uang masuk dan keluar dari bisnis Anda</p>
                        <hr>
                        <div id="chart"></div>
                        <br>
                        <br>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class=" col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mb-3">
                                <h6>Laba Rugi</h6>
                                <p>Pendapatan dan pengeluaran termasuk faktur dan tagihan belum dibayar</p>
                                <hr>
                                <div id="chart2"></div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mb-3">
                                <h6>Pengeluaran Berdasarkan Kategori</h6>
                                <p>Pengeluaran terbesar di berbagai kategori</p>
                                <hr>
                                <div id="chart3"></div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <h6>Hutang</h6>
                                <p>Jumlah yang belum di bayarkan</p>
                                <hr>
                                <p id="debtAmount">Total Hutang: $0</p>
                                <p id="remainingDebtAmount">Sisa Hutang: $0</p>
                                <p id="paidDebtAmount">Telah Dibayar: $0</p>
                                <div class="progress-bar-container">
                                    <div class="progress-bar" id="debtProgressBar"></div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">

                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <h6>Piutang</h6>
                                <p>Jumlah yang belum di bayarkan</p>
                                <hr>
                                <p id="receivableAmount">Total Piutang: $1000</p>
                                <p id="remainingReceivableAmount">Sisa Piutang: $500</p>
                                <p id="paidReceivableAmount">Telah Diterima: $0</p>
                                <div class="progress-bar-container">
                                    <div class="progress-bar" id="receivableProgressBar"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Row end -->

                        <!-- Row start -->

                        <!-- Row end -->

                    </div>
                    <!-- Content wrapper end -->

                    <!-- App footer start -->
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
        <script src="{{ asset("Gmbslagi/js/dropdown.js") }}"></script>

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
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/salesGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/ordersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/earningsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/visitorsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/customersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/sparkline.js") }}"></script>
		<!-- Date Range JS -->
		<script src="{{ asset("Gmbslagi/vendor/daterange/daterange.js") }}"></script>
		<script src="{{ asset("Gmbslagi/vendor/daterange/custom-daterange.js") }}"></script>
        <!-- Circleful Charts -->
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.custom.js") }}"></script>

        <!-- Date Range JS -->
        <!-- Main Js Required -->
        <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6.3.1/dist/tippy-bundle.umd.js"></script>

        <script src="{{ asset("Gmbslagi/js/chart_index.js") }}"></script>
        <script type="text/javascript">
            $(function() {

              $('input[name="datefilter"]').daterangepicker({
                  autoUpdateInput: false,
                  locale: {
                      cancelLabel: 'Clear'
                  }
              });

              $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                  $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
              });

              $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                  $(this).val('');
              });

            });
            </script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:19 GMT -->

</html>
