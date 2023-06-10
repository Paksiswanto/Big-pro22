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
    <title>Unknown | Edit-Pelanggan</title>


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
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            <div class="card" style="overflow: hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Tambah Pelanggan<button type="button"
                                                style="border: none; background:none;">☆</button></h3>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- Row start -->
                                    <div class="row gutters">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                            style="margin-bottom: 1%;">

                                            <div style="border-bottom: solid grey 1px;margin-bottom:1%">
                                                <h6>Umum</h6>
                                                <p>Informasi kontak klien Anda akan muncul di faktur dan profil mereka.
                                                    Anda juga dapat mengizinkan klien Anda untuk masuk untuk melacak
                                                    faktur yang Anda kirimkan kepada mereka dengan mencentang kotak di
                                                    bawah.</p>
                                            </div>

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukan Nama">
                                                <div class="field-placeholder">Nama <span class="text-danger">*</span>
                                                </div>
                                                <div class="form-text">
                                                    Silakan masukkan nama lengkap Anda.
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="email"
                                                    placeholder="Masukan Email">
                                                <div class="field-placeholder">Email <span
                                                        class="text-danger">*</span></div>
                                                <div class="form-text">
                                                    Kami tidak akan pernah membagikan email Anda kepada siapa pun.
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukan Situs Web">
                                                <div class="field-placeholder">Situs Web</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukan Refrensi">
                                                <div class="field-placeholder">Refrensi</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="number"
                                                    placeholder="Masukan Nomor Telepon">
                                                <div class="field-placeholder">Telepon</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                            style="margin-bottom: 1%;">

                                            <div style="border-bottom: solid grey 1px;margin-bottom:1%">
                                                <h6>Penagihan</h6>
                                                <p>Nomor pajak muncul di setiap tagihan yang diterbitkan untuk Anda.
                                                    Mata uang yang dipilih menjadi mata uang bawaan untuk penyedia ini.
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="number"
                                                    placeholder="Masukan NPWP">
                                                <div class="field-placeholder">NPWP</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <select class="select-single js-states"
                                                    title="Select Product Category" data-live-search="true">
                                                    <option>Rupiah Indonesia (IDR)</option>
                                                    <option>Dolar Amerika Serikat (USD)</option>
                                                    <option>Euro (EUR)</option>
                                                    <option>Yen Jepang (JPY)</option>
                                                    <option>Pound Inggris (GBP)</option>
                                                    <option>Dolar Australia (AUD)</option>
                                                    <option>Dolar Kanada (CAD)</option>
                                                    <option>Franc Swiss (CHF)</option>
                                                    <option>Dolar Hong Kong (HKD)</option>
                                                    <option>Won Korea Selatan (KRW)</option>
                                                    <option>Yuan Tiongkok (CNY)</option>
                                                    <option>Rupee India (INR)</option>
                                                    <option>Rubel Rusia (RUB)</option>
                                                    <option>Real Brasil (BRL)</option>
                                                    <option>Peso Meksiko (MXN)</option>
                                                    <option>Rand Afrika Selatan (ZAR)</option>
                                                </select>
                                                <div class="field-placeholder">Mata Uang</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <textarea class="form-control" rows="2" placeholder="Masukan Alamat"></textarea>
                                                <div class="field-placeholder">Alamat <span
                                                        class="text-danger">*</span></div>
                                                <div class="form-text">
                                                    Silakan masukkan Alamat lengkap Anda.
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukan Kota">
                                                <div class="field-placeholder">Kota</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="number"
                                                    placeholder="Masukan Kode Pos">
                                                <div class="field-placeholder">Kode Pos</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukan Provinsi">
                                                <div class="field-placeholder">Provinsi</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukan Negara">
                                                <div class="field-placeholder">Negara</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="d-flex justify-content-end mt-4">
                                                <button class="btn btn-outline-primary1" type="submit" style="border-radius: 20px; margin-right: 1%" href="#">Batal</button>
                                                <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->

                                </div>
                            </div>
                            <!-- Card end -->

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

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>
