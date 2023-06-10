<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Detail-Berulang</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/bootstrap.min.css') }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/fonts/style.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/main.css') }}">


    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/megamenu/css/megamenu.css') }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.css') }}">
    <style>
        .rcr-screen {
            position: relative;
            background: #ffffff;
            border: 1px solid #e1e8f3;
            border-radius: 3px;
            -webkit-box-shadow: 0 30px 15px -20px rgba(255, 255, 255, 0.2);
            box-shadow: 0 30px 15px -20px rgba(255, 255, 255, 0.2);
            min-width: 100%;
            max-width: 100%;
        }

        .badge-finish {
            border-radius: 2px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D4FFCD;
            color: #0A6D01;
            font-size: 12px;
        }

        .table1 {
            color: #6f7479;
            font-size: .725rem;
            border-color: #e8edf3;
        }

        .table1 th,
        .table1 td {
            padding: 12px;
            font-size: 10pt;
            font-weight: 600;
            color: #072242;
            border-bottom: 1px solid #c8d3df !important;
            white-space: nowrap;
        }

        /* Tambahkan gaya CSS yang diperlukan di sini */
        /* ... */

        /* Media queries untuk tampilan seluler */
        @media only screen and (max-width: 600px) {
            /* Tambahkan gaya CSS untuk tampilan seluler di sini */
            /* ... */
        }
    </style>
</head>



<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        @include('layouts.sidebar')
        <!-- Sidebar wrapper end -->
        @include('layouts.header')
        <!-- *************
    ************ Main container start *************
   ************* -->
        <div class="main-container">

            <!-- Page header starts -->
            <div class="page-header">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                        <!-- Search container start -->
                        <div class="search-container">

                        </div>
                        <!-- Search container end -->

                    </div>
                </div>
                <!-- Row end -->
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                             <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                            <div class="card-title">
                                <h3>Tagihan: TBU-0001</h3>

                            </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                        <div class="graph-day-selection" role="group" style="margin-left: -30px;margin-right: 10px;">
                                                <div class="badge-finish" style="text-align: center;">Terima</div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                            <li><a class="dropdown-item-bt" href="#">Duplikat</a></li>
                                            <li><a class="dropdown-item" href="#">Akhiri Perulangan</a></li>

                                        </ul>
                                    </div>
                        </div>
                        <div class="d-flex row">

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card-body">
                                    <div class="alert alert-primary mb-5"
                                        style="border-radius: 2px; background-color:#9a99e2" role="alert">
                                        Faktur ini dihasilkan otomatis dari BRLB-00001
                                    </div>
                                    <!-- Faq start -->
                                    <div class="accordion" id="faqAccordion">
                                        <div class="alert alert-primary"
                                            style="border-radius: 2px; border:1px solid #e3e3e3 ; background-color:#ffffff"
                                            role="alert">
                                            <p style="font-size:14pt;color:black">Membuat</p>
                                            <br>
                                            <p style="font-size:10pt;color:black">Trisqi membuat Tagihan ini pada
                                                <b>24
                                                    mei 2023</b>
                                            </p>
                                            <button
                                                style="background-color: #9a99e2;border-radius:2px;width:80px;border:transparent;height:25px;color:#ffffff">Sunting</button>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <div class="d-flex row">
                                                        <p style="font-size:14pt">Kirim</p>
                                                        <br>
                                                        <p style="font-size:10pt">Pembyaran berulang muulai dari
                                                            <b>28 mei 2023</b>
                                                        </p>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <p style="font-size:10pt">Pembayran selanjut nya pada <b>28 mei
                                                            2023</b>
                                                    <p style="font-size:10pt">Berakhir nya pada <b>28 juni 2023</b>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <div class="d-flex row">
                                                        <p style="font-size:14pt">Faktur</p>
                                                        <br>
                                                        <p style="font-size:10pt">1 Faktur telah berhasil di bayar
                                                        </p>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <p>INV-11 secara otomatis dibuat pada 29 Mei 2023</p>
                                                    <p>INV-11 secara otomatis dibuat pada 29 Mei 2023</p>
                                                    <p>INV-11 secara otomatis dibuat pada 29 Mei 2023</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Faq end -->

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-3">
                                <form
                                    action="https://www.kodingwife.com/demos/unipro/v1-x/05-desig4-violet/reports.html">
                                    <div class="rcr-screen">
                                        <div class="login-body pb-4 ">
                                            <div class="d-flex row col-12 ms-2">
                                                <p>Biaya nikah</p>
                                                <div class="col-8">
                                                    <img style="width: 25%"
                                                        src="{{ asset('Gmbslagi/img/Carausel/person.jpg') }}"
                                                        alt="Uni Pro Admin">
                                                </div>
                                                <div class="ml-2 col-4">
                                                    <p style="float: right;" class="me-3">cina baik hati</p>
                                                    <br>
                                                    <p style="float: right;" class="me-3">unknown company</p>
                                                    <br>
                                                    <p style="float: right;" class="me-3">cireng@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="field-wrapper mb-3">
                                                <div style="border-bottom: solid grey 1px; margin-top: 4%">
                                                </div>
                                                <div class="d-flex col-12" style="margin-top: 2%">
                                                    <div class="col-6 ms-3">
                                                        <p style="margin-top:2%">Tagihan Kepada</p>
                                                        <p style="margin-top:2%">Pt Jawa</p>
                                                        <p style="margin-top:2%">MPWP: 1672671</p>
                                                        <p style="margin-top:2%">cireng@gmail.com</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p style="margin-top:2%">Nomor Tagihan:BRLB-00002 </p>
                                                        <p style="margin-top:2%">Nomer Antrean: 123</p>
                                                        <p style="margin-top:2%">Tanggal Tagihan: 24 mei 2023</p>
                                                        <p style="margin-top:2%">Tanggal Jatuh Tempo: 24 mei 2023</p>
                                                    </div>
                                                </div>
                                                <div class="table-responsive mt-3">
                                                    <table
                                                        class="table1 products-table col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <thead>
                                                            <tr>
                                                                <th>Item</th>
                                                                <th>Kuantitas</th>
                                                                <th>Harga</th>
                                                                <th>Jumlah</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p>api maps</p>
                                                                    <br>
                                                                    <p style="font-size: 8pt; margin-top: -10%">
                                                                        pembelian api untuk map</p>
                                                                </td>
                                                                <td><span class="badge" style="border-radius: 2px">1</span></td>
                                                                <td>385.000,00</td>
                                                                <td>385.000,00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"
                                                        style="float: right; margin-bottom: -5%">
                                                        <!-- Card start -->
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <li class="list-group-item">Subtotal: 9000000 </li>
                                                                <li class="list-group-item">Ppn(20%): 9000000 </li>
                                                                <li class="list-group-item">PPH(12%): 9000000 </li>
                                                                <li class="list-group-item">Total: 9000000 </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Card end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->

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
    <script src="{{ asset('Gmbslagi/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/modernizr.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/moment.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset('Gmbslagi/vendor/megamenu/js/megamenu.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/megamenu/js/custom.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('Gmbslagi/vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset('Gmbslagi/vendor/search-filter/search-filter.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

</html>
