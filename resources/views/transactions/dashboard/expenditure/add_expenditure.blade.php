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

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

        *,
        *:after,
        *:before {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility
        }

        .container {
            width: 100%;
            margin: 12% auto font-family: 'Open Sans', sans-serif;
        }

        /* Multi Tab Sidebar */

        .multitab-section {
            display: inline-block;
            width: 100%;
        }

        .multitab-section p {
            display: inline-block;
            background: #fff;
            text-transform: lowercase;
            font-size: 14px;
            padding: 20px;
            margin: 0;
        }

        .multitab-widget {
            list-style: none;
            margin: 0 0 10px;
            padding: 0
        }

        .multitab-widget li {
            list-style: none;
            padding: 0;
            margin: 0;
            float: left
        }

        .multitab-widget li a {
            background: #fff;
            color: #000;
            display: block;
            padding: 15px;
            font-size: 13px;
            text-decoration: none
        }

        .multitab-tab {
            width: 33.3%;
            text-align: center
        }

        .multitab-section h2,
        .multitab-section h3,
        .multitab-section h4,
        .multitab-section h5,
        .multitab-section h6 {
            display: none;
        }

        .multitab-widget li a.multitab-widget-current {
            padding-bottom: 10px;
            margin-top: -10px;
            background: #fff;
            color: #444;
            text-decoration: none;
            border-bottom: 5px solid #D9D9D9;
            font-size: 14px;
            text-transform: capitalize
        }
    </style>
</head>

<body style="overflow-x: hidden">

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
                            <!-- <form action=""> -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Card start -->
                                <div class="" style="">
                                    <div class="row">
                                        <div class="card-title">
                                            <h3>Tambah Pengeluaran<button type="button" style="border: none; background:none;">☆</button></h3>
                                        </div>
                                    </div>
                                    <div class="">

                                        <!-- Row start -->
                                        <form action="/insert_expenditure" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row gutters">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                    <div style="border-bottom: solid grey 1px; margin-bottom: 2%; margin-top: 2%;">
                                                        <h6>Umum</h6>
                                                        <p>Informasi kontak penyedia Anda akan muncul di tagihan dan profil mereka. Anda dapat menambahkan informasi kontak dan logo mereka untuk digunakan dalam tagihan.</p>
                                                    </div>

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->

                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" style="z-index:auto" class="form-control datepicker" name="date" id="date">
                                                            <span class="input-group-text">
                                                                <i class="icon-calendar1"></i>
                                                            </span>
                                                        </div>
                                                        <div class="field-placeholder">Tanggal<span class="text-danger">*</span></div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->

                                                    <div class="field-wrapper-group">
                                                        <div class="field-wrapper">
                                                            <select class="select-multiple js-states" title="Select Product Category" name="payment_method" id="payment_method" style="font-size: 5px;">
                                                                <option>Cash</option>
                                                                <option>Transfer Bank</option>

                                                            </select>
                                                            <div class="field-placeholder">Metode Pembayaran<span class="text-danger">*</span></div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->

                                                        <div class="field-wrapper-group">
                                                            <div class="field-wrapper">
                                                                <select class="select-multiple js-states" title="Select Product Category" name="account_id" id="account_id">
                                                                    @foreach ($account as $row)
                                                                    <option value="{{ $row->id  }}">{{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="field-placeholder">Akun<span class="text-danger">*</span></div>
                                                            </div>
                                                            <button type="button" class="input-icon-block btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalaccount">
                                                                <i class="icon-plus1"></i>
                                                            </button>
                                                        </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="number" placeholder="Rp0,00" name="amount" id="amount">
                                                        <div class="field-placeholder">Jumlah<span class="text-danger">*</span></div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <textarea class="form-control" rows="2" placeholder="Masukan Deskripsi Pendapatan" name="description" id="description"></textarea>
                                                        <div class="field-placeholder">Deskripsi <span class="text-danger">*</span></div>
                                                        <div class="form-text">
                                                            Silakan masukkan Deskripsi pendapatan Anda.
                                                        </div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                    <div style="border-bottom: solid grey 1px; margin-bottom: 2%; margin-top: 1%;">
                                                        <h6>Tetapkan</h6>
                                                        <p>Pilih kategori dan pelanggan untuk membuat laporan Anda lebih detail.</p>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->

                                                    <div class="field-wrapper-group">
                                                        <div class="field-wrapper">
                                                            <select class="select-multiple js-states" title="Select Product Category" name="category_id" id="category_id">
                                                                @foreach ($category as $row)
                                                                <option value="{{ $row->id}}">{{ $row->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="field-placeholder">Kategori<span class="text-danger">*</span></div>
                                                        </div>
                                                        <button type="button" class="input-icon-block btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalcategory">
                                                            <i class="icon-plus1"></i>
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->

                                                    <div class="field-wrapper-group">
                                                        <div class="field-wrapper">
                                                            <select class="select-multiple js-states" style="border-radius: 10px ;" title="Select Product Category" name="supplier_id" id="supplier_id">
                                                                @foreach ($supplier as $row)
                                                                <option value="{{ $row->id }}">{{ $row->name }}</option>

                                                                @endforeach

                                                            </select>
                                                            <div class="field-placeholder">Pelanggan<span class="text-danger">*</span></div>
                                                        </div>
                                                        <button type="button" class="input-icon-block btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalcustomer">
                                                            <i class="icon-plus1"></i>
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                    <div style="border-bottom: solid grey 1px; margin-bottom: 2%; margin-top: 1%;">
                                                        <h6>Lainnya</h6>
                                                        <p>Masukkan Lampiran Pendukung untuk menyimpan transaksi yang ditautkan ke catatan Anda.</p>
                                                    </div>

                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="text" placeholder="TRA-0076" name="expenditure_number" id="expenditure_number">
                                                        <div class="field-placeholder">Nomor<span class="text-danger">*</span></div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="text" placeholder="Masukan Refrensi" name="reference" id="reference" required>
                                                        <div class="field-placeholder">Refrensi</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <textarea class="form-control" rows="2" placeholder="Lampiran Tidak Wajib Diisi" name="attachment" id="attachment"></textarea>
                                                        <div class="field-placeholder">Lampiran Pendukung<span class="text-danger">*</span></div>
                                                        <div class="form-text">
                                                            Silakan masukkan Lampiran Pendukung Anda.
                                                        </div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                                    <div class="d-flex justify-content-end mt-4">
                                                        <button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="{{url('transactions')}}">Batal</button>
                                                        <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Button trigger modal -->


                                    <!-- Modal account start -->
                                    <form action="/insert_account_income" method="POST">
                                        @csrf
                                        <div class="modal fade" id="modalaccount" tabindex="-1" aria-labelledby="modalaccount" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="margin-top: -20px;">
                                                <div class="modal-content" style="padding: 0px; ">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Akun</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" style="z-index: auto" name="name" id="name" placeholder="Masukan nama" value="{{ old('name') }}" required>
                                                                </div>
                                                                <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper">
                                                                <div class="input-group">
                                                                    <input name="rekening_number" id="rekening_number" type="text" class="form-control" style="z-index: auto" placeholder="Masukan Nomor Rekening" value="{{ old('rekening_number') }}" required>

                                                                </div>
                                                                <div class="field-placeholder">Nomor Rekening<span class="text-danger">*</span></div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper-group">
                                                                <div class="field-wrapper">
                                                                    <select name="currency" id="currency" class="select-multiple js-states" title="Select Product Category" required>
                                                                        <option value="">Pilih Mata Uang</option>
                                                                        <option value="Rupiah" {{ old('currency') === 'Rupiah' ? 'selected' : '' }}>Rupiah</option>
                                                                        <option value="Dollar" {{ old('currency') === 'Dollar' ? 'selected' : '' }}>Dollar</option>


                                                                    </select>
                                                                    <div class="field-placeholder">Mata Uang<span class="text-danger">*</span></div>
                                                                </div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper">
                                                                <input name="balance" id="balance" class="form-control" type="number" placeholder="Rp0,00" value="{{ old('balance') }}" required>
                                                                <div class="field-placeholder">Saldo Saat Ini<span class="text-danger">*</span></div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper">
                                                                <input name="name_bank" id="name_bank" class="form-control" type="text" placeholder="Masukkan Nama Bank" value="{{ old('name_bank') }}" required>
                                                                <div class="field-placeholder">Nama Bank<span class="text-danger">*</span></div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper">
                                                                <input name="bank_telephone" id="bank_telephone" class="form-control" type="text" placeholder="Masukkan Telepon Bank" value="{{ old('bank_telephone') }}" required>
                                                                <div class="field-placeholder">Telepon Bank<span class="text-danger">*</span></div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper">
                                                                <textarea name="bank_address" id="bank_address" class="form-control1" rows="2" placeholder="Masukkan Alamat Bank" value="{{ old('bank_address') }}" required></textarea>
                                                                <div class="field-placeholder">Alamat Bank<span class="text-danger">*</span></div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">Simpan</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Modal account end -->

                                    <!-- Modal category start -->
                                    <form action="/insert_category_income" method="POST">
                                        @csrf
                                        <div class="modal fade" id="modalcategory" tabindex="-1" aria-labelledby="modalcategory" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="margin-top: -20px;">
                                                <div class="modal-content" style="padding: 0px;">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper">
                                                                <input class="form-control" name="name" type="text" placeholder=" Masukan Nama">
                                                                <div class="field-placeholder">Nama <span class="text-danger">*</span></div>
                                                                <div class="form-text">

                                                                </div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper row">
                                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                                                                    <label class="mb-2">Warna</label>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                                                        <input class="form-control" name="color" type="text" placeholder="Masukkan Warna Kategori" id="hex-input">
                                                                    </div>
                                                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                            <!-- Field wrapper start -->
                                                            <div class="field-wrapper-group">
                                                                <div class="field-wrapper">
                                                                    <select class="select-multiple js-states" name="category_type_id" title="Select Product Category">
                                                                        @foreach ($category_type as $category)

                                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="field-placeholder">Kategori<span class="text-danger">*</span></div>
                                                                </div>

                                                            </div>
                                                            <!-- Field wrapper end -->

                                                        </div>






                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">Simpan</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Modal category end -->

                                    <!-- Modal customer start -->
                                    <form action="/insert_sup_Expenditure" method="POST">
                                        @csrf
                                        <div class="modal fade" id="modalcustomer" tabindex="-1" aria-labelledby="modalcustomer" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="margin-top: -20px;">
                                                <div class="modal-content" style="padding: 0px;">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Pemasok</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">





                                                        <div class="container">
                                                            <div class='multitab-section'>
                                                                <ul class='multitab-widget multitab-widget-content-tabs-id'>
                                                                    <li class='multitab-tab'><a href='#multicolumn-widget-id1'>Umum</a></li>
                                                                    <li class='multitab-tab'><a href='#multicolumn-widget-id2'>Tags</a></li>
                                                                    <li class='multitab-tab'><a href='#multicolumn-widget-id3'>Archive</a></li>
                                                                </ul>
                                                                <div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id1'>
                                                                    <span class='sidebar' id='sidebartab1' preferred='yes'>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Nama <span class="text-danger">*</span></div>
                                                                                <input class="form-control" type="text" placeholder="Masukan Nama" name="name" id="name" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Email <span class="text-danger">*</span></div>
                                                                                <input class="form-control" type="email" placeholder="Masukan Email" name="email" id="email" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Telepon</div>
                                                                                <input class="form-control" type="number" placeholder="Masukan Nomor Telepon" name="phone_number" id="phone_number" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">NPWP</div>
                                                                                <input class="form-control" type="number" placeholder="Masukan NPWP" name="npwp" id="npwp" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <select class="select-multiple js-states" title="Select Product Category" data-live-search="true" name="currency" id="currency" required>
                                                                                    <option value="Rupiah Indonesia (IDR)">Rupiah Indonesia (IDR)</option>
                                                                                    <option value="Dolar Amerika Serikat (USD)">Dolar Amerika Serikat (USD)</option>
                                                                                    <div class="" style="float: left;">Mata Uang</div>
                                                                                </select>
                                                                            </div>
                                                                            <!-- Field wrapper end -->
                                                                        </div>
                                                                        <p>
                                                                    </span>
                                                                </div>
                                                                <div class='multitab-widget-content multitab-widget-content-widget-id' id='multicolumn-widget-id2'>
                                                                    <span class='sidebar' id='sidebartab2' preferred='yes'>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Alamat</div>
                                                                                <textarea class="form-control" rows="2" placeholder="Masukan Alamat" name="address" id="address" required></textarea>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Kota</div>
                                                                                <input class="form-control" type="text" placeholder="Masukan Kota" name="city" id="city" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Kode Pos</div>
                                                                                <input class="form-control" type="number" placeholder="Masukan Kode Pos" name="postal_code" id="postal_code" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Provinsi</div>
                                                                                <input class="form-control" type="text" placeholder="Masukan Provinsi" name="province" id="provice" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Negara</div>
                                                                                <select class="select-multiple js-states" title="Select Product Category" data-live-search="true" name="country" id="country" required>
                                                                                    <option>Afganistan</option>
                                                                                    <option>Afrika Selatan</option>
                                                                                    <option>Albania</option>
                                                                                    <option>Aljazair</option>
                                                                                    <option>Amerika Serikat</option>
                                                                                    <option>Andorra</option>
                                                                                    <option>Angola</option>
                                                                                    <option>Antigua dan Barbuda</option>
                                                                                    <option>Arab Saudi</option>
                                                                                    <option>Argentina</option>
                                                                                    <option>Armenia</option>
                                                                                    <option>Australia</option>
                                                                                    <option>Austria</option>
                                                                                    <option>Azerbaijan</option>
                                                                                    <option>Bahama</option>
                                                                                    <option>Bahrain</option>
                                                                                    <option>Bangladesh</option>
                                                                                    <option>Barbados</option>
                                                                                    <option>Belarus</option>
                                                                                    <option>Belgia</option>
                                                                                    <option>Belize</option>
                                                                                    <option>Benin</option>
                                                                                    <option>Bhutan</option>
                                                                                    <option>Bolivia</option>
                                                                                    <option>Bosnia dan Herzegovina</option>
                                                                                    <option>Botswana</option>
                                                                                    <option>Brasil</option>
                                                                                    <option>Brunei</option>
                                                                                    <option>Bulgaria</option>
                                                                                    <option>Burkina Faso</option>
                                                                                    <option>Burundi</option>
                                                                                    <option>Chad</option>
                                                                                    <option>Chili</option>
                                                                                    <option>China</option>
                                                                                    <option>Denmark</option>
                                                                                    <option>Djibouti</option>
                                                                                    <option>Dominika</option>
                                                                                    <option>Ekuador</option>
                                                                                    <option>Mesir</option>
                                                                                    <option>El Salvador</option>
                                                                                    <option>Eritrea</option>
                                                                                    <option>Estonia</option>
                                                                                    <option>Eswatini</option>
                                                                                    <option>Ethiopia</option>
                                                                                    <option>Fiji</option>
                                                                                    <option>Filipina</option>
                                                                                    <option>Finlandia</option>
                                                                                    <option>Gabon</option>
                                                                                    <option>Gambia</option>
                                                                                    <option>Georgia</option>
                                                                                    <option>Ghana</option>
                                                                                    <option>Grenada</option>
                                                                                    <option>Guatemala</option>
                                                                                    <option>Guinea</option>
                                                                                    <option>Guinea Bissau</option>
                                                                                    <option>Guinea Khatulistiwa</option>
                                                                                    <option>Guyana</option>
                                                                                    <option>Haiti</option>
                                                                                    <option>Honduras</option>
                                                                                    <option>Hongaria</option>
                                                                                    <option>India</option>
                                                                                    <option>Indonesia</option>
                                                                                    <option>Inggris</option>
                                                                                    <option>Irak</option>
                                                                                    <option>Iran</option>
                                                                                    <option>Irlandia</option>
                                                                                    <option>Islandia</option>
                                                                                    <option>Israel</option>
                                                                                    <option>Italia</option>
                                                                                    <option>Jamaika</option>
                                                                                    <option>Jepang</option>
                                                                                    <option>Yordania</option>
                                                                                    <option>Kamboja</option>
                                                                                    <option>Kamerun</option>
                                                                                    <option>Kanada</option>
                                                                                    <option>Kazakhstan</option>
                                                                                    <option>Kenya</option>
                                                                                    <option>Kirgistan</option>
                                                                                    <option>Kiribati</option>
                                                                                    <option>Kolombia</option>
                                                                                    <option>Komoro</option>
                                                                                    <option>Kongo</option>
                                                                                    <option>Korea Selatan</option>
                                                                                    <option>Korea Utara</option>
                                                                                    <option>Kosovo</option>
                                                                                    <option>Kroasia</option>
                                                                                    <option>Kuba</option>
                                                                                    <option>Kuwait</option>
                                                                                    <option>Laos</option>
                                                                                    <option>Latvia</option>
                                                                                    <option>Lebanon</option>
                                                                                    <option>Lesotho</option>
                                                                                    <option>Liberia</option>
                                                                                    <option>Libya</option>
                                                                                    <option>Liechtenstein</option>
                                                                                    <option>Lituania</option>
                                                                                    <option>Luksemburg</option>
                                                                                    <option>Madagaskar</option>
                                                                                    <option>Maladewa</option>
                                                                                    <option>Malawi</option>
                                                                                    <option>Malaysia</option>
                                                                                    <option>Mali</option>
                                                                                    <option>Malta</option>
                                                                                    <option>Maroko</option>
                                                                                    <option>Mauritania</option>
                                                                                    <option>Mauritius</option>
                                                                                    <option>Meksiko</option>
                                                                                    <option>Mesir</option>
                                                                                    <option>Mikronesia</option>
                                                                                    <option>Moldova</option>
                                                                                    <option>Monako</option>
                                                                                    <option>Mongolia</option>
                                                                                    <option>Montenegro</option>
                                                                                    <option>Mozambik</option>
                                                                                    <option>Myanmar</option>
                                                                                    <option>Namibia</option>
                                                                                    <option>Nauru</option>
                                                                                    <option>Nepal</option>
                                                                                    <option>Niger</option>
                                                                                    <option>Nigeria</option>
                                                                                    <option>Nikaragua</option>
                                                                                    <option>Norwegia</option>
                                                                                    <option>Oman</option>
                                                                                    <option>Pakistan</option>
                                                                                    <option>Palau</option>
                                                                                    <option>Panama</option>
                                                                                    <option>Papua Nugini</option>
                                                                                    <option>Paraguay</option>
                                                                                    <option>Peru</option>
                                                                                    <option>Polandia</option>
                                                                                    <option>Portugal</option>
                                                                                    <option>Prancis</option>
                                                                                    <option>Qatar</option>
                                                                                    <option>Republik Afrika Tengah</option>
                                                                                    <option>Republik Ceko</option>
                                                                                    <option>Republik Demokratik Kongo</option>
                                                                                    <option>Republik Dominika</option>
                                                                                    <option>Rumania</option>
                                                                                    <option>Rusia</option>
                                                                                    <option>Rwanda</option>
                                                                                    <option>Saint Kitts dan Nevis</option>
                                                                                    <option>Saint Lucia</option>
                                                                                    <option>Saint Vincent dan Grenadines</option>
                                                                                    <option>Samoa</option>
                                                                                    <option>San Marino</option>
                                                                                    <option>Sao Tome dan Principe</option>
                                                                                    <option>Selandia Baru</option>
                                                                                    <option>Senegal</option>
                                                                                    <option>Serbia</option>
                                                                                    <option>Seychelles</option>
                                                                                    <option>Sierra Leone</option>
                                                                                    <option>Singapura</option>
                                                                                    <option>Slovakia</option>
                                                                                    <option>Slovenia</option>
                                                                                    <option>Solomon Islands</option>
                                                                                    <option>Somalia</option>
                                                                                    <option>Spanyol</option>
                                                                                    <option>Sri Lanka</option>
                                                                                    <option>Sudan</option>
                                                                                    <option>Sudan Selatan</option>
                                                                                    <option>Suriah</option>
                                                                                    <option>Suriname</option>
                                                                                    <option>Swedia</option>
                                                                                    <option>Swiss</option>
                                                                                    <option>Tajikistan</option>
                                                                                    <option>Tanzania</option>
                                                                                    <option>Thailand</option>
                                                                                    <option>Timor Leste</option>
                                                                                    <option>Togo</option>
                                                                                    <option>Tonga</option>
                                                                                    <option>Trinidad dan Tobago</option>
                                                                                    <option>Tunisia</option>
                                                                                    <option>Turki</option>
                                                                                    <option>Turkmenistan</option>
                                                                                    <option>Tuvalu</option>
                                                                                    <option>Uganda</option>
                                                                                    <option>Ukraina</option>
                                                                                    <option>Uni Emirat Arab</option>
                                                                                    <option>Uruguay</option>
                                                                                    <option>Uzbekistan</option>
                                                                                    <option>Vanuatu</option>
                                                                                    <option>Vatikan</option>
                                                                                    <option>Venezuela</option>
                                                                                    <option>Vietnam</option>
                                                                                    <option>Yaman</option>
                                                                                    <option>Yordania</option>
                                                                                    <option>Yunani</option>
                                                                                    <option>Zambia</option>
                                                                                    <option>Zimbabwe</option>
                                                                                </select>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <p>
                                                                    </span>
                                                                </div>
                                                                <div class='-content multitab-widget-content-widget-id' id='multicolumn-widget-id3'>
                                                                    <span class='sidebar' id='sidebartab3' preferred='yes'>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Situs Web</div>
                                                                                <input class="form-control" type="text" placeholder="Masukan Situs Web" name="website" id="website" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <div class="" style="float: left;">Refrensi</div>
                                                                                <input class="form-control" type="text" placeholder="Masukan Refrensi" name="reference" id="reference" required>
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <p>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary">Simpan</button>
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
                    </div>
                    <!-- </form> -->
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

        //<![CDATA[
        jQuery(document).ready(function($) {
            $(".multitab-widget-content-widget-id").hide();
            $("ul.multitab-widget-content-tabs-id li:first a").addClass("multitab-widget-current").show();
            $(".multitab-widget-content-widget-id:first").show();
            $("ul.multitab-widget-content-tabs-id li a").click(function() {
                $("ul.multitab-widget-content-tabs-id li a").removeClass("multitab-widget-current a");
                $(this).addClass("multitab-widget-current");
                $(".multitab-widget-content-widget-id").hide();
                var activeTab = $(this).attr("href");
                $(activeTab).fadeIn();
                return false;
            });
        });
        //]]>
    </script>
    <script>
        const colorPicker = document.getElementById('exampleColorInput');
        const hexInput = document.getElementById('hex-input');

        colorPicker.addEventListener('input', (event) => {
            const color = event.target.value;
            hexInput.value = color;
        });
    </script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>