<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/calendar-daygrid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:16 GMT -->

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
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/kalender.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/calendar/css/main.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/calendar/css/custom.css") }}" />

</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        <nav class="sidebar-wrapper">

            <!-- Sidebar content start -->
            @include('layouts.sidebar_add_company')
            <!-- Sidebar content end -->

        </nav>

        <!-- Sidebar wrapper end -->

        <!-- *************
				************ Main container start *************
			************* -->
        <div class="main-container " style="background-color: #FFFFFF;">

            <!-- Page header starts -->
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="card-title">
                                <div class="d-flex flex-wrap">
                                    <h1 class="card-title col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12" style="font-size: 20px;">Kalender

                                    </h1>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <!-- Card start -->
                                <div class="">
                                    <div class="">

                                        <div style="width: 100%;" id="selectableCalendar"></div>

                                    </div>
                                </div>
                                <!-- Card end -->
                                <!-- Modal start -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-tambah">
                                                <h5 class="modal-judul" id="exampleModalCenterTitle">Tambah Baru</h5>
                                                <button type="button" class="btn-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="d-flex">
                                                <a href="/laporan" class="modal-badan">
                                                    <div class="tambah-icon ">
                                                        <div class="d-flex">
                                                            <i class="icon-file-text"></i>
                                                            <h6 class="nama-icon">Faktur</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/laporan" class="modal-badan" style="margin-left: 67px;">
                                                    <div class="tambah-icon">
                                                        <div class="d-flex">
                                                            <i class="icon-file-text"></i>
                                                            <h6 class="nama-icon">Pendapatan</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex">
                                                <a href="/laporan" class="modal-badan">
                                                    <div class="tambah-icon">
                                                        <div class="d-flex">
                                                            <i class="icon-file-text"></i>
                                                            <h6 class="nama-icon">Tagihan</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="/laporan" class="modal-badan">
                                                    <div class="tambah-icon">
                                                        <div class="d-flex">
                                                            <i class="icon-file-text"></i>
                                                            <h6 class="nama-icon">Biaya</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalCenterhapus" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-tambah">
                                                <h5 class="modal-judul" id="exampleModalCenterTitle">Modal title</h5>
                                                <button type="button" class="btn-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="d-flex">
                                                <a href="/laporan" class="modal-badan">
                                                    <div class="tambah-icon ">
                                                        <div class="d-flex">
                                                            <i class="icon-file-text"></i>
                                                            <h6 class="nama-icon">Tampilkan</h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal untuk Invoice -->
<div class="modal fade" id="exampleModalCenterInvoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitleInvoice" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitleInvoice">Invoice Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi konten modal untuk Invoice -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Bill -->
<div class="modal fade" id="exampleModalCenterBill" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitleBill" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitleBill">Bill Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi konten modal untuk Bill -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Income -->
<div class="modal fade" id="exampleModalCenterIncome" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitleIncome" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitleIncome">Income Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi konten modal untuk Income -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Expenditure -->
<div class="modal fade" id="exampleModalCenterExpenditure" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitleExpenditure" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitleExpenditure">Expenditure Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi konten modal untuk Expenditure -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Selectable Calendar -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Selectable Calendar Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi konten modal untuk Selectable Calendar -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk Hapus -->
<div class="modal fade" id="exampleModalCenterhapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitlehapus" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitlehapus">Hapus Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi konten modal untuk Hapus -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



                            </div>
                        </div>
                    </div>
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

    <!-- Calendar JS -->
    <script src="{{ asset("Gmbslagi/vendor/calendar/js/main.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/calendar/custom/selectable-calendar.js") }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/calendar-daygrid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:16 GMT -->

</html>
