<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:53 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Rincian-Pelanggan</title>


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

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/dataTables.bs4-custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/buttons.bs.css') }}" />
    <style>
        
        .text {
            text-align: center;
            color: #5e6973;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: .9rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: #f9f9f9;
            border: 0;
            /* border-radius: 5px; */
            right: 0;
        }


        .empty-box2 {
            color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 5px 5px 0px;
        }

        .empty-box2.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box2:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box1 {
            color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 5px 0px 0px 5px;
        }

        .empty-box1.active {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }

        .empty-box1:hover {
            height: 35px;
            text-align: center;
            color: #ffffff;
            background-color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(242, 104, 97, 0.3);
        }


        .dropdown-item-bt {
            display: block;
            width: 100%;
            padding: .9rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: #f9f9f9;
            border: 0;
            border-bottom: 1px solid grey;
            /* border-radius: 5px; */
            right: 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;

            background-color: #DFDFDF;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;

            position: absolute;
            min-width: 160px;
            z-index: 1;
            background-color: #DFDFDF;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 4px;
            right: 0;
            /* Mengarahkan dropdown ke arah kiri */
        }





        .dropdown-content a {
            display: block;
            padding: 5px 0;
            text-decoration: none;
            color: #333;
            z-index: 1000;
        }

        .btn-ekspor-primary {
            padding: 10px 9px;
            color: #000000;
            background-color: #E8E8E8;
            border-color: #E8E8E8;
            border-radius: 5px;
        }

        .btn-ekspor-primary:hover {
            color: #ffffff;
            background-color: #5957b1;
            border-color: #5957b1;
            border-radius: 5px;
        }

        .btn-check:focus+.btn-ekspor-primary,
        .btn-ekspor-primary:focus {
            color: #ffffff;
            background-color: #5957b1;
            border-color: #5957b1;
            outline: 0;
            -webkit-box-shadow: 0 0 0 .2rem rgba(89, 87, 177, .3);
            box-shadow: 0 0 0 .2rem rgba(89, 87, 177, .3);
        }

        .empty-box {
            /* text-align: ; */
            height: 25px;
            width: 110px;
            border: 0px;
            border-bottom: 2px solid grey;
        }

        .empty-box.active {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #f26861;
        }

        .empty-box:hover {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #f26861;
        }

        .searchcontainer {
            width: 90%;
            font-size: 20px;

            .icon-search {
                display: inline-block;
                margin-right: 50px;
                color: rgba(255, 255, 255, 0.5);
            }

            .search {
                width: 111%;
                display: inline-block;
                background-color: rgba(255, 255, 255, 0);
                border: 0px;
                color: grey;
                font-size: 16px;
                padding: 10px 0px;
                padding-left: 25px;
                border-bottom: 1px solid grey;

                &:focus {
                    outline: 0px;
                    border-bottom: 1px solid #ccc;
                }
            }
        }

        .lingkaran-container {
            display: flex;
            align-items: center;
        }

        .lingkaran {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #eaeaea;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tulisan {
            font-size: 17cpx;
        }

        .tulisan-kanan {
            text-align: center;
            margin-top: 10px;
        }

        .tulisan-kanan span {

            font-size: 14px;
            display: block;
        }

        .hover-trigge1r {
            cursor: pointer;
            position: relative;
        }

        .hover-trigge1r:hover::before {
            content: attr(data-tooltip_dpt);
            position: absolute;
            top: -42px;
            left: 0;

            font-size: 12px;
            background-color: #5957b1;
            color: #fff;
            padding: 3px;
            border-radius: 5px;
        }

        .hover-trigge2r {
            cursor: pointer;
            position: relative;
        }

        .hover-trigge2r:hover::before {
            content: attr(data-tooltip_buka);
            position: absolute;
            top: -42px;
            left: 0;
            font-size: 12px;
            background-color: #5957b1;
            color: #fff;
            padding: 3px;
            border-radius: 5px;
        }

 

        .hover-trigge3r:hover::before {
            content: attr(data-tooltip_byr);
            position: absolute;
            top: -42px;
            left: 0;
            font-size: 12px;
            background-color: #5957b1;
            color: #fff;
            padding: 3px;
            border-radius: 5px;
        }

        .hover-trigge3r {
            cursor: pointer;
            position: relative;
        }

        .lingkaran-warna1 {

            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: red;

        }

        .lingkaran-warna2 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: blue;

        }

        .lingkaran-warna3 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: green;

        }

        .lingkaran-warna4 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: purple;

        }

        .lingkaran-warna5 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: pink;

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
        <div class="main-container">
            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">
                <!-- Content wrapper start -->
                <div class="content-wrapper">
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Hada<button type="button" style="border: none; background:none;">☆</button>
                                        </h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                            <li><a class="dropdown-item" style="margin-top: 4%;"
                                                    href="{{ url('add_costumers') }}">Tambah Faktur</a></li>
                                            <li><a class="dropdown-item-bt" href="{{ url('add_income') }}">Tambah
                                                    Transfer</a></li>
                                            <li><a class="dropdown-item" href="{{ url('add_income') }}">Sunting</a>
                                            </li>
                                            <li><a class="dropdown-item-bt" href="{{ url('ad_income') }}">Hapus</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div style="padding: 1rem 0rem 1rem 0rem">
                                <div class="lingkaran-container">
                                    <div class="lingkaran">
                                        <span class="tulisan">MH</span>
                                    </div>
                                    <div class="tulisan-kanan">
                                        <span class="ms-2">Renotamvan87@gmail.com</span>
                                        <span>083848104646</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="stats-tile">
                                <div class="sale-icon">
                                    <p><b><i>Rp</i></b></p>
                                </div>
                                <div class="sale-details">
                                    <h2 class="hover-trigge1r">25.5M</h2>
                                    <p>Jatuh Tempo</p>
                                </div>
                                <div class="sale-graph">
                                    <div id="sparklineLine1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="stats-tile">
                                <div class="sale-icon">
                                    <p><b><i>Rp</i></b></p>
                                </div>
                                <div class="sale-details">
                                    <h2 class="hover-trigge2r">90.5M</h2>
                                    <p>Buka</p>
                                </div>
                                <div class="sale-graph">
                                    <div id="sparklineLine2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="stats-tile">
                                <div class="sale-icon">
                                    <p><b><i>Rp</i></b></p>
                                </div>
                                <div class="sale-details">
                                    <h2 class="hover-trigge3r">90.5M</h2>
                                    <p>Dibayar</p>
                                </div>
                                <div class="sale-graph">
                                    <div id="sparklineLine3"></div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const hoverTrigger = document.querySelector('.hover-trigge1r');
                            const tooltipContent1 = '25.500.000.000.000';
                            hoverTrigger.setAttribute('data-tooltip_dpt', tooltipContent1);

                            const hoverTrigger2 = document.querySelector('.hover-trigge2r');
                            const tooltipContent2 = '25.500';
                            hoverTrigger2.setAttribute('data-tooltip_buka', tooltipContent2);

                            const hoverTrigger3 = document.querySelector('.hover-trigge3r');
                            const tooltipContent3 = '25.500.000';
                            hoverTrigger3.setAttribute('data-tooltip_byr', tooltipContent3);
                        </script>
                        <!-- </div> -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">

                            <!-- Card start -->
                            <div class="card">

                                <div class="card-body">

                                    <div style="margin-top: 10%;">
                                        <h6>Mata Uang</h6>
                                    </div>
                                    <span>Telepon</span>
                                    <div style="margin-top: 10%;">
                                        <h6>0876765567</h6>
                                    </div>
                                    <span>Rupiah</span>
                                    <div style="margin-top: 10%;">
                                        <h6>Referensi</h6>
                                    </div>
                                    <span>untuk bla bla bla bla bla abla bla bla bla bla bla bla</span>
                                    <div style="margin-top: 10%;">
                                        <h6>Situus web</h6>
                                    </div>
                                    <span><a href="http://localhost:8000/show_cos">Web Udin</a> </span>
                                    <div style="margin-top: 10%;">
                                        <h6>NPWP</h6>
                                    </div>
                                    <span>3238798</span>

                                    <div style="margin-top: 10%;">
                                        <h6>Kode Pos</h6>
                                    </div>
                                    <span>929292</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
                            <div class="card-body" style="border-left: 1px solid #9a9c9e;">


                                <!-- Card start -->
                                <div class="card">

                                    <div class="card-body" style="float: right">
                                        <!-- <div class="d-flex"> -->
                                        <div class="col-12">

                                            <!-- <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6"> -->

                                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                                                <li class="" role="presentation">
                                                    <div class="empty-box1 active" id="pills-home-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-transactions"
                                                        type="button" role="tab"
                                                        aria-controls="pills-transactions" aria-selected="true">
                                                        <h6 class="">Faktur</h6>
                                                    </div>
                                                </li>
                                                <li class="" role="presentation">
                                                    <div class="empty-box2" id="pills-profile-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-transfer"
                                                        type="button" role="tab" aria-controls="pills-transfer"
                                                        aria-selected="false">
                                                        <h6 class="">Transaksi</h6>
                                                    </div>
                                                </li>
                                            </ul>

                                            <!-- </div> -->


                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-transactions"
                                                    role="tabpanel" aria-labelledby="pills-transactions-tab"
                                                    tabindex="0">
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        
                                                                        <th scope="col">Tanggal Jatuh Tempo</th>
                                                                        <th scope="col">Tanggal Faktur</th>
                                                                        <th scope="col">status</th>
                                                                        <th scope="col">Pelanggan</th>
                                                                        <th></th>
                                                        
                                                                        <th scope="col">Nomoer</th>
                                                                        <th scope="col">jumlah</th>
                                                                        <th scope="col">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                       
                                                                        <td>5 hari yang lalu</th>
                                                                        <td>24 mei 2024</td>
                                                                        <td>Terkirim</td>
                                                                        <td>
                                                                           Koirul
                                                                        </td>
                                                                        <td></td>
                                                                        <td>INV-09</td>
                                                                        <td>Rp900.000.000</td>
                                                                        <th>
                                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                                <a href="{{url('edit_transfer')}}" class="menu-icon icon-edit-2" style="color: rgb(229, 134, 0)" ></a>
                                                                                <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deletetransfer" style="color: rgb(255, 0, 0)" ></a>
                                                                                <a href="{{url('show_transfer')}}" class="menu-icon icon-eye1" style="color: rgb(77, 77, 247)" ></a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!-- Card end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-transfer" role="tabpanel"
                                                    aria-labelledby="pills-transfer-tab" tabindex="0">
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                       
                                                                        <th scope="col">Tanggal</th>
                                                                        <th scope="col">Nomor</th>
                                                                        <th scope="col">Jenis</th>
                                                                        <th scope="col">Kategori</th>
                                                                        <th></th>
                        
                                                                        <th scope="col">Akun</th>
                                                                        <th scope="col">Jumlah</th>
                                                                        <th scope="col">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                      
                                                                        <td>16 Mei 2023</th>
                                                                        <td>TRA-00038</td>
                                                                        <td>Pengeluaran</td>
                                                                        <td>
                                                                            <div class="lingkaran-warna5">
                                                                                &emsp;&emsp;Deposit
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>Naura Dewi</td>
                                                                        <td>Rp900.000.000</td>
                                                                        <th>
                                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                                <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                                                <a href="{{url('delete_income')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteincome"></a>
                                                                                <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                      
                                                                        <td>13 Mei 2023</th>
                                                                        <td>TRA-00037</td>
                                                                        <td>Pendapatan</td>
                                                                        <td>
                                                                            <div class="lingkaran-warna3">
                                                                                &emsp;&emsp;Penjualan
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>Bpk Yanto</td>
                                                                        <td>Rp700.000.000</td>
                                                                        <th>
                                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                                <a href="{{url('edit_expenditure')}}" class="menu-icon icon-edit-2"></a>
                                                                                <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                                                <a href="{{url('show_expenditure')}}" class="menu-icon icon-eye1"></a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                      
                                                                        <td>23 Mei 2023</th>
                                                                        <td>TRA-00039</td>
                                                                        <td>Pendapatan</td>
                                                                        <td>
                                                                            <div class="lingkaran-warna3">
                                                                                &emsp;&emsp;Penjualan
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>Ugud Budiman</td>
                                                                        <td>Rp200.000.000</td>
                                                                        <th>
                                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                                <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                                                <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                                                <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                      
                                                                        <td>34 Mei 2023</th>
                                                                        <td>TRA-00040</td>
                                                                        <td>Pendapatan</td>
                                                                        <td>
                                                                            <div class="lingkaran-warna3">
                                                                                &emsp;&emsp;Penjualan
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>Louis Gunawan</td>
                                                                        <td>Rp1.000.000.000</td>
                                                                        <th>
                                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                                <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                                                <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                                                <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                      
                                                                        <td>34 Mei 2023</th>
                                                                        <td>TRA-00041</td>
                                                                        <td>Pengeluaran</td>
                                                                        <td>
                                                                            <div class="lingkaran-warna5">
                                                                                &emsp;&emsp;Deposit
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>Melati Handoko</td>
                                                                        <td>Rp1.000.000.000</td>
                                                                        <th>
                                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                                <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                                                <a href="{{url('delete_income')}}" class="menu-icon icon-trash"></a>
                                                                                <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Card end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->

                                        <!-- Row start -->



                                    </div>
                                    <!-- Row end -->

                                </div>
                            </div>
                            <!-- Card end -->

                        </div>
                        <!-- Card end -->
                        <!-- </div> -->
                    </div>
                    <!-- Row end -->
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
    </divkolaja>
    <!-- Page wrapper end -->
    <!-- *************
   ************ Required JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('Gmbslagi/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/modernizr.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/moment.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/dropdown.js') }}"></script>

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

    <!-- Data Tables -->
    <script src="{{ asset('Gmbslagi/vendor/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset('Gmbslagi/vendor/datatables/custom/custom-datatables.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/custom/fixedHeader.js') }}"></script>

    <!-- Download / CSV / Copy / Print -->
    <script src="{{ asset('Gmbslagi/vendor/datatables/buttons.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/html5.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/datatables/buttons.print.min.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <script>
        // Tambahkan event listener untuk menampilkan/menyembunyikan dropdown saat tombol titik tiga diklik
        document.querySelector('.dropdown-toggle').addEventListener('click', function() {
            document.getElementById('dropdown-menu').classList.toggle('show');
        });

        // Tambahkan event listener untuk menyembunyikan dropdown saat pengguna mengklik di luar dropdown
        document.addEventListener('click', function(event) {
            var dropdown = document.getElementById('dropdown-menu');
            if (!event.target.matches('.dropdown-toggle') && !event.target.matches('.dropdown-content button')) {
                if (dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            }
        });
    </script>
    <script>
        $('#pills-profile-tab').click()
            $('#pills-home-tab').click()
        function toggleCheckbox() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var selectAllCheckbox = document.getElementById('select-all');

            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = selectAllCheckbox.checked;
            }
        }
    </script>


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>

