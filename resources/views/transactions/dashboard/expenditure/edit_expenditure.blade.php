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
                                            <form action="/update_expenditure" method="POST">
                                                @csrf
                                            <div class="row gutters">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                    <div style="border-bottom: solid grey 1px;margin-bottom:1%">
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
                                                            <input type="text" style="z-index:auto" class="form-control datepicker" name="date" id="date" value="{{ $expenditure->date }}">
                                                            <span class="input-group-text">
                                                                <i class="icon-calendar1"></i>
                                                            </span>
                                                        </div>
                                                        <div class="field-placeholder">Tanggal</div>
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
                                                            <div class="field-placeholder">Metode Pembayaran</div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->

                                                    <div class="field-wrapper-group">
                                                        <div class="field-wrapper">
                                                            <select class="select-multiple js-states" title="Select Product Category" name="account_id" id="account_id">
                                                                @foreach ($ture as $row)
                                                                <option value="{{ $row->account_id }}" {{ $row->account_id == $expenditure->account_id ? 'selected' : ''}}>{{ $row->account->name }}</option>
                                                                @endforeach
                                                            </select>

                                                            </select>
                                                            <div class="field-placeholder">Akun</div>
                                                        </div>
                                                        <button type="button" class="input-icon-block btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalaccount">
                                                            <i class="icon-plus1"></i>
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="number" placeholder="Rp0,00" name="amount" id="amount" value="{{$expenditure->amount}}">
                                                        <div class="field-placeholder">Jumlah</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <textarea class="form-control" rows="2" placeholder="Masukan Deskripsi Pendapatan" name="description" id="description">{{ $expenditure->description }}</textarea>
                                                        <div class="field-placeholder">Deskripsi <span class="text-danger">*</span></div>
                                                        <div class="form-text">
                                                            Silakan masukkan Deskripsi pendapatan Anda.
                                                        </div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                    <div style="border-bottom: solid grey 1px;margin-bottom:1%">
                                                        <h6>Tetapkan</h6>
                                                        <p>Pilih kategori dan pelanggan untuk membuat laporan Anda lebih detail.</p>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->

                                                    <div class="field-wrapper-group">
                                                        <div class="field-wrapper">
                                                            <select class="select-multiple js-states" title="Select Product Category" name="category_id" id="category_id">
                                                                @foreach ($ture as $row)
                                                                <option value="{{ $row->category_id }}" {{ $row->category_id == $expenditure->category_id ? 'selected' : ''}}>{{ $row->category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="field-placeholder">Kategori</div>
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
                                                                @foreach ($ture as $row)
                                                                <option value="{{ $row->supplier_id }}" {{ $row->supplier_id == $expenditure->supplier_id ? 'selected' : ''}}>{{ $row->supplier->name }}</option>
                                                                @endforeach

                                                            </select>
                                                            <div class="field-placeholder">Pemasok</div>
                                                        </div>
                                                        <button type="button" class="input-icon-block btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalsupplier">
                                                            <i class="icon-plus1"></i>
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                    <div style="border-bottom: solid grey 1px;margin-bottom:1%">
                                                        <h6>Lainnya</h6>
                                                        <p>Masukkan Lampiran Pendukung untuk menyimpan transaksi yang ditautkan ke catatan Anda.</p>
                                                    </div>

                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="text" placeholder="TRA-0076" name="expenditure_number" id="expenditure_number" value="{{ $expenditure->expenditure_number }}">
                                                        <div class="field-placeholder">Nomor</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="text" placeholder="Masukan Refrensi" name="reference" id="reference" value="{{ $expenditure->reference }}" required>
                                                        <div class="field-placeholder">Refrensi</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <textarea class="form-control1" rows="2" placeholder="Lampiran Tidak Wajib Diisi" name="attachment" id="attachment">{{ $expenditure->attachment }}</textarea>
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
                                            <!-- Button trigger modal -->


                                            <!-- Modal account start -->
                                            <form action="">
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
                                                                        <label style="float: left;">Nama</label>
                                                                        <input class="form-control" type="text" placeholder="Masukkan Nama Akun">

                                                                    </div>
                                                                    <!-- Field wrapper end -->

                                                                </div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                    <!-- Field wrapper start -->
                                                                    <div class="field-wrapper">
                                                                        <label style="float: left;">Nomor Rekening</label>
                                                                        <input class="form-control" type="text" placeholder="Masukkan E-mail Akun">
                                                                    </div>
                                                                    <!-- Field wrapper end -->

                                                                </div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                    <!-- Field wrapper start -->
                                                                    <div class="field-wrapper">
                                                                        <label style="float: left;">Mata Uang</label>
                                                                        <input class="form-control" type="text" placeholder="Masukkan Nomor Telepone Akun">
                                                                    </div>
                                                                    <!-- Field wrapper end -->

                                                                </div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                    <!-- Field wrapper start -->
                                                                    <div class="field-wrapper">
                                                                        <label style="float: left;">Saldo Awal</label>
                                                                        <input class="form-control" type="text" placeholder="Masukkan NPWP Akun">
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
                                                                        <label style="float: left;">Nama</label>
                                                                        <input class="form-control" type="text" placeholder="Masukkan Nama Kategori">
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
                                                                                <input class="form-control" type="text" placeholder="Masukkan Warna Kategori">
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                                                                            </div>
                                                                        </div>
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

                                            <!-- Modal supplier start -->
                                            <form action="">
                                                <div class="modal fade" id="modalsupplier" tabindex="-1" aria-labelledby="modalsupplier" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content" style="padding: 0px">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Pemasok</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <div class="field-wrapper">


                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <label style="float: left;">Nama</label>
                                                                                <input class="form-control" type="text" placeholder="Masukkan Nama Pemasok">
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <label style="float: left;">Email</label>
                                                                                <input class="form-control" type="email" placeholder="Masukkan E-mail Pemasok">
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <label style="float: left;">Telepone</label>
                                                                                <input class="form-control" type="text" placeholder="Masukkan Nomor Telepone Pemasok">
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <label style="float: left;">NPWP</label>
                                                                                <input class="form-control" type="text" placeholder="Masukkan NPWP Pemasok">
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <label style="float: left;">Mata Uang</label>
                                                                                <input class="form-control" type="text" placeholder="Masukkan Mata Uang Pemasok">
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <label style="float: left;">Negara</label>
                                                                                <input class="form-control" type="text" placeholder="Masukkan Negara Pemasok">
                                                                            </div>
                                                                            <!-- Field wrapper end -->

                                                                        </div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                                            <!-- Field wrapper start -->
                                                                            <div class="field-wrapper">
                                                                                <label style="float: left;">Alamat</label>
                                                                                <textarea class="form-control1" rows="2" placeholder="Masukkan Alamat Pelanggan"></textarea>

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
                                            <!-- Modal supplier end -->


                                            <!-- Row end -->

                                        </div>
                                    </div>
                                    <!-- Card end -->

                                </div>
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


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>
