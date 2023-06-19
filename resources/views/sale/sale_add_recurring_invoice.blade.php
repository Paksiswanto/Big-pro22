<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Tambah-Faktur Berulang</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/bootstrap.min.css') }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/fonts/style.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/bs-select/bs-select.css') }}" />



    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/megamenu/css/megamenu.css') }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/dropzone/dropzone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/daterange/daterange.css') }}">
    <style>
        .toggle-container {
            display: flex;
            align-items: center;
        }

        .toggle-label {
            margin-right: 10px;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
            background-color: #ccc;
            border-radius: 12px;
            transition: background-color 0.3s;
        }

        .toggle-switch:before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: white;
            top: 2px;
            transition: transform 0.3s;
        }

        .toggle-switch.checked {
            background-color: green;
        }

        .toggle-switch.checked:before {
            transform: translateX(26px);
        }

        .toggle-switch.unchecked:before {
            transform: translateX(0);
        }

        .toggle-text {
            font-weight: bold;
        }

        .toggle-text-yes {
            color: green;
        }

        .toggle-text-no {
            color: red;
        }

        .accordion-heading {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .accordion-title {
            margin-bottom: 0.5rem;
        }
    </style>
    <style>
        .row {
            &:first-child {
                padding-top: 20px;
            }
        }

        .cat-title {
            display: inline-block;
            padding: 5px;
        }

        .cat-actions {
            display: inline-block;
            background-color: white;
            padding: 3px;
            margin-left: 10px;

            button {
                padding: 5px;
                line-height: 26px;
                box-shadow: none;
                color: black;
                background-color: transparent;
            }
        }
    </style>
    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        .col-md-8,
        .col-md-4 {
            flex: 1;
        }

        .field-wrapper {
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 2px;
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

            <!-- Page header starts -->

            @include('layouts.header')




            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- Card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Tambah Faktur<button type="button"
                                                style="border: none; background:none;">☆</button></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Faq start -->
                                    <div class="accordion" id="faqAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <div class="accordion-heading">
                                                        <h6 class="accordion-title">Perusahaan</h6>
                                                        <p class="accordion-description">Ubah alamat, logo, dan
                                                            informasi lain perusahaanmu.</p>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <div class="flex-row row">
                                                        <div class="col-md-8">
                                                            <div class="d-flex flex-column">
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text"
                                                                        name="title" id="judul"
                                                                        placeholder="Masukkan Judul">
                                                                    <div class="field-placeholder">Judul</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="d-flex flex-column">
                                                                <div class="field-wrapper">
                                                                    <input class="form-control" type="text"
                                                                        name="subtitle" id="subjudul"
                                                                        placeholder="Masukkan Subjudul">
                                                                    <div class="field-placeholder">Subjudul</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-row">
                                                        <div class="col-md-8">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <div class="field-wrapper">
                                                                        <input class="form-control" type="file"
                                                                            name="logo" id="logo">
                                                                        <div class="field-placeholder">Logo</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="margin-top: 2%;">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                        style="margin-bottom: 1%;">

                                        <div style="border-bottom: solid grey 1px;">
                                            <h6>Tagihan</h6>
                                            <p>Detail penagihan muncul di faktur Anda. Tanggal Faktur digunakan di
                                                dasbor dan laporan. Pilih tanggal yang Anda harapkan untuk dibayar
                                                sebagai Tanggal Jatuh Tempo.</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field-wrapper mb-3 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12"
                                        style="margin-left: initial;height: 76px;margin-right: -1%;">
                                        <select class="select-single js-states" title="Select Product Category"
                                            data-live-search="true">
                                            <option>Rudi</option>
                                            <option selected>Ruli</option>
                                            <option>Adi</option>
                                            <option>Daffa</option>
                                            <option>Gembes</option>
                                            <option>Reno</option>
                                            <option>Triski</option>
                                        </select>
                                        <div class="field-placeholder">Pelanggan <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class=" col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 d-flex">
                                        <div class="col-6 ml-5 mr-5" style="margin-right:1%">
                                            <div class="field-wrapper mb-3">
                                                <input class="form-control datepicker" type="text">
                                                <div class="field-placeholder">Tanggal Faktur</div>
                                            </div>
                                            <div class="field-wrapper mb-3">
                                                <select class="select-single js-states"
                                                    title="Select Product Category" data-live-search="true">
                                                    <option selected>Jatuh tempo dalam 15 hari</option>
                                                    <option>Jatuh tempo dalam 30 hari</option>
                                                    <option>Jatuh tempo dalam 45 hari</option>
                                                    <option>Jatuh tempo dalam 60 hari</option>
                                                    <option>Jatuh tempo dalam 90 hari</option>
                                                    <option>Jatuh tempo saat diterima</option>
                                                </select>
                                                <div class="field-placeholder">Tanggal Pembayaran <span
                                                        class="text-danger">*</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="field-wrapper mb-3">
                                                <input class="form-control" type="number"
                                                    placeholder="Masukkan Nomor Faktur">
                                                <div class="field-placeholder">Nomor Faktur</div>
                                            </div>
                                            <div class="field-wrapper mb-3">
                                                <input class="form-control" type="number"
                                                    placeholder="Masukkan Jumlah Pesanan">
                                                <div class="field-placeholder">Jumlah Pesanan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <button class="edit-icon"
                                                            style="background-color: transparent;border:none"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                viewBox="0 -960 960 960" width="20">
                                                                <path
                                                                    d="M180-180h44l443-443-44-44-443 443v44Zm614-486L666-794l42-42q17-17 42-17t42 17l44 44q17 17 17 42t-17 42l-42 42Zm-42 42L248-120H120v-128l504-504 128 128Zm-107-21-22-22 44 44-22-22Z" />
                                                            </svg>
                                                        </button>
                                                        Item
                                                    </th>
                                                    <th>Deskripsi</th>
                                                    <th>Kuantitas</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                    <th>Pajak</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-body">
                                                <tr>
                                                    <td>
                                                        <div class="field-wrapper m-0">
                                                            <select name="item[]" style="border-radius:2px"
                                                                class="form-control">
                                                                <option value="txt">Text</option>
                                                                <option value="md">Markdown</option>
                                                                <option value="html">HTML</option>
                                                                <option value="php">PHP</option>
                                                                <option value="python">Python</option>
                                                                <option value="java">Java</option>
                                                                <option value="js" selected>JavaScript</option>
                                                                <option value="ruby">Ruby</option>
                                                                <option value="vhdl">VHDL</option>
                                                                <option value="verilog">Verilog</option>
                                                                <option value="csharp">C#</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="field-wrapper m-0">
                                                            <input type="text" style="border-radius:2px"
                                                                name="deskripsi[]" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="field-wrapper m-0">
                                                            <input type="number" style="border-radius:2px"
                                                                name="kuantitas[]" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="field-wrapper m-0">
                                                            <input type="number" style="border-radius:2px"
                                                                name="harga[]" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="field-wrapper m-0">
                                                            <input type="number" style="border-radius:2px"
                                                                name="jumlah[]" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div id="pajak-wrapper">
                                                            <div class="field-wrapper m-0 mb-1 pajak-input-wrapper">
                                                                <input type="number" style="border-radius:2px"
                                                                    name="pajak[]" class="form-control">
                                                            </div>
                                                            <div class="add-pajak-wrapper mb-2">
                                                                <button class="btn btn-light add-pajak"
                                                                    style="margin-top: 1%">
                                                                    <i class="icon-plus"></i> Tambah Pajak
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-actions">
                                                            <button class="btn btn-light delete-row">
                                                                <i class="icon-trash-2"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="5"></td>
                                                    <td>
                                                        <p class="m-0">Subtotal</p>
                                                        <p class="m-0">Diskon</p>
                                                        <p class="m-0">Total Pajak</p>
                                                        <h5 class="mt-2">Total</h5>
                                                    </td>
                                                    <td>
                                                        <p id="subtotal" class="m-0">Rp.0.00</p>
                                                        <p id="diskon" class="m-0">
                                                        <div class="field-wrapper m-0">
                                                            <input type="text" style="border-radius:2px"
                                                                name="deskripsi[]" class="form-control">
                                                        </div>
                                                        </p>
                                                        <p id="total-pajak" class="m-0">Rp.0.00</p>
                                                        <h5 id="total" class="mt-2">Rp.0.00</h5>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <button class="btn btn-primary" id="add-row">Tambah Baris</button>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Tambah Item
                                        </button>

                                        <!-- Modal start -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="margin-top: -20%;">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="field-wrapper m-0">
                                                                <label for="nama">Nama</label>
                                                                <input type="text" name="nama"
                                                                    style="border-radius:2px"
                                                                    placeholder="Masukan nama item"
                                                                    id="nama"class="form-control">
                                                            </div>
                                                            <div class="field-wrapper m-0">
                                                                <label for="nama">Harga Jual</label>
                                                                <input type="text" name="Harga"
                                                                    style="border-radius:2px"
                                                                    placeholder="Masukan harga item"
                                                                    id="nama"class="form-control">
                                                            </div>
                                                            <div class="field-wrapper m-0">
                                                                <label for="nama">kategori</label>
                                                                <input type="text" name="kategori"
                                                                    style="border-radius:2px"
                                                                    placeholder="Masukan nama item"
                                                                    id="nama"class="form-control">
                                                            </div>
                                                            <div class="field-wrapper ">
                                                                <label for="nama">Pajak</label>
                                                                <input type="text" name="Pajak"
                                                                    style="border-radius:2px"
                                                                    placeholder="Masukan nama item"
                                                                    id="nama"class="form-control">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <label for="judul" class="field-label">Catatan</label>
                                    <textarea class="form-control" placeholder="Masukan Catatan" rows="2"></textarea>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            <div class="" style="margin-top: 2%;">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                    style="margin-bottom: 1%;">

                                    <div style="border-bottom: solid grey 1px;">
                                        <h6>Jadwal</h6>
                                        <p>Pilih persyaratan dan waktu mulai/berakhir untuk memastikan bahwa pelanggan
                                            menerima faktur Anda pada hari yang tepat.</p>
                                    </div>

                                </div>
                            </div>
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <p class="col-5">Ulangi invoice ini</p>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="field-wrapper">
                                                    <select class="select-single js-states"
                                                        title="Select Product Category" data-live-search="true">
                                                        <option>Harian</option>
                                                        <option>Mingguan</option>
                                                        <option>Bulanan</option>
                                                        <option>Tahunan</option>
                                                        <option>Sesuikan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex align-items-center">
                                        <p class="col-3">Buat invoice pertama aktif</p>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12"
                                            style="margin-left: -1%">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker">
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12"
                                            style="margin-left: 1%">
                                            <div class="field-wrapper">
                                                <select class="select-single js-states"
                                                    title="Select Product Category" data-live-search="true">
                                                    <option>Setelah</option>
                                                    <option>Pada</option>
                                                    <option>Tidak Pernah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12"
                                            style="margin-left: 1%">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker">
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex align-items-center">
                                        <p class="col-3">Kirim email secara otomatis</p>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="toggle-container">
                                                <span class="toggle-text toggle-text-yes"
                                                    style="margin-left: -3%"></span>
                                                <span class="toggle-text toggle-text-no"
                                                    style="margin-left: 2%"></span>
                                                <div class="toggle-switch" style="margin-left: 3%"></div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Row end -->
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item" style="margin-top: 1%">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="accordion-heading">
                                                <h6 class="accordion-title">Opsi Lanjutan</h6>
                                                <p class="accordion-description">Pilih kategori, tambahkan, atau edit
                                                    footer, dan tambahkan lampiran ke invoice-recurring.</p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                      <div class="accordion-body">
                                        <div class="d-flex flex-wrap row">
                                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="field-wrapper" style="height: 88px">
                                              <input class="form-control" type="file" name="attachment" id="judul" style="border-radius: 2px; margin-bottom: 10px; margin-right: 10%">
                                              <div class="field-placeholder">Lampiran</div>
                                            </div>
                                          </div>
                                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="field-wrapper mb-3">
                                              <select class="select-single js-states" name="category_id" title="Select Product Category" data-live-search="true">
                                                <option selected>Deposit</option>
                                                <option>Penjualan</option>
                                                <option><button type="button"><b>Kategori Baru</b></button></option>
                                              </select>
                                              <div class="field-placeholder">Kategori <span class="text-danger">*</span></div>
                                            </div>
                                          </div>
                                          <div class="col-8" style="width: 100%; height: auto; margin-top: -8%;">
                                            <div class="field-wrapper" style="width: 100%; height: auto; margin-top:3%">
                                              <textarea class="form-control" name="footer" placeholder="Masukan Catatan" rows="2"></textarea>
                                              <div class="field-placeholder">Footer</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>                                                                                                                                     
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                <div class="d-flex justify-content-end mt-4">
                                    <button class="btn btn-outline-secondary1" type="submit"
                                        style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
                                    <button class="btn btn-primary" type="submit"
                                        style="border-radius: 2px">Simpan</button>
                                </div>
                            </div>
                            <div class="app-footer">© Uni Pro Admin 2021</div>
                        </div>
                        <!-- Faq end -->

                    </div>
                </div>
                <!-- Card end -->
                <!-- Modal start -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="margin-top: -20%;">
                            <div class="modal-header" style="margin-bottom: -1%">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Kolom</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="field-wrapper m-0">
                                        <label for="nama">Nama Item</label>
                                        <select class="select-single js-states" title="Select Product Category"
                                            data-live-search="true">
                                            <option>Item</option>
                                            <option>Layanan</option>
                                            <option>Produk</option>
                                        </select>

                                    </div>
                                    <!--  -->
                                    <div class="field-wrapper m-0">
                                        <label for="nama">Nama Harga</label>
                                        <select class="select-single js-states" title="Select Product Category"
                                            data-live-search="true">
                                            <option>Harga</option>
                                            <option>Tarif</option>
                                        </select>

                                    </div>
                                    <label for="nama">Nama Kuantitas</label>
                                    <div class="field-wrapper m-0" style="display: flex; flex-direction: row;">
                                        <select class="select-single js-states" title="Select Product Category"
                                            onchange="showInputField(this)">
                                            <option>Kuantitas</option>
                                            <option>Khusus</option>
                                        </select>
                                        <div id="customInput" style="display: none; margin-left: 10px;">
                                            <input type="text" class="" placeholder="Masukan">
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

    <!-- App Footer start -->
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

    <!-- Bootstrap Select JS -->
    <script src="{{ asset('Gmbslagi/vendor/bs-select/bs-select.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/bs-select/bs-select-custom.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dynamicrows/dist/dynamicrows.min.js"></script>

    <script src="{{ asset('Gmbslagi/vendor/dropzone/dropzone.min.js') }}"></script>
    <script>
        // Inisialisasi Dropzone
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#demo-upload", {
            maxFiles: 1, // Hanya boleh mengupload satu file
            init: function() {
                this.on("addedfile", function(file) {
                    // Menghapus file sebelumnya saat ada file baru yang diupload
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            }
        });
    </script>
    <!-- Date Range JS -->
    <script src="{{ asset('Gmbslagi/vendor/daterange/daterange.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/daterange/custom-daterange.js') }}"></script>
    <script>
        var toggleSwitch = document.querySelector('.toggle-switch');
        toggleSwitch.addEventListener('click', function() {
            toggleSwitch.classList.toggle('checked');
            var toggleTextYes = document.querySelector('.toggle-text-yes');
            var toggleTextNo = document.querySelector('.toggle-text-no');
            if (toggleSwitch.classList.contains('checked')) {
                toggleTextYes.style.color = 'green';
                toggleTextNo.style.color = 'black';
            } else {
                toggleTextYes.style.color = 'black';
                toggleTextNo.style.color = 'red';
            }
        });
    </script>
    <script>
        $('.wrapper').on('click', '.add-cat', function() {
            $('<div class="row cat"><div class="col s12"><select id="ex-dropdown-input-1" autocomplete="off" placeholder="How cool is this?" type="number" class="cat-title" contenteditable style="color: grey; width: 60%"><option>PPH(12%)</option><option selected>PPN(20%)</option></select><div class="cat-actions"><button class="btn cat-save"><p class="material-icons"><i class="icon-done"></i></p></button><button class="btn cat-delete"><p class="material-icons"><i class="icon-trash-2"></i></p></button></div><div class="row"></div></div></div>')
                .appendTo('.wrapper');

            $('.cat:last-child').find('.cat-title').focus();

        });

        $('.wrapper').on('click', '.cat-save', function() {
            $(this).parent().prev().removeAttr('contenteditable');
            $(this).parent().html(
                '<button class="btn cat-edit"><i class="material-icons"><i class="icon-settings1"></i></i></button>'
            );
        });

        $('.wrapper').on('click', '.cat-delete', function() {
            $(this).parents('.cat').remove();
        });

        $('.wrapper').on('click', '.cat-edit', function() {
            $(this).parent().prev().attr('contenteditable', 'true').focus();
            $(this).parent().html(
                '<button class="btn cat-save"><i class="material-icons"><i class="icon-done"></i></i></button><button class="btn cat-delete"><i class="material-icons"><i class="icon-trash-2"></i></i></button>'
            );
        });

        $('.wrapper').on('click', '.add-link', function() {
            $('<div class="row"><div class="input-field col s3"><input id="name1" type="text"><label class="active" for="name1">Name 1</label></div><div class="input-field col offset-s1 s6"><input id="url1" type="text"><label class="active" for="url1">URL 1</label></div><div class="input-field col offset-s1 s1"><input id="keyb1" type="text"><label class="active" for="keyb1">Shortcut 1</label></div></div>')
                .prependTo($(this).parent());
        });
    </script>
    <script>
        new TomSelect('#ex-dropdown-input-1', {
            plugins: ['dropdown_input'],
        });
    </script>
    <script>
        new TomSelect('#ex-dropdown-input', {
            plugins: ['dropdown_input'],
        });
    </script>
    <script>
        new TomSelect('#select-code-language', {
            sortField: 'text',
            hideSelected: false,
            plugins: {
                'dropdown_header': {
                    title: '<button id="btn-add-row" style="border:none; background: transparent"><i class="icon-add"></i> Tambah Item</button>'
                }
            }
        });
    </script>
    <script>
        $('#drop').click(function() {
            $('#drop-items').remove()
            $('#drop-description').remove()
            $('#drop-quantity').remove()
            $('#drop-price').remove()
            $('#drop-amount').remove()
            $('#drop-delete').remove()
        })
    </script>
    <script>
        new TomSelect('#dropdown2', {
            sortField: 'text',
            hideSelected: false,
            plugins: {
                'dropdown_header': {
                    title: 'Language'
                }
            }
        });
    </script>


    <script>
        document.getElementById('add-row').addEventListener('click', function() {
            var tableBody = document.getElementById('table-body');
            var newRow = document.createElement('tr');
            newRow.innerHTML = `
    <td>
        <div class="field-wrapper m-0">
          <select name="item[]" style="border-radius:2px" class="form-control">
            <option value="txt">Text</option>
            <option value="md">Markdown</option>
            <option value="html">HTML</option>
            <option value="php">PHP</option>
            <option value="python">Python</option>
            <option value="java">Java</option>
            <option value="js" selected>JavaScript</option>
            <option value="ruby">Ruby</option>
            <option value="vhdl">VHDL</option>
            <option value="verilog">Verilog</option>
            <option value="csharp">C#</option>
          </select>
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="text" name="deskripsi[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="number" name="kuantitas[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="number" name="harga[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="number" name="jumlah[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div id="pajak-wrapper">
          <div class="field-wrapper mb-1 pajak-input-wrapper">
            <input type="number" name="pajak[]" style="border-radius:2px" class="form-control">
          </div>
          <div class="add-pajak-wrapper mb-1">
            <button class="btn btn-light add-pajak">
              <i class="icon-plus"></i> Tambah Pajak
            </button>
          </div>
        </div>
      </td>
      <td>
        <div class="table-actions">
          <button class="btn btn-light delete-row">
            <i class="icon-trash-2"></i>
          </button>
        </div>
      </td>
    `;
            tableBody.appendChild(newRow);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-row')) {
                var row = e.target.closest('tr');
                row.parentNode.removeChild(row);
            }

            if (e.target.classList.contains('add-pajak')) {
                var pajakWrapper = e.target.closest('#pajak-wrapper');
                var pajakInputWrapper = pajakWrapper.querySelector('.pajak-input-wrapper');
                var newPajakInputWrapper = pajakInputWrapper.cloneNode(true);
                newPajakInputWrapper.querySelector('.pajak-input').value = '';

                var addPajakWrapper = pajakWrapper.querySelector('.add-pajak-wrapper');
                addPajakWrapper.parentNode.insertBefore(newPajakInputWrapper, addPajakWrapper);
            }
        });

        function calculateTotal() {
            var jumlahInputs = document.querySelectorAll('input[name="jumlah[]"]');
            var subtotal = 0;

            jumlahInputs.forEach(function(input) {
                subtotal += parseFloat(input.value) || 0;
            });

            var diskonInput = document.getElementById('diskon-input');
            var diskon = parseFloat(diskonInput.value) || 0;
            var totalPajakInputs = document.querySelectorAll('input[name="pajak[]"]');
            var totalPajak = 0;

            totalPajakInputs.forEach(function(input) {
                totalPajak += parseFloat(input.value) || 0;
            });

            var total = subtotal + totalPajak - diskon;

            document.getElementById('subtotal').textContent = 'Rp.' + subtotal.toFixed(2);
            document.getElementById('diskon').textContent = 'Rp.' + diskon.toFixed(2);
            document.getElementById('total-pajak').textContent = 'Rp.' + totalPajak.toFixed(2);
            document.getElementById('total').textContent = 'Rp.' + total.toFixed(2);
        }

        var inputs = document.querySelectorAll('input[name="jumlah[]"], input[name="pajak[]"], #diskon-input');
        inputs.forEach(function(input) {
            input.addEventListener('input', calculateTotal);
        });
    </script>
    <script>
        // Fungsi untuk menghapus pajak yang baru ditambahkan
        function deletePajak(event) {
            var pajakInputWrapper = event.target.closest('.pajak-input-wrapper');
            pajakInputWrapper.remove();
        }

        // Event listener untuk tombol hapus pajak
        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('delete-pajak')) {
                deletePajak(event);
            }
        });

        // Event listener untuk tombol tambah pajak
        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('add-pajak')) {
                var pajakWrapper = event.target.closest('#pajak-wrapper');
                var pajakInputWrapper = pajakWrapper.querySelector('.pajak-input-wrapper');

                var newPajakInputWrapper = pajakInputWrapper.cloneNode(true);
                var deletePajakButton = document.createElement('button');
                deletePajakButton.classList.add('btn', 'btn-light', 'delete-pajak');
                deletePajakButton.innerHTML = '<i class="icon-trash-2"></i> Hapus Pajak';
                deletePajakButton.style.width = event.target.offsetWidth +
                    'px'; // Menyesuaikan lebar tombol dengan tombol "Tambah Pajak"
                deletePajakButton.style.marginTop = '3%'; // Menambahkan margin-top 3%
                newPajakInputWrapper.appendChild(deletePajakButton);

                pajakWrapper.appendChild(newPajakInputWrapper);
            }
        });
    </script>
    <script>
        function showInputField(selectElement) {
            var inputField = document.getElementById("customInput");

            if (selectElement.value === "Khusus") {
                inputField.style.display = "block";
            } else {
                inputField.style.display = "none";
            }
        }
    </script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

</html>
