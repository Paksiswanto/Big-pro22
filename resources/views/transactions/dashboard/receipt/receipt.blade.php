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
    <title>Unknown | Resi</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/bootstrap.min.css")}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/fonts/style.css")}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/main.css")}}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/megamenu/css/megamenu.css")}}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.css")}}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4-custom.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/buttons.bs.css")}}" />
    <style>
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

        .dropdown {
            position: relative;
            display: inline-block;

            background-color: #DFDFDF;
            border-radius: 2px;
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
            border-radius: 2px;
        }

        .btn-ekspor-primary:hover {
            color: #ffffff;
            background-color: #5957b1;
            border-color: #5957b1;
            border-radius: 2px;
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

        .das {

            border: none;
            border-top: 2px dashed #000;
            height: 0;
        }

        .empty-box {
            /* text-align: ; */
            margin-top: 1%;
            width: 100%;
            height: 8px;
            border: 0px;
            border-top: 1px solid #e0e0e0;
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
        @include('layouts.header')

        <!-- *************
				************ Main container start *************
			************* -->
        <div class="main-container">



            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="">
                                    <div class="row">
                                        <div class="col-xl-11 col-lg-11 col-md-11 col-sm-2 col-12" style="margin-bottom: 2%;">
                                            <div class="card-title">
                                                <h3>Resi<button type="button" style="border: none; background:none;">☆</button></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                            <div class="dropdown">
                                                <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                                    <li><a class="dropdown-item" style="margin-top: 4%;" href="{{url('add_income')}}">Tambah</a></li>
                                                    <li><a class="dropdown-item" href="{{url('add_income')}}">Sunting</a></li>
                                                    <li><a class="dropdown-item" href="#">Cetak</a></li>
                                                    <li><a class="dropdown-item" href="#">Unduh PDF</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12"style="">

                                <!-- Card start -->
                                <div class="card">

                                    <!-- <div class="alert alert-primary"
                                   
                                    role="alert"> -->
                                    <p style="font-size:14pt;color:black">Membuat</p>
                                    
                                    <p style="font-size:10pt;color:black; margin-bottom: 3%;">Trisqi membuat Transaksi ini pada
                                        <b>24
                                            mei 2023</b>
                                    </p>
                                    
                                    <a href="{{ route('edit_income') }}">
                                    <button
                                        style="background-color: #9a99e2;border-radius:2px;width:80px;border:transparent;height:25px;color:#ffffff">Sunting</button></a>
                                        <hr>
                                <!-- </div> -->
                                </div>
                                <!-- Card end -->

                            </div>
                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"> -->

                            <!-- Card start -->
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                <div class="card-body" style="border-left: 1px solid #9a9c9e;">


                                    <!-- Card start -->
                                    <div class="card">


                                        <div class="card-body" style="float: right">

                                            <!-- Row start -->
                                            <div class="row gutters">
                                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">

                                                    <img src="{{ asset('Gmbslagi/img/unknown.jpg') }}" style="border-radius: 50%;" width="70" height="70">

                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-1 col-12" style="margin-top: 1%;">

                                                    <h6>Unknown</h6> <br>
                                                    <h6>Unknoncompany@gmail.com</h6>


                                                </div>
                                                <hr style="margin-top: 2%;">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 5%;">
                                                    <h6>Resi </h6>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Nomor</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">


                                                    <span>TRA-0089</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Tanggal</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>19 Mei 2023</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Akun</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>Haha</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Kategori</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>Deposit</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Pembayaran</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>Cash</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Referensi</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span></span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Deskripsi</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span></span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <hr style="margin-top: 2%;">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 1%;">
                                                    <h6>Dibayar Oleh </h6>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 3%;">
                                                    <h6>Tagihan Kepada </h6>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Nama</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>jayaabadi</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Alamat</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>Jl Lesti Utara, Ngaglik, Kota Batu</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>NPWP</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>08.178.554.2-123.321</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Telepone</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>085607338154</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12" style="margin-top: 3%;">
                                                    <h6>Email</h6>
                                                </div>

                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12" style="margin-top: 3%;">

                                                    <span>jayaabadi@gmail.com</span>
                                                    <div class="empty-box">
                                                    </div>
                                                </div>
                                                
                                                <hr style="margin-top: 2%;">
                                                <h6 class="mt-3 mb-2" >Faktur Terkait</h6>
                                                    <table class="bordered" style="margin-left: 3%;margin-bottom: 4%;">
                                                        <thead >
                                                            <th>Nomor</th>
                                                            <th>Pelanggan</th>
                                                            <th>Tanggal Faktur</th>
                                                            <th>Jumlah Faktur</th>
                                                            <th>Jumlah</th>
                                                        </thead>
                                                        <tbody>
                                                            <td><a href="#">FKR-00002</a></td>
                                                            <td>Kuryu</td>
                                                            <td>05 Juni 2023</td>
                                                            <td>Rp. 1.000.000</td>
                                                            <td>Rp. 1.000.000</td>
                                                        </tbody>
                                                    </table>



                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button class="btn btn-primary" style="float: right;">Jumlah : &emsp;&emsp;Rp. 1.000.000</button>
                                            </div>
                                        </div>
                                        <!-- Row end -->

                                    </div>
                                </div>
                                <!-- Card end -->

                            </div>

                            <!-- Card end -->

                            <!-- </div> -->
                        </div>
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
    <script src="{{ asset ("Gmbslagi/js/jquery.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/modernizr.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/moment.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/dropdown.js")}}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/megamenu.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/custom.js")}}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset ("Gmbslagi/vendor/slimscroll/slimscroll.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/slimscroll/custom-scrollbar.js")}}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.js")}}"></script>

    <!-- Data Tables -->
    <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bootstrap.min.js")}}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/custom-datatables.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/fixedHeader.js")}}"></script>

    <!-- Download / CSV / Copy / Print -->
    <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/jszip.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/pdfmake.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/vfs_fonts.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/html5.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.print.min.js")}}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
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