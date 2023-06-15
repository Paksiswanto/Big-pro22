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
    <title>Unknown | Transaksi Berulang</title>


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
         .badge-start {
            border-radius: 2px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D8D7FF;
            color: #030179;

        }
         .badge-finish {
            border-radius: 2px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D4FFCD;
            color: #0A6D01;
        }

        .text {
            text-align: center;
            color: #5e6973;
        }

        @media (min-width: 576px) {
            .box1 {
                margin-left: 32%;
            }
        }

        .empty-box2 {
            color: #f26861;
            border-color: #f26861;
            outline: 1px solid #f26861;
            text-align: center;
            height: 35px;
            padding: 8px;
            border-radius: 0px 0px 0px 0px;
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
            border-radius: 0px 0px 0px 0px;
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

        .icon-no {
            padding-top: 90px;
            font-size: 3rem;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-right: auto;
            margin-left: auto;
        }

        #dropdown-menu {
            display: none;
            position: relative;
        }

        .dropdown-toggle {
            padding: 5px;
            font-size: 20px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 8px 16px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        /* Tampilkan dropdown saat tombol titik tiga diklik */
        #dropdown-menu.show .dropdown-content {
            display: block;
        }

        /* Atur tampilan tombol untuk ukuran layar yang lebih kecil */
        @media screen and (max-width: 1024px) {
            .button-container {
                justify-content: flex-end;
            }

            #dropdown-menu {
                display: block;
            }

            .dropdown-toggle {
                display: block;
            }

            .dropdown-content {
                position: static;
                min-width: unset;
                box-shadow: none;
            }

            .dropdown-content button {
                display: none;
            }

            /* Tampilkan tombol dropdown saat layar kecil */
            #dropdown-menu.show .dropdown-content button {
                display: block;
            }

            .button-container {
                /* justify-content: flex-end; */
                display: none;
            }
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

                                <!-- Card start -->
                                <div class="card">
                                <!-- <div class="card-header"> -->
                                <div class="card-header">
                                        <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 d-flex">
                                            <div class="card-title">
                                                <h3>Transaksi Rutin<button type="button" style="border: none; background:transparent;">☆</button></h3>
                                            </div>
                                        </div>

                                        <!-- <div class="text-end">
											<a href="create-invoice.html" class="btn btn-primary">Create Invoice</a>
										</div> -->
                                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12 button-container" style="margin-left: 17%; justify-items: center; justify-content: end;">
                                            <div class="graph-day-selection" role="group" style="margin-right: 3%;">
                                                <a href="http://127.0.0.1:8000/add_recurring_income">
                                                    <button type="button" class="btn active" style="background: transparent; ">
                                                        <div style="color: #5957b1;"> Tambah Pendapatan Rutin</div>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="graph-day-selection" role="group" style="margin-right: 3%;">
                                                <a href="http://127.0.0.1:8000/add_recurring_expenditure">
                                                    <button type="button" class="btn active" style="background: transparent">
                                                        <div style="color: #5957b1;">Tambah Pengeluaran Rutin</div>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                                    <li><a class="dropdown-item" href="#">Impor</a></li>
                                                    <li><a class="dropdown-item" href="#">Expor</a></li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="dropdown-menu">
                                        <button class="dropdown-toggle">&#8942;</button>
                                        <div class="dropdown-content">
                                            <a href="{{url('add_income')}}">Pendapatan</a>
                                            <a href="{{url('add_expenditure')}}">Pengeluaran</a>
                                            <a href="path/to/excel/file.xlsx" download>Ekspor</a>
                                        </div>
                                    </div>

                                <!-- <div class="button-container">
                                        <button id="income-button">Pendapatan</button>
                                        <button id="expense-button">Pengeluaran</button>
                                        <button id="export-button">Ekspor</button>
                                        <div id="dropdown-menu">
                                            <button class="dropdown-toggle">&#8942;</button>
                                            <div class="dropdown-content">
                                                <button id="income-button-mobile">Pendapatan</button>
                                                <button id="expense-button-mobile">Pengeluaran</button>
                                                <button id="export-button-mobile">Ekspor</button>
                                            </div>
                                        </div>
                                    </div> -->

                                <!-- </div> -->






                                <!-- </div> -->


                                <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('transactions')}}">
                                                <div class="empty-box1 ">
                                                    <h6 class="">Normal</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2"  style="margin-top: 8%;">
                                        <div class="hr-switch">
                                            <a href="{{url('recurring_transactions')}}">
                                                <div class="empty-box2 active">
                                                    <h6 class="">Rutin</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                <div class="content">
                                    <div class="searchcontainer">
                                        <i class="icon-search"></i><input class="search " type="text" placeholder="Cari Disini..." style="
                                              margin-bottom: 2%; font-size:10pt " />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"> <input type="checkbox" id="select-all" onchange="toggleCheckbox()"></th>
                                                <th scope="col">Tanggal Mulai</th>
                                                <th scope="col">Tanggal Akhir</th>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Kategori</th>
                                                <th></th>
                                                <th></th>

                                                <th scope="col">Status</th>
                                                <th scope="col">Saldo</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td name="item" id="checkbox1"><input type="checkbox"></td>
                                                <td>16 Mei 2023</th>
                                                <td>17 April 2023</td>
                                                <td>Pengeluaran</td>
                                                <td>
                                                    <div class="lingkaran-warna1">
                                                        &emsp;&emsp;Biaya Lain-Lain
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>

                                                <td><span class="badge-finish">Selesai</span></td>
                                                <td>Rp900.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_recurring_expenditure')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteincome"></a>
                                                        <a href="{{url('show_recurring_expenditure')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox2"><input type="checkbox"></td>
                                                <td>13 Mei 2023</th>
                                                <td>23 Juni 2023</td>
                                                <td>Pendapatan</td>
                                                <td>
                                                    <div class="lingkaran-warna2">
                                                        &emsp;&emsp;Penjualan Website
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="badge-start">Aktif</span></td>
                                                <td>Rp700.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_recurring_income')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteincome"></a>
                                                        <a href="{{url('show_recurring_income')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox3"><input type="checkbox"></td>
                                                <td>23 Mei 2023</th>
                                                <td>27 Januari 2024</td>
                                                <td>Pendapatan</td>
                                                <td>
                                                    <div class="lingkaran-warna3">
                                                        &emsp;&emsp;Penjualan
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="badge-finish">Selesai</span></td>
                                                <td>Rp200.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_recurring_expenditure')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteincome"></a>
                                                        <a href="{{url('show_recurring_expenditure')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox4"><input type="checkbox"></td>
                                                <td>34 Mei 2023</th>
                                                <td>11 Juli 2023</td>
                                                <td>Pendapatan</td>
                                                <td>
                                                    <div class="lingkaran-warna4">
                                                        &emsp;&emsp;Penjualan Website
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="badge-start">Aktif</span></td>
                                                <td>Rp1.000.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_recurring_expenditure')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteincome"></a>
                                                        <a href="{{url('show_recurring_expenditure')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox5"><input type="checkbox"></td>
                                                <td>34 Mei 2023</th>
                                                <td>9 Agustis 2023</td>
                                                <td>Pengeluaran</td>
                                                <td>
                                                    <div class="lingkaran-warna5">
                                                        &emsp;&emsp;Biaya Listik
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="badge-finish">Selesai</span></td>
                                                <td>Rp1.000.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_income')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_income')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteincome"></a>
                                                        <a href="{{url('show_income')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                             <!-- Card start -->
                             <div class="card">
                                        <div class="card-body" style="margin-left: -2.1%">

                                            <nav aria-label="Page navigation example" >
                                                <ul class="pagination" style="justify-content: flex-end;">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                    <!-- Card end -->
                        </div>
                                    <!-- Modal start -->
										<div class="modal fade" id="deleteincome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteincome" aria-hidden="true">
											<div class="modal-dialog" style="margin-top: -20px;">
												<div class="modal-content" style="padding: 0px">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Hapus Transaksi</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<p>Anda Yakin Ingin Menghapus Transaksi Ini?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>

												</div>
												</div>
											</div>
										</div>
										<!-- Modal end -->

                            <!-- Card end -->


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
            <script src="Gmbslagi/js/dropdown.js"></script>

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
