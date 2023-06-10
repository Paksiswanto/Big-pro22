<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Tamplate Surel</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/editemail.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

    <!-- Uploader CSS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/dropzone/dropzone.min.css") }}" />

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/bs-select/bs-select.css") }}" />
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{  asset("Gmbslagi/vendor/summernote/summernote-bs4.css") }}" />

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
                                <div class="card-header-lg">
                                    <h3>Template Email</h3>
                                </div>
                                <div class="card-body">

                                    <div class="row gutters">
                                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="account-atur-kotak">
                                                <div class="atur-kotak">
                                                    <div class="atur-kotak-judul" style="font-size: 20px;">Tagihan</div>
                                                    <hr class="col-11">
                                                    <div class="atur-kotak-badan">
                                                        <div class="list-grub">
                                                            <a href="#" class="button-tagihan">Template Tagihan Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Tagihan Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Tagihan Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Tagihan Baru(dikirim ke pelanggan)</a>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="atur-kotak-judul" style="font-size: 20px;">Faktur</div>
                                                    <hr class="col-11">
                                                    <div class="atur-kotak-badan">
                                                        <div class="list-grub">
                                                            <a href="#" class="button-tagihan">Template Faktur Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Faktur Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Faktur Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Faktur Baru(dikirim ke pelanggan)</a>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="atur-kotak-judul" style="font-size: 20px;">Pembayaran</div>
                                                    <hr class="col-11">
                                                    <div class="atur-kotak-badan">
                                                        <div class="list-grub">
                                                            <a href="#" class="button-tagihan">Template Pembayaran Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Pembayaran Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Pembayaran Baru(dikirim ke pelanggan)</a>
                                                            <a href="#" class="button-tagihan">Template Pembayaran Baru(dikirim ke pelanggan)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="account-atur-kotak-kanan">
                                                <div class="atur-kotak-kanan">
                                                    <div class="atur-kotak-judul-kanan">Template Pengingat Tagihan (dikirim ke admin)</div>
                                                    <div class="atur-kotak-badan-kanan">
                                                        <div class="field-wrapper mt-4">
                                                            <input class="form-control" type="text">
                                                            <div class="field-placeholder">Name <span class="text-danger">*</span></div>
                                                        </div>
                                                        <div class="field-wrapper mt-4">
                                                            <div class="summernote"></div>
                                                            <div class="field-placeholder">WYSIWYG Editor <span class="text-danger">*</span></div>
                                                        </div>
                                                        <div class="form-actions-footer mt-4">

                                                            <p><b>Tag yang tersedia:</b>{bill_number}, {bill_total}, {bill_amount_due}, {billed_date}, {bill_due_date}, {bill_admin_link}, {vendor_name}, {company_name}, {company_email}, {company_tax_number}, {company_phone}, {company_address}</p>
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
    <script src="{{ asset("Gmbslagi/js/jquery.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/modernizr.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/moment.js") }}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/megamenu.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/custom.js") }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/slimscroll.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/custom-scrollbar.js") }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset("Gmbslagi/vendor/search-filter/search-filter.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.js") }}"></script>

    <!-- Dropzone JS -->
    <script src="{{ asset("Gmbslagi/vendor/dropzone/dropzone.min.js") }}"></script>

    <!-- Bootstrap Select JS -->
    <script src="{{ asset("Gmbslagi/vendor/bs-select/bs-select.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/bs-select/bs-select-custom.js") }}"></script>

    <!--Sumemernote JS-->
    <script src="{{ asset("Gmbslagi/vendor/summernote/summernote-bs4.js") }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>

    <script>
        // Summernote
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 210,
                tabsize: 2,
                focus: true,
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['para', ['ul', 'ol']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ]
            });
        });
    </script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>