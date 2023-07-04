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
    <title>Unknown | Tambah-Pemasok</title>


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
    <link rel="stylesheet" href="{{ asset ('Gmbslagi/vendor/bs-select/bs-select.css')}}">

</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        @include('layouts.sidebar')
        @include('layouts.header')
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Card start -->
                                <div class="" style="">
                                    <div class="row">
                                        <div class="card-title">
                                            <h3>Tambah Pemasok<button type="button" style="border: none; background:none;">☆</button></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <!-- Row start -->

                                        <form action="/insert_supplier" method="POST"  enctype="multipart/form-data">
                                            @csrf
                                        <div class="row gutters">

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                <div style="border-bottom: solid grey 1px; margin-bottom: 2%; margin-top: 2%;">
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
                                                    <input class="form-control" type="text" placeholder="Masukan Nama" name="name" id="name" required>
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
                                                    <input class="form-control" type="email" placeholder="Masukan Email" name="email" id="email" required>
                                                    <div class="field-placeholder">Email <span class="text-danger">*</span></div>
                                                    <div class="form-text">
                                                        Kami tidak akan pernah membagikan email Anda kepada siapa pun.
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" type="text" placeholder="Masukan Situs Web" name="website" id="website" required>
                                                    <div class="field-placeholder">Situs Web</div>
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
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" type="number" placeholder="Masukan Nomor Telepon" name="phone_number" id="phone_number" required>
                                                    <div class="field-placeholder">Telepon</div>
                                                </div>
                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="file" name="photo" id="photo" required>
													<div class="field-placeholder">Gambar</div>
												</div>
												<!-- Field wrapper end -->

											</div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                                <div style="border-bottom: solid grey 1px; margin-bottom: 2%; margin-top: 1%;">
                                                    <h6>Penagihan</h6>
                                                    <p>Nomor pajak muncul di setiap tagihan yang diterbitkan untuk Anda.
                                                        Mata uang yang dipilih menjadi mata uang bawaan untuk penyedia ini.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" type="number" placeholder="Masukan NPWP" name="npwp" id="npwp" required>
                                                    <div class="field-placeholder">NPWP</div>
                                                </div>
                                                <!-- Field wrapper end -->

                                                <input type="hidden" name="company_id" value="{{ Auth::user()->company_id }}">

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <select class="select-multiple js-states" title="Select Product Category" data-live-search="true" name="currency" id="currency" required>
                                                        <option value="Rupiah Indonesia (IDR)">Rupiah Indonesia (IDR)</option>
                                                        <option value="Dolar Amerika Serikat (USD)">Dolar Amerika Serikat (USD)</option>
                                                    </select>
                                                    <div class="field-placeholder">Mata Uang</div>
                                                </div>
                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <textarea class="form-control" rows="2" placeholder="Masukan Alamat" name="address" id="address" required></textarea>
                                                    <div class="field-placeholder">Alamat <span class="text-danger">*</span></div>
                                                    <div class="form-text">
                                                        Silakan masukkan Alamat lengkap Anda.
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" type="text" placeholder="Masukan Kota" name="city" id="city" required>
                                                    <div class="field-placeholder">Kota</div>
                                                </div>
                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" type="number" placeholder="Masukan Kode Pos" name="postal_code" id="postal_code" required>
                                                    <div class="field-placeholder">Kode Pos</div>
                                                </div>
                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <input class="form-control" type="text" placeholder="Masukan Provinsi" name="province" id="provice" required>
                                                    <div class="field-placeholder">Provinsi</div>
                                                </div>
                                                <!-- Field wrapper end -->

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <select class="select-multiple js-states" title="Select Product Category" data-live-search="true" name="country" id="country" required >
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
                                                    <div class="field-placeholder">Negara</div>
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
                                    </form>
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

    <script src="{{ asset ('Gmbslagi/vendor/bs-select/bs-select.min.js')}}"></script>
    <script src="{{ asset ('Gmbslagi/vendor/bs-select/bs-select-custom.js')}}"></script>
    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>
