<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

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
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/daterange/daterange.css")}}">


    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <link href="path/to/select2.css" rel="stylesheet" /> -->
    <style>
        .text-radio {
            font-size: .75rem;
            font-weight: 600;
            margin-left: 15%;
            margin-bottom: 18%;
            color: #5957b1;
        }

        .card {
            overflow: hidden;
        }

        .half-width-container {
            display: flex;
            width: 80%;
            /* justify-content: space-between; */
        }

        input[type="radio"] {
            display: none;
        }

        label {
            margin-bottom: 2%;
        }

        .label {
            width: 100px;
            text-align: center;
            padding: 10px;
            border: 1px solid #D9D9D9;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="radio"]:checked+.label {
            background-color: #5957b1;
            color: #fff;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .label {
            margin-right: 20px;
        }

        .modal {
            text-align: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            /* padding: 20px; */
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
        }

        .modal .modal-header {
            background: #5957b1;
            color: #ffffff;
            border: 0;
            border-radius: 3px 3px 0 0;
        }

        .modal .modal-body {
            padding: 1.2rem;
            max-height: calc(100vh - 180px);
        }

        .modal .modal-footer {
            border-top: 1px solid #e1e8f3;
            padding: .2rem .75rem;
        }
    </style>
</head>

<body>

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
                    <div class="card-body">
                        <div class="row gutters">
                            <form action="">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Card start -->
                                    <div class="" style="">
                                        <div class="">
                                            <div class="card-title">
                                                <h3>Tambah Role<button type="button" style="border: none; background:none;">☆</button></h3>
                                            </div>
                                        </div>
                                        <div class="">

                                            <!-- Row start -->
                                            <div class="row gutters">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                    <div style="border-bottom: solid grey 1px;margin-bottom:1%; margin-bottom: 2%; margin-top: 1%;">
                                                        <h6>Umum</h6>
                                                        <p>Deskrpsi Untuk Peran</p>
                                                    </div>

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->

                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="text" placeholder="TRA-0076">
                                                        <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>


                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <textarea class="form-control1" rows="2" placeholder="Masukkan Deskripsi Peran"></textarea>
                                                        <div class="field-placeholder">Deskripsi<span class="text-danger">*</span></div>
                                                        <div class="form-text">
                                                            Silakan masukkan Deskripsi Peran yang Dibutuhkan.
                                                        </div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>


                                                <!-- Card start -->
                                                <!-- <div class="card"> -->
                                                <!-- <div class="card-body"> -->

                                                <!-- Faq start -->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div style="float: right;">
                                                        <input type="checkbox" id="select-all" onchange="toggleCheckbox('select-all', 'item')" /> Pilih Semua
                                                    </div>
                                                </div>
                                                <div class="accordion" id="faqAccordion" style="margin-top: 2%;">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Penjualan
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Penjualan</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Faktur</td>
                                                                                <td name="item" id="checkbox1">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox2"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox3"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox4"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox5"><input type="checkbox"></td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pelanggan</th>
                                                                                <td name="item" id="checkbox6">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox7"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox8"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox9"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox10"><input type="checkbox"></td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Pembelian
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>

                                                                                <th scope="col">Pembelian</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>Tagihan</th>
                                                                                <td name="item" id="checkbox11">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox12"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox13"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox14"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox15"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pemasok</th>
                                                                                <td name="item" id="checkbox16">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox17"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox18"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox19"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox20"><input type="checkbox"></td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Perbankan
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>

                                                                                <th scope="col">Perbankan</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>Akun</th>
                                                                                <td name="item" id="checkbox21">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox22"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox23"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox24"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox25"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Transaksi</th>
                                                                                <td name="item" id="checkbox26">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox27"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox28"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox29"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox30"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Transfer</th>
                                                                                <td name="item" id="checkbox31">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox32"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox33"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox34"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox35"><input type="checkbox"></td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                Laporan
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>

                                                                                <th scope="col">Laporan</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>Ringkasan Pendapatan</th>
                                                                                <td name="item" id="checkbox36">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox37"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox38"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox39"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox40"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Ringkasan Pengeluaran</th>
                                                                                <td name="item" id="checkbox41">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox42"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox43"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox44"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox45"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Ringkasan Pajak</th>
                                                                                <td name="item" id="checkbox46">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox47"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox48"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox49"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox50"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Laba & Rugi</th>
                                                                                <td name="item" id="checkbox51">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox52"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox53"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox54"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox55"><input type="checkbox"></td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFive">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                Widget
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>

                                                                                <th scope="col">Widget</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>Saldo Rekening</th>
                                                                                <td name="item" id="checkbox56">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox57"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox58"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox59"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox60"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Arus Kas</th>
                                                                                <td name="item" id="checkbox61">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox62"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox63"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox64"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox65"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pengeluaran Berdasarkan Kategori</th>
                                                                                <td name="item" id="checkbox66">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox67"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox68"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox69"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox70"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Mata Uang</th>
                                                                                <td name="item" id="checkbox71">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox72"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox73"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox74"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox75"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Hutang </th>
                                                                                <td name="item" id="checkbox76">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox77"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox78"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox79"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox80"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Laba & Rugi</th>
                                                                                <td name="item" id="checkbox81">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox82"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox83"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox84"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox85"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Piutang</th>
                                                                                <td name="item" id="checkbox86">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox87"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox88"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox89"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox90"><input type="checkbox"></td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingSix">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                Kalender
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>

                                                                                <th scope="col">Kalender</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>Pengaturan</th>
                                                                                <td name="item" id="checkbox91">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox92"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox93"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox94"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox95"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Widgets Calendar</th>
                                                                                <td name="item" id="checkbox96">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox97"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox98"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox99"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox100"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Calendar</th>
                                                                                <td name="item" id="checkbox101">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox102"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox103"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox104"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox105"><input type="checkbox"></td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingSeven">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                Autentikasi
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>

                                                                                <th scope="col">Autentikasi</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>

                                                                                <td>Pengguna</th>
                                                                                <td name="item" id="checkbox106">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox107"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox108"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox109"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox110"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Profil</th>
                                                                                <td name="item" id="checkbox111">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox112"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox113"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox114"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox115"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Roles</th>
                                                                                <td name="item" id="checkbox116">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox117"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox118"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox119"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox120"><input type="checkbox"></td>

                                                                            </tr>

                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingEight">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                                Umum
                                                            </button>
                                                        </h2>
                                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Umum</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Perusahaan</td>
                                                                                <td name="item" id="checkbox121">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox122"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox123"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox124"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox125"><input type="checkbox"></td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td>Item</th>
                                                                                <td name="item" id="checkbox126">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox127"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox128"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox129"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox130"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Import</th>
                                                                                <td name="item" id="checkbox131">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox132"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox133"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox134"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox135"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Ekspor</th>
                                                                                <td name="item" id="checkbox136">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox137"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox138"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox139"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox140"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Dasbor</th>
                                                                                <td name="item" id="checkbox141">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox142"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox143"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox144"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox145"><input type="checkbox"></td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingNine">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                Pengaturan
                                                            </button>
                                                        </h2>
                                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Pengaturan</th>
                                                                                <th scope="col">Full Access</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Create</th>
                                                                                <th scope="col">Edit</th>
                                                                                <th scope="col">Delete</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Kategori</td>
                                                                                <td name="item" id="checkbox146">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox147"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox148"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox149"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox150"><input type="checkbox"></td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pajak</th>
                                                                                <td name="item" id="checkbox151">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox152"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox153"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox154"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox155"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Company</th>
                                                                                <td name="item" id="checkbox156">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox157"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox158"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox159"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox215"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Invoice</th>
                                                                                <td name="item" id="checkbox160">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox161"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox162"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox163"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox164"><input type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Template Surel</th>
                                                                                <td name="item" id="checkbox165">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox166"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox167"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox168"><input type="checkbox"></td>
                                                                                <td name="item" id="checkbox169"><input type="checkbox"></td>

                                                                            </tr>


                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                   

                                                </div>
                                                <!-- Faq end -->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                                    <div class="d-flex justify-content-end mt-4">
                                                        <button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
                                                        <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                                                    </div>
                                                </div>

                                                <!-- </div> -->
                                                <!-- </div> -->
                                                <!-- Card end -->

                                                <!-- </div> -->
                                            </div>



                                        </div>
                                        <!-- Button trigger modal -->


                                        <!-- Modal account start -->
                                        <form action="">
                                            <div class="modal fade" id="modalaccount" tabindex="-1" aria-labelledby="modalaccount" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content" style="padding: 0px">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Akun</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="field-wrapper">
                                                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                        <div class="text-radio">Jenis<span class="text-danger">*</span></div>
                                                                    </div>
                                                                    <div class="half-width-container">

                                                                        <input type="radio" name="option" id="option1" value="Option 1" checked>
                                                                        <label class="label" for="option1">Bank</label>

                                                                        <input type="radio" name="option" id="option2" value="Option 2">
                                                                        <label class="label" for="option2">Kartu Kredit</label>
                                                                    </div>
                                                                </div>

                                                                <!-- Field wrapper start -->

                                                                <!-- Field wrapper end -->

                                                            </div>

                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan Nama Akun">
                                                                    <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan E-mail Akun">
                                                                    <div class="field-placeholder">Nomor Rekening<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan Nomor Telepone Akun">
                                                                    <div class="field-placeholder">Mata Uang<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan NPWP Akun">
                                                                    <div class="field-placeholder">Saldo Awal<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Simpan</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal account end -->

                                        <!-- Modal category start -->
                                        <form action="">
                                            <div class="modal fade" id="modalcategory" tabindex="-1" aria-labelledby="modalcategory" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content" style="padding: 0px">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Kategori</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan Nama Kategori">
                                                                    <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <div class="d-flex">
                                                                        <input class="form-control" type="text" placeholder="Masukkan Warna">
                                                                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                                                                    </div>
                                                                    <div class="field-placeholder">Warna<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>






                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Simpan</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal category end -->

                                        <!-- Modal customer start -->
                                        <form action="">
                                            <div class="modal fade" id="modalcustomer" tabindex="-1" aria-labelledby="modalcustomer" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content" style="padding: 0px">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Pelanggan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan Nama Pelanggan">
                                                                    <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="email" placeholder="Masukkan E-mail Pelanggan">
                                                                    <div class="field-placeholder">Email<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan Nomor Telepone Pelanggan">
                                                                    <div class="field-placeholder">Telepone<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan NPWP Pelanggan">
                                                                    <div class="field-placeholder">NPWP<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan Mata Uang Pelanggan">
                                                                    <div class="field-placeholder">Mata Uang<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text" placeholder="Masukkan Negara Pelanggan">
                                                                    <div class="field-placeholder">Negara<span class="text-danger">*</span></div>
                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                <!-- Field wrapper start -->
                                                                <div class="field-wrapper">
                                                                    <textarea class="form-control1" rows="2" placeholder="Masukkan Alamat Pelanggan"></textarea>
                                                                    <div class="field-placeholder">Alamat<span class="text-danger">*</span></div>

                                                                </div>
                                                                <!-- Field wrapper end -->

                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Simpan</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal customer end -->


                                        <!-- Row end -->

                                    </div>
                                </div>
                                <!-- Card end -->

                        </div>
                        </form>
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
    <script src="{{ asset ("Gmbslagi/js/jquery.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/modernizr.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/moment.js")}}"></script>

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

    <!-- Main Js Required -->
    <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>

    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select-custom.js")}}"></script>

    <script src=" {{ asset ("Gmbslagi/vendor/daterange/daterange.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/daterange/custom-daterange.js")}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script> -->
    <!-- <script src="path/to/select2.js"></script> -->


    <!-- <script>
        new TomSelect('#ex-dropdown-input1', {
            plugins: ['dropdown_input'],
        });
        new TomSelect('#ex-dropdown-input2', {
            plugins: ['dropdown_input'],
        });
        new TomSelect('#ex-dropdown-input3', {
            plugins: ['dropdown_input'],
        });
        new TomSelect('#ex-dropdown-input4', {
            plugins: ['dropdown_input'],
        });
    </script> -->
    <!-- <script>
        $(document).ready(function() {
            $('#mySelect').select2();
        });
    </script> -->
    <!-- <script>
        function toggleAll(checkbox) {
            var checkboxes = checkbox.parentNode.querySelectorAll('.checkbox');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = checkbox.checked;
            }
        }
    </script> -->
    <script>
        function openModal() {
            var select = document.getElementById("select");
            var selectedValue = select.value;

            if (selectedValue !== "") {
                var modal = document.getElementById("myModal");
                modal.style.display = "block";
            }
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
    <script>
        function toggleCheckbox(selectAllId, itemId) {
            var selectAllCheckbox = document.getElementById(selectAllId);
            var checkboxes = document.getElementsByName(itemId);
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].getElementsByTagName("input")[0].checked = selectAllCheckbox.checked;
            }
        }

        function toggleRowCheckboxes(checkbox) {
            var row = checkbox.parentNode.parentNode;
            var checkboxes = row.getElementsByTagName("input");
            for (var i = 1; i < checkboxes.length; i++) {
                checkboxes[i].checked = checkbox.checked;
            }
        }
    </script>


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>