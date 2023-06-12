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

                                        <form action="/update_supplier/{{$data->id}}" method="POST" enctype="multipart/form-data">
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
                                                        <input class="form-control" type="text" placeholder="Masukan Nama" name="name" id="name" value="{{$data->name}}">
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
                                                        <input class="form-control" type="email" placeholder="Masukan Email" name="email" id="email" value="{{$data->email}}">
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
                                                        <input class="form-control" type="text" placeholder="Masukan Situs Web" name="website" id="website" value="{{$data->website}}">
                                                        <div class="field-placeholder">Situs Web</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="text" placeholder="Masukan Refrensi" name="reference" id="reference" value="{{$data->reference}}">
                                                        <div class="field-placeholder">Refrensi</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="number" placeholder="Masukan Nomor Telepon" name="phone_number" id="phone_number" value="{{$data->phone_number}}">
                                                        <div class="field-placeholder">Telepon</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="file" name="photo" id="photo" value="photo">
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
                                                        <input class="form-control" type="number" placeholder="Masukan NPWP" name="npwp" id="npwp" value="{{$data->npwp}}">
                                                        <div class="field-placeholder">NPWP</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <select class="select-multiple js-states" title="Select Product Category" data-live-search="true" name="currency" id="currency">
                                                            <option value="Rupiah Indonesia (IDR)" <?php echo ($data['currency'] == 'Rupiah Indonesia (IDR)') ? 'selected="selected"' : '' ?>>Rupiah Indonesia (IDR)</option>
                                                            <option value="Dolar Amerika Serikat (USD)" <?php echo ($data['currency'] == 'Dolar Amerika Serikat (USD)') ? 'selected="selected"' : '' ?>>Dolar Amerika Serikat (USD)</option>
                                                        </select>
                                                        <div class="field-placeholder">Mata Uang</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <textarea class="form-control" rows="2" placeholder="Masukan Alamat" name="address" id="address" >{{$data->address}}</textarea>
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
                                                        <input class="form-control" type="text" placeholder="Masukan Kota" name="city" id="city" value="{{$data->city}}">
                                                        <div class="field-placeholder">Kota</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="number" placeholder="Masukan Kode Pos" name="postal_code" id="postal_code" value="{{$data->postal_code}}">
                                                        <div class="field-placeholder">Kode Pos</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <input class="form-control" type="text" placeholder="Masukan Provinsi" name="province" id="province" value="{{$data->province}}">
                                                        <div class="field-placeholder">Provinsi</div>
                                                    </div>
                                                    <!-- Field wrapper end -->

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                    <!-- Field wrapper start -->
                                                    <div class="field-wrapper">
                                                        <select class="select-multiple js-states" title="Select Product Category" data-live-search="true" name="country" id="country">
                                                            <option value="Afganistan" <?php echo ($data['currency'] == 'Afganistan') ? 'selected="selected"' : '' ?>>Afganistan</option>
                                                            <option value="Afrika Selatan" <?php echo ($data['currency'] == 'Afrika Selatan') ? 'selected="selected"' : '' ?>>Afrika Selatan</option>
                                                            <option value="Albania" <?php echo ($data['currency'] == 'Albania') ? 'selected="selected"' : '' ?>>Albania</option>
                                                            <option value="Aljazair" <?php echo ($data['currency'] == 'Aljazair') ? 'selected="selected"' : '' ?>>Aljazair</option>
                                                            <option value="Amerika Serikat" <?php echo ($data['currency'] == 'Amerika Serikat') ? 'selected="selected"' : '' ?>>Amerika Serikat</option>
                                                            <option value="Andorra" <?php echo ($data['currency'] == 'Andorra') ? 'selected="selected"' : '' ?>>Andorra</option>
                                                            <option value="Angola" <?php echo ($data['currency'] == 'Angola') ? 'selected="selected"' : '' ?>>Angola</option>
                                                            <option value="Antigua dan Barbuda" <?php echo ($data['currency'] == 'Antigua dan Barbuda') ? 'selected="selected"' : '' ?>>Antigua dan Barbuda</option>
                                                            <option value="Arab Saudi" <?php echo ($data['currency'] == 'Arab Saudi') ? 'selected="selected"' : '' ?>>Arab Saudi</option>
                                                            <option value="Argentina" <?php echo ($data['currency'] == 'Argentina') ? 'selected="selected"' : '' ?>>Argentina</option>
                                                            <option value="Armenia" <?php echo ($data['currency'] == 'Armenia') ? 'selected="selected"' : '' ?>>Armenia</option>
                                                            <option value="Australia" <?php echo ($data['currency'] == 'Australia') ? 'selected="selected"' : '' ?>>Australia</option>
                                                            <option value="Austria" <?php echo ($data['currency'] == 'Austria') ? 'selected="selected"' : '' ?>>Austria</option>
                                                            <option value="Azerbaijan" <?php echo ($data['currency'] == 'Azerbaijan') ? 'selected="selected"' : '' ?>>Azerbaijan</option>
                                                            <option value="Bahama" <?php echo ($data['currency'] == 'Bahama') ? 'selected="selected"' : '' ?>>Bahama</option>
                                                            <option value="Bahrain" <?php echo ($data['currency'] == 'Bahrain') ? 'selected="selected"' : '' ?>>Bahrain</option>
                                                            <option value="Bangladesh" <?php echo ($data['currency'] == 'Bangladesh') ? 'selected="selected"' : '' ?>>Bangladesh</option>
                                                            <option value="Barbados" <?php echo ($data['currency'] == 'Barbados') ? 'selected="selected"' : '' ?>>Barbados</option>
                                                            <option value="Belarus" <?php echo ($data['currency'] == 'Belarus') ? 'selected="selected"' : '' ?>>Belarus</option>
                                                            <option value="Belgia" <?php echo ($data['currency'] == 'Belgia') ? 'selected="selected"' : '' ?>>Belgia</option>
                                                            <option value="Belize" <?php echo ($data['currency'] == 'Belize') ? 'selected="selected"' : '' ?>>Belize</option>
                                                            <option value="Benin" <?php echo ($data['currency'] == 'Benin') ? 'selected="selected"' : '' ?>>Benin</option>
                                                            <option value="Bhutan" <?php echo ($data['currency'] == 'Bhutan') ? 'selected="selected"' : '' ?>>Bhutan</option>
                                                            <option value="Bolivia" <?php echo ($data['currency'] == 'Bolivia') ? 'selected="selected"' : '' ?>>Bolivia</option>
                                                            <option value="Bosnia dan Herzegovina" <?php echo ($data['currency'] == 'Bosnia dan Herzegovina') ? 'selected="selected"' : '' ?>>Bosnia dan Herzegovina</option>
                                                            <option value="Botswana" <?php echo ($data['currency'] == 'Botswana') ? 'selected="selected"' : '' ?>>Botswana</option>
                                                            <option value="Brasil" <?php echo ($data['currency'] == 'Brasil') ? 'selected="selected"' : '' ?>>Brasil</option>
                                                            <option value="Brunei" <?php echo ($data['currency'] == 'Brunei') ? 'selected="selected"' : '' ?>>Brunei</option>
                                                            <option value="Bulgaria" <?php echo ($data['currency'] == 'Bulgaria') ? 'selected="selected"' : '' ?>>Bulgaria</option>
                                                            <option value="Burkina Faso" <?php echo ($data['currency'] == 'Burkina Faso') ? 'selected="selected"' : '' ?>>Burkina Faso</option>
                                                            <option value="Burundi" <?php echo ($data['currency'] == 'Burundi') ? 'selected="selected"' : '' ?>>Burundi</option>
                                                            <option value="Ceko" <?php echo ($data['currency'] == 'Ceko') ? 'selected="selected"' : '' ?>>Ceko</option>
                                                            <option value="Chad" <?php echo ($data['currency'] == 'Chad') ? 'selected="selected"' : '' ?>>Chad</option>
                                                            <option value="Chili" <?php echo ($data['currency'] == 'Chili') ? 'selected="selected"' : '' ?>>Chili</option>
                                                            <option value="China" <?php echo ($data['currency'] == 'China') ? 'selected="selected"' : '' ?>>China</option>
                                                            <option value="Denmark" <?php echo ($data['currency'] == 'Denmark') ? 'selected="selected"' : '' ?>>Denmark</option>
                                                            <option value="Djibouti" <?php echo ($data['currency'] == 'Djibouti') ? 'selected="selected"' : '' ?>>Djibouti</option>
                                                            <option value="Dominika" <?php echo ($data['currency'] == 'Dominika') ? 'selected="selected"' : '' ?>>Dominika</option>
                                                            <option value="Ekuador" <?php echo ($data['currency'] == 'Ekuador') ? 'selected="selected"' : '' ?>>Ekuador</option>
                                                            <option value="El Salvador" <?php echo ($data['currency'] == 'El Salvador') ? 'selected="selected"' : '' ?>>El Salvador</option>
                                                            <option value="Eritrea" <?php echo ($data['currency'] == 'Eritrea') ? 'selected="selected"' : '' ?>>Eritrea</option>
                                                            <option value="Estonia" <?php echo ($data['currency'] == 'Estonia') ? 'selected="selected"' : '' ?>>Estonia</option>
                                                            <option value="Ethiopia" <?php echo ($data['currency'] == 'Ethiopia') ? 'selected="selected"' : '' ?>>Ethiopia</option>
                                                            <option value="Fiji" <?php echo ($data['currency'] == 'Fiji') ? 'selected="selected"' : '' ?>>Fiji</option>
                                                            <option value="Filipina" <?php echo ($data['currency'] == 'Filipina') ? 'selected="selected"' : '' ?>>Filipina</option>
                                                            <option value="Finlandia" <?php echo ($data['currency'] == 'Finlandia') ? 'selected="selected"' : '' ?>>Finlandia</option>
                                                            <option value="Gabon" <?php echo ($data['currency'] == 'Gabon') ? 'selected="selected"' : '' ?>>Gabon</option>
                                                            <option value="Gambia" <?php echo ($data['currency'] == 'Gambia') ? 'selected="selected"' : '' ?>>Gambia</option>
                                                            <option value="Georgia" <?php echo ($data['currency'] == 'Georgia') ? 'selected="selected"' : '' ?>>Georgia</option>
                                                            <option value="Ghana" <?php echo ($data['currency'] == 'Ghana') ? 'selected="selected"' : '' ?>>Ghana</option>
                                                            <option value="Gibraltar" <?php echo ($data['currency'] == 'Gibraltar') ? 'selected="selected"' : '' ?>>Gibraltar</option>
                                                            <option value="Greenland" <?php echo ($data['currency'] == 'Greenland') ? 'selected="selected"' : '' ?>>Greenland</option>
                                                            <option value="Grenada" <?php echo ($data['currency'] == 'Grenada') ? 'selected="selected"' : '' ?>>Grenada</option>
                                                            <option value="Guatemala" <?php echo ($data['currency'] == 'Guatemala') ? 'selected="selected"' : '' ?>>Guatemala</option>
                                                            <option value="Guinea" <?php echo ($data['currency'] == 'Guinea') ? 'selected="selected"' : '' ?>>Guinea</option>
                                                            <option value="Guyana" <?php echo ($data['currency'] == 'Guyana') ? 'selected="selected"' : '' ?>>Guyana</option>
                                                            <option value="Haiti" <?php echo ($data['currency'] == 'Haiti') ? 'selected="selected"' : '' ?>>Haiti</option>
                                                            <option value="Honduras" <?php echo ($data['currency'] == 'Honduras') ? 'selected="selected"' : '' ?>>Honduras</option>
                                                            <option value="Hongaria" <?php echo ($data['currency'] == 'Hongaria') ? 'selected="selected"' : '' ?>>Hongaria</option>
                                                            <option value="Hong Kong" <?php echo ($data['currency'] == 'Hong Kong') ? 'selected="selected"' : '' ?>>Hong Kong</option>
                                                            <option value="India" <?php echo ($data['currency'] == 'India') ? 'selected="selected"' : '' ?>>India</option>
                                                            <option value="Indonesia" <?php echo ($data['currency'] == 'Indonesia') ? 'selected="selected"' : '' ?>>Indonesia</option>
                                                            <option value="Irak" <?php echo ($data['currency'] == 'Irak') ? 'selected="selected"' : '' ?>>Irak</option>
                                                            <option value="Iran" <?php echo ($data['currency'] == 'Iran') ? 'selected="selected"' : '' ?>>Iran</option>
                                                            <option value="Irlandia" <?php echo ($data['currency'] == 'Irlandia') ? 'selected="selected"' : '' ?>>Irlandia</option>
                                                            <option value="Islandia" <?php echo ($data['currency'] == 'Islandia') ? 'selected="selected"' : '' ?>>Islandia</option>
                                                            <option value="Israel" <?php echo ($data['currency'] == 'Israel') ? 'selected="selected"' : '' ?>>Israel</option>
                                                            <option value="Italia" <?php echo ($data['currency'] == 'Italia') ? 'selected="selected"' : '' ?>>Italia</option>
                                                            <option value="Jamaika" <?php echo ($data['currency'] == 'Jamaika') ? 'selected="selected"' : '' ?>>Jamaika</option>
                                                            <option value="Jepang" <?php echo ($data['currency'] == 'Jepang') ? 'selected="selected"' : '' ?>>Jepang</option>
                                                            <option value="Yordania" <?php echo ($data['currency'] == 'Yordania') ? 'selected="selected"' : '' ?>>Yordania</option>
                                                            <option value="Yunani" <?php echo ($data['currency'] == 'Yunani') ? 'selected="selected"' : '' ?>>Yunani</option>
                                                            <option value="Zambia" <?php echo ($data['currency'] == 'Zambia') ? 'selected="selected"' : '' ?>>Zambia</option>
                                                            <option value="Zimbabwe" <?php echo ($data['currency'] == 'Zimbabwe') ? 'selected="selected"' : '' ?>>Zimbabwe</option>
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
