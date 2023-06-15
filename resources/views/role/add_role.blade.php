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
                            <form action="add-role-permission" method="POST">
                                @csrf
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
                                                        <input class="form-control" name="name" type="text" placeholder="Masukan nama">
                                                        <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>


                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <textarea class="form-control1" name="description" rows="2" placeholder="Masukkan Deskripsi Peran"></textarea>
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
                                                                                <td name="item" id="checkbox2"><input name="permission[]" value="1" type="checkbox"></td>
                                                                                <td name="item" id="checkbox3"><input name="permission[]" value="2" type="checkbox"></td>
                                                                                <td name="item" id="checkbox4"><input name="permission[]" value="3" type="checkbox"></td>
                                                                                <td name="item" id="checkbox5"><input name="permission[]" value="4" type="checkbox"></td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pelanggan</th>
                                                                                <td name="item" id="checkbox6">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox7"><input name="permission[]" value="5" type="checkbox"></td>
                                                                                <td name="item" id="checkbox8"><input name="permission[]" value="6" type="checkbox"></td>
                                                                                <td name="item" id="checkbox9"><input name="permission[]" value="7" type="checkbox"></td>
                                                                                <td name="item" id="checkbox10"><input name="permission[]" value="8" type="checkbox"></td>

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
                                                                                <td name="item" id="checkbox12"><input name="permission[]"  value="9" type="checkbox"></td>
                                                                                <td name="item" id="checkbox13"><input name="permission[]" value="10" type="checkbox"></td>
                                                                                <td name="item" id="checkbox14"><input name="permission[]" value="11" type="checkbox"></td>
                                                                                <td name="item" id="checkbox15"><input name="permission[]" value="12" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pemasok</th>
                                                                                <td name="item" id="checkbox16">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox17"><input name="permission[]" value="13" type="checkbox"></td>
                                                                                <td name="item" id="checkbox18"><input name="permission[]" value="14" type="checkbox"></td>
                                                                                <td name="item" id="checkbox19"><input name="permission[]" value="15" type="checkbox"></td>
                                                                                <td name="item" id="checkbox20"><input name="permission[]" value="16" type="checkbox"></td>

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
                                                                                <td name="item" id="checkbox22"><input name="permission[]" value="17" type="checkbox"></td>
                                                                                <td name="item" id="checkbox23"><input name="permission[]" value="18" type="checkbox"></td>
                                                                                <td name="item" id="checkbox24"><input name="permission[]" value="19" type="checkbox"></td>
                                                                                <td name="item" id="checkbox25"><input name="permission[]" value="20" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Transaksi</th>
                                                                                <td name="item" id="checkbox26">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox27"><input name="permission[]" value="21" type="checkbox"></td>
                                                                                <td name="item" id="checkbox28"><input name="permission[]" value="22" type="checkbox"></td>
                                                                                <td name="item" id="checkbox29"><input name="permission[]" value="23" type="checkbox"></td>
                                                                                <td name="item" id="checkbox30"><input name="permission[]" value="24" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Transfer</th>
                                                                                <td name="item" id="checkbox31">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox32"><input name="permission[]" value="25" type="checkbox"></td>
                                                                                <td name="item" id="checkbox33"><input name="permission[]" value="26" type="checkbox"></td>
                                                                                <td name="item" id="checkbox34"><input name="permission[]" value="27" type="checkbox"></td>
                                                                                <td name="item" id="checkbox35"><input name="permission[]" value="28" type="checkbox"></td>

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
                                                                                <td name="item" id="checkbox37"><input name="permission[]" value="29" type="checkbox"></td>
                                                                                <td name="item" id="checkbox38"><input name="permission[]" value="30" type="checkbox"></td>
                                                                                <td name="item" id="checkbox39"><input name="permission[]" value="31" type="checkbox"></td>
                                                                                <td name="item" id="checkbox40"><input name="permission[]" value="32" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Ringkasan Pengeluaran</th>
                                                                                <td name="item" id="checkbox41">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox42"><input name="permission[]" value="33" type="checkbox"></td>
                                                                                <td name="item" id="checkbox43"><input name="permission[]" value="34" type="checkbox"></td>
                                                                                <td name="item" id="checkbox44"><input name="permission[]" value="35" type="checkbox"></td>
                                                                                <td name="item" id="checkbox45"><input name="permission[]" value="36" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Ringkasan Pajak</th>
                                                                                <td name="item" id="checkbox46">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox47"><input name="permission[]" value="37" type="checkbox"></td>
                                                                                <td name="item" id="checkbox48"><input name="permission[]" value="38" type="checkbox"></td>
                                                                                <td name="item" id="checkbox49"><input name="permission[]" value="39" type="checkbox"></td>
                                                                                <td name="item" id="checkbox50"><input name="permission[]" value="40" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Laba & Rugi</th>
                                                                                <td name="item" id="checkbox51">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox52"><input name="permission[]" value="41" type="checkbox"></td>
                                                                                <td name="item" id="checkbox53"><input name="permission[]" value="42" type="checkbox"></td>
                                                                                <td name="item" id="checkbox54"><input name="permission[]" value="43" type="checkbox"></td>
                                                                                <td name="item" id="checkbox55"><input name="permission[]" value="44" type="checkbox"></td>

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
                                                                                <td name="item" id="checkbox57"><input name="permission[]"  value="45" type="checkbox"></td>
                                                                                <td name="item" id="checkbox57"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox57"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox57"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                               

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Arus Kas</th>
                                                                                <td name="item" id="checkbox61">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox62"><input name="permission[]" value="46" type="checkbox"></td>
                                                                                <td name="item" id="checkbox62"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox62"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox62"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pengeluaran Berdasarkan Kategori</th>
                                                                                <td name="item" id="checkbox66">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox67"><input name="permission[]" value="47" type="checkbox"></td>
                                                                                <td name="item" id="checkbox67"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox67"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox67"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                               
                                                                                

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Hutang </th>
                                                                                <td name="item" id="checkbox76">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox77"><input name="permission[]" value="48" type="checkbox"></td>
                                                                                <td name="item" id="checkbox77"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox77"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox77"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                              

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Laba & Rugi</th>
                                                                                <td name="item" id="checkbox81">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox82"><input name="permission[]" value="49" type="checkbox"></td>
                                                                                <td name="item" id="checkbox82"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox82"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox82"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                               

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Piutang</th>
                                                                                <td name="item" id="checkbox86">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox87"><input name="permission[]" value="50" type="checkbox"></td>
                                                                                <td name="item" id="checkbox87"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox87"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox87"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>

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

                                                                                <td>Calendar</th>
                                                                                <td name="item" id="checkbox101">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox102"><input name="permission[]" value="51" type="checkbox"></td>
                                                                                <td name="item" id="checkbox102"><input name="permission[]" style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox102"><input name="permission[]" style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox102"><input name="permission[]" style="visibility: hidden" type="checkbox"></td>
                                                                               

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
                                                                                <td name="item" id="checkbox107"><input name="permission[]" value="52" type="checkbox"></td>
                                                                                <td name="item" id="checkbox108"><input name="permission[]" value="53" type="checkbox"></td>
                                                                                <td name="item" id="checkbox109"><input name="permission[]" value="54" type="checkbox"></td>
                                                                                <td name="item" id="checkbox110"><input name="permission[]" value="55" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Profil</th>
                                                                                <td name="item" id="checkbox111">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox112"><input name="permission[]" value="56" type="checkbox"></td>
                                                                                <td name="item" id="checkbox113"><input name="permission[]" style="visibility: hidden"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox114"><input name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox115"><input name="permission[]" style="visibility: hidden" value="57" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Roles</th>
                                                                                <td name="item" id="checkbox116">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox117"><input name="permission[]" value="58" type="checkbox"></td>
                                                                                <td name="item" id="checkbox118"><input name="permission[]" value="59" type="checkbox"></td>
                                                                                <td name="item" id="checkbox119"><input name="permission[]" value="60" type="checkbox"></td>
                                                                                <td name="item" id="checkbox120"><input name="permission[]" value="61" type="checkbox"></td>

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
                                                                Umum
                                                            </button>
                                                        </h2>
                                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
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
                                                                                <td name="item" id="checkbox151">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox152"><input name="permission[]" value="62" type="checkbox"></td>
                                                                                <td name="item" id="checkbox153"><input name="permission[]" value="63" type="checkbox"></td>
                                                                                <td name="item" id="checkbox154"><input name="permission[]" value="64" type="checkbox"></td>
                                                                                <td name="item" id="checkbox155"><input name="permission[]" value="65" type="checkbox"></td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td>Item</th>
                                                                                <td name="item" id="checkbox156">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox157"><input name="permission[]" value="66" type="checkbox"></td>
                                                                                <td name="item" id="checkbox158"><input name="permission[]" value="67" type="checkbox"></td>
                                                                                <td name="item" id="checkbox159"><input name="permission[]" value="68" type="checkbox"></td>
                                                                                <td name="item" id="checkbox160"><input name="permission[]" value="69" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>
                                                                                
                                                                                <td>Import</th>
                                                                                <td name="item" id="checkbox161">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox162"><input name="permission[]" value="71" type="checkbox"></td>
                                                                                <td name="item" id="checkbox163"><input name="permission[]" style="visibility: hidden"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox164"><input name="permission[]" style="visibility: hidden"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox165"><input name="permission[]" style="visibility: hidden"  style="visibility: hidden" type="checkbox"></td>

                                                                            </tr>
                                                                            
                                                                            <tr>

                                                                                <td>Dasbor</th>
                                                                                <td name="item" id="checkbox171">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox172"><input name="permission[]" value="70" type="checkbox"></td>
                                                                                <td name="item" id="checkbox173"><input name="permission[]" style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox174"><input name="permission[]" style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox175"><input name="permission[]" style="visibility: hidden" type="checkbox"></td>

                                                                            </tr>
                                                                            <tr>

                                                                                <td>Laporan</th>
                                                                                <td name="item" id="checkbox176">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox177"><input name="permission[]" value="86" type="checkbox"></td>
                                                                                <td name="item" id="checkbox178"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox179"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox180"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTen">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                                Pengaturan
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faqAccordion">
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
                                                                                <td name="item" id="checkbox191">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox192"><input name="permission[]" value="73" type="checkbox"></td>
                                                                                <td name="item" id="checkbox193"><input name="permission[]" value="74" type="checkbox"></td>
                                                                                <td name="item" id="checkbox194"><input name="permission[]" value="75" type="checkbox"></td>
                                                                                <td name="item" id="checkbox195"><input name="permission[]" value="76" type="checkbox"></td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td>Pajak</th>
                                                                                <td name="item" id="checkbox196">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox197"><input name="permission[]" value="77" type="checkbox"></td>
                                                                                <td name="item" id="checkbox198"><input name="permission[]" value="78" type="checkbox"></td>
                                                                                <td name="item" id="checkbox199"><input name="permission[]" value="79" type="checkbox"></td>
                                                                                <td name="item" id="checkbox200"><input name="permission[]" value="80" type="checkbox"></td>

                                                                            </tr>                   
                                                                          
                                                                            <tr>

                                                                                <td>Company</th>
                                                                                <td name="item" id="checkbox211">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox212"><input name="permission[]" value="81" type="checkbox"></td>
                                                                                <td name="item" id="checkbox213"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox214"><input name="permission[]" value="82" type="checkbox"></td>
                                                                                <td name="item" id="checkbox215"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>

                                                                            </tr>
                                                                          
                                                                            <tr>

                                                                                <td>Invoice</th>
                                                                                <td name="item" id="checkbox221">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox222"><input name="permission[]" value="83" type="checkbox"></td>
                                                                                <td name="item" id="checkbox223"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox224"><input name="permission[]" value="84" type="checkbox"></td>
                                                                                <td name="item" id="checkbox225"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>

                                                                            </tr>
                                                                           
                                                                            <tr>

                                                                                <td>Template Surel</th>
                                                                                <td name="item" id="checkbox236">
                                                                                    <input type="checkbox" onchange="toggleRowCheckboxes(this)" />
                                                                                </td>
                                                                                <td name="item" id="checkbox237"><input name="permission[]" value="85" type="checkbox"></td>
                                                                                <td name="item" id="checkbox238"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>
                                                                                <td name="item" id="checkbox239"><input name="permission[]" value="86" type="checkbox"></td>
                                                                                <td name="item" id="checkbox240"><input style="visibility: hidden" name="permission[]"  style="visibility: hidden" type="checkbox"></td>

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
        // Ambil elemen-elemen input checkbox
        var checkboxes = document.querySelectorAll('input[name="permission[]"]');
    
        // Loop melalui setiap checkbox
        checkboxes.forEach(function(checkbox) {
            // Tambahkan event listener untuk memeriksa perubahan status checkbox
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    // Checkbox dicentang, lakukan operasi yang diperlukan
                } else {
                    // Checkbox tidak dicentang, lakukan operasi yang diperlukan
                }
            });
        });
    </script>
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