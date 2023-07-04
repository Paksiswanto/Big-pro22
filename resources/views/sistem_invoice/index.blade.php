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
    <title>Unknown | Sistem-faktur</title>


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

    <!-- Dropdown Search -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/daterange/daterange.css")}}">
    <style>
        .card {
            overflow: hidden;
        }

        .half-width-container {
            display: flex;
            width: 50%;
            justify-content: space-between;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            margin-bottom: 2%;
        }

        .label {
            width: 50%;
            text-align: center;
            padding: 10px;
            border: 1px solid #D9D9D9;
            cursor: pointer;
            border-radius: 10px;
        }

        input[type="radio"]:checked+.label {
            background-color: #038BBD;
            color: #fff;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .label {
            margin-right: 20px;
        }

        .toggle-checkbox {
            display: none;
        }

        .toggle-label {
            display: inline-block;
            width: 50px;
            height: 30px;
            background-color: #CCCCCC;
            /* Warna abu-abu saat indikator tidak aktif */
            border-radius: 15px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .toggle-label:before {
            content: "";
            position: absolute;
            top: 1px;
            right: 1px;
            bottom: 1px;
            width: 24px;
            background-color: #FFFFFF;
            /* Warna biru saat indikator aktif */
            border-radius: 50%;
            transition: right 0.3s ease;
        }

        .toggle-checkbox:checked+.toggle-label {
            background-color: #336699;
            /* Warna biru saat toggle button aktif */
        }

        .toggle-checkbox:checked+.toggle-label:before {
            right: calc(100% - 25px);
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



            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            <div class="">
                                <div class="">
                                    <div class="col-xl-5 col-lg-5 col-md-2 col-sm-2 col-12">
                                        <div class="card-title">
                                            <h3>Faktur<button type="button" style="border: none; background:none;">☆</button></h3>
                                        </div>
                                        <div class="graph-day-selection" role="group" style="margin-left: 60%">

                                        </div>
                                    </div>


                                </div>
                                <div class="">
                                    <div style="border-bottom: solid grey 1px;margin-bottom:1%;  margin-bottom: 2%; margin-top: 2%;">
                                        <h6>Umum</h6>
                                        <p>Tetapkan default untuk memformat nomor faktur dan persyaratan pembayaran Anda.
                                        </p>
                                    </div>
                                    <!-- Row start -->
                                    <form action="{{route('create_settingInvoice')}}" method="post">
                                        @csrf
                                        @if($data == null)
                                        <div class="row gutters">

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" name="prefix"
                                                    
                                                    value="FKR"
                                                    
                                                  type="text"  placeholder=" Masukan Prefiks Nomor">
                                                    <div class="field-placeholder">Prefiks Nomor</div>
                                                    <div class="form-text">
    
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <!-- Field wrapper end -->
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <input type="hidden" name="company_id" value="{{ Auth::user()->company_id }}">
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper-group">
                                                    <div class="field-wrapper">
                                                        <select class="select-multiple js-states" name="due_date" title="Select Product Category">
                                                            <option disabled selected>Syarat Pembayaran</option>
                                                            <option value="15_hari">Jatuh tempo dalam 15 hari</option>
                                                            <option value="30_hari">Jatuh tempo dalam 30 hari</option>
                                                            <option value="45_hari">Jatuh tempo dalam 45 hari</option>
                                                            <option value="60_hari">Jatuh tempo dalam 60 hari</option>
                                                            <option value="75_hari">Jatuh tempo dalam 75 hari</option>
                                                            <option value="90_hari">Jatuh tempo dalam 90 hari</option>
                                                            <option value="saatIni">Jatuh tempo saat diterima</option>
    
                                                        </select>
                                                        <div class="field-placeholder">Syarat Pembayaran</div>
                                                    </div>
    
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div style="border-bottom: solid grey 1px;margin-bottom:1%;  margin-bottom: 2%; margin-top: 1%;">
                                                    <h6>Default</h6>
                                                    <p>Memilih opsi bawaan untuk faktur akan mengisi judul, subjudul, catatan, dan footer terlebih dahulu. Anda tidak perlu mengedit faktur setiap saat agar terlihat lebih profesional.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->
    
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control"  name="title" type="text" placeholder="Masukan Judul">
                                                    <div class="field-placeholder">Judul</div>
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control"  name="subtitle" type="text" placeholder="Masukan SubJudul">
                                                    <div class="field-placeholder">Subjudul</div>
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <textarea class="form-control"  name="notes" rows="2" placeholder="Masukan Catatan"></textarea>
                                                    <div class="field-placeholder">Catatan</div>
    
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <textarea class="form-control"  name="footer" rows="2" placeholder="Masukan Footer"></textarea>
                                                    <div class="field-placeholder">Footer</div>
    
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                                <div class="d-flex justify-content-end mt-4">
                                                    <button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
                                                    <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                                                </div>
                                            </div>
                                        </div>

                                        @else
                                        <div class="row gutters">

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" name="prefix"
                                                    
                                                    value="{{ $data->prefix }}"
                                                    
                                                  type="text"  placeholder=" Masukan Prefiks Nomor">
                                                    <div class="field-placeholder">Prefiks Nomor</div>
                                                    <div class="form-text">
    
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <!-- Field wrapper end -->
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <input type="hidden" name="company_id" value="{{ Auth::user()->company_id }}">
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper-group">
                                                    <div class="field-wrapper">
                                                        <select class="select-multiple js-states" name="due_date" title="Select Product Category">
                                                            <option disabled selected>Syarat Pembayaran</option>
                                                            <option value="15_hari">Jatuh tempo dalam 15 hari</option>
                                                            <option value="30_hari">Jatuh tempo dalam 30 hari</option>
                                                            <option value="45_hari">Jatuh tempo dalam 45 hari</option>
                                                            <option value="60_hari">Jatuh tempo dalam 60 hari</option>
                                                            <option value="75_hari">Jatuh tempo dalam 75 hari</option>
                                                            <option value="90_hari">Jatuh tempo dalam 90 hari</option>
                                                            <option value="saatIni">Jatuh tempo saat diterima</option>
    
                                                        </select>
                                                        <div class="field-placeholder">Syarat Pembayaran</div>
                                                    </div>
    
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div style="border-bottom: solid grey 1px;margin-bottom:1%;  margin-bottom: 2%; margin-top: 1%;">
                                                    <h6>Default</h6>
                                                    <p>Memilih opsi bawaan untuk faktur akan mengisi judul, subjudul, catatan, dan footer terlebih dahulu. Anda tidak perlu mengedit faktur setiap saat agar terlihat lebih profesional.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->
    
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" value="{{  $data->title  }}" name="title" type="text" placeholder="Masukan Judul">
                                                    <div class="field-placeholder">Judul</div>
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" value="{{ $data->subtitle }}" name="subtitle" type="text" placeholder="Masukan SubJudul">
                                                    <div class="field-placeholder">Subjudul</div>
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <textarea class="form-control" value="{{ $data->notes }}" name="notes" rows="2" placeholder="Masukan Catatan"></textarea>
                                                    <div class="field-placeholder">Catatan</div>
    
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
    
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <textarea class="form-control" value="{{ $data->footer }}" name="footer" rows="2" placeholder="Masukan Footer"></textarea>
                                                    <div class="field-placeholder">Footer</div>
    
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                                <div class="d-flex justify-content-end mt-4">
                                                    <button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
                                                    <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </form>
                                    

                                    <!-- Field wrapper end -->

                                </div>

                            </div>
                            <!-- Row end -->

                        </div>
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

    <!-- Dropdown Search -->
    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select-custom.js")}}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <script>
        function toggleInputsDisable(checkboxNumber) {
            var inputField1 = document.getElementById("inputField1");
            var inputField2 = document.getElementById("inputField2");

            if (checkboxNumber === 1) {
                inputField1.disabled = !inputField1.disabled;
            } else if (checkboxNumber === 2) {
                inputField2.disabled = !inputField2.disabled;
            }
        }
    </script>

</body>