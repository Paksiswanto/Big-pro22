<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:00:09 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Beranda</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/dashboard.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/daterange/daterange.css") }}">

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">
    <style>
        .drop-zone {
            max-width: 200px;
            /*max to make it responsive*/
            height: 150px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-items: center;
            text-align: center;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 500;
            font-size: 10px;
            cursor: pointer;
            color: lightgrey;
            border: 4px dashed black;
            border-radius: 10px;
        }

        .drop-zone--over {
            border-style: solid;
        }

        .drop-zone__input {
            display: none;
        }

        .drop-zone__thumb {
            width: 100px;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            background-color: #ccc;
            background-size: cover;
            position: relative;
        }

        .drop-zone__thumb::after {
            content: attr(data-label);
            /*  displays text of data-lable*/
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 5px 0;
            color: white;
            background: rgba(0, 0, 0, 0.75);
            text-align: center;
            font-size: 14px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper" role="status">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

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
                        <div class="">
                            <div class="card-title">
                                <div class="d-flex flex-wrap">
                                    <h1 class="card-title col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12" style="font-size: 20px;">Dashboard

                                    </h1>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">

                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="input-group">
                                                <input type="text" name="datefilter" class="form-control" style="z-index: auto" value="" />
                                                <span class="input-group-text">
                                                    <i class="icon-calendar1"></i>
                                                </span>
                                            </div>
                                            <div class="field-placeholder">Date Range Auto Apply</div>
                                        </div>
                                        <!-- Field wrapper end -->

                                    </div>

                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-bs-backdrop="static">
											<div class="modal-dialog">
                                            <form action="/add_company/add" method="POST">
											  <div class="modal-content">
												<div class="modal-header">
												  <h5 class="modal-title" id="exampleModalLongTitle">Inputkan Data Perusahaan</h5>
                                        </div>
                                        <div class="modal-body">
                                          <form action="/add_company/add" method="POST" >
                                            <div class="d-flex row ">                                      
                                                @csrf
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        
                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <label class="">Name <span class="text-danger"></span></label>
                                                            <input class="form-control" name="name" type="Text" placeholder="Masukan Nama">
                                                        </div>
                                                        <div class="field-wrapper">
                                                            <label class="">Email <span class="text-danger"></span></label>
                                                            <input class="form-control" name="email" type="email" placeholder="Masukan Email">
                                                        </div>
                                                    </div>
                                                    <div class="field-wrapper">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                        <label class="">Logo <span class="text-danger"></span></label>
                                                        <input type="file" class="form-control" name="logo">
                                                    </div>
                                                </div>
                                                    <div class="field-wrapper">
                                                        <label>Telepon</label>
                                                        <input class="form-control" name="addtelephoneress" type="text" placeholder="Masukan Nomor Telepon">
                                                        <input type="hidden" name="user_id" value="{{Auth::User()->id}}">
                                                    </div>
                                                    <!-- Field wrapper end -->
                                                    <div class="field-wrapper">
                                                        <label class="">NPWP</label>
                                                        <input class="form-control" name="npwp" type="number" placeholder="Masukan Nomor NPWP">



                                                </div>
                                        </div>
                                        <div class="modal-footer" style="text-align: center;">
                                            <button type="submit" class="btn btn-primary">Registrasi</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chart-container">
                        <h6>Arus kas</h6>
                        <p>Uang masuk dan keluar dari bisnis Anda</p>
                        <hr>
                        <div id="chart"></div>
                        <br>
                        <br>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class=" col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mb-3">
                                <h6>Laba Rugi</h6>
                                <p>Pendapatan dan pengeluaran termasuk faktur dan tagihan belum dibayar</p>
                                <hr>
                                <div id="chart2"></div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 mb-3">
                                <h6>Pengeluaran Berdasarkan Kategori</h6>
                                <p>Pengeluaran terbesar di berbagai kategori</p>
                                <hr>
                                <div id="chart3"></div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <h6>Hutang</h6>
                                <p>Jumlah yang belum di bayarkan</p>
                                <hr>
                                <p id="debtAmount">Total Hutang: $0</p>
                                <p id="remainingDebtAmount">Sisa Hutang: $0</p>
                                <p id="paidDebtAmount">Telah Dibayar: $0</p>
                                <div class="progress-bar-container">
                                    <div class="progress-bar" id="debtProgressBar"></div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">

                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <h6>Piutang</h6>
                                <p>Jumlah yang belum di bayarkan</p>
                                <hr>
                                <p id="receivableAmount">Total Piutang: $1000</p>
                                <p id="remainingReceivableAmount">Sisa Piutang: $500</p>
                                <p id="paidReceivableAmount">Telah Diterima: $0</p>
                                <div class="progress-bar-container">
                                    <div class="progress-bar" id="receivableProgressBar"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Row end -->

                        <!-- Row start -->

                        <!-- Row end -->

                    </div>
                    <!-- Content wrapper end -->

                    <!-- App footer start -->
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
        <script src="{{ asset("Gmbslagi/js/dropdown.js") }}"></script>

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

        <!-- Apex Charts -->
        <script src="{{ asset("Gmbslagi/vendor/apex/apexcharts.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/salesGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/ordersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/earningsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/visitorsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/customersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/sparkline.js") }}"></script>
		<!-- Date Range JS -->
		<script src="{{ asset("Gmbslagi/vendor/daterange/daterange.js") }}"></script>
		<script src="{{ asset("Gmbslagi/vendor/daterange/custom-daterange.js") }}"></script>
        <!-- Circleful Charts -->
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.custom.js") }}"></script>

        <!-- Date Range JS -->
        <!-- Main Js Required -->
        <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6.3.1/dist/tippy-bundle.umd.js"></script>

        <script src="{{ asset("Gmbslagi/js/chart_index.js") }}"></script>
        <script type="text/javascript">
            $(function() {

                $('input[name="datefilter"]').daterangepicker({
                    autoUpdateInput: false,
                    locale: {
                        cancelLabel: 'Clear'
                    }
                });

                $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                });

                $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                    $(this).val('');
                });

            });
            $(document).ready(function() {
                $('#exampleModalLong').modal('show');
            });
            //dropzone
            document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
                const dropZoneElement = inputElement.closest(".drop-zone");

                dropZoneElement.addEventListener("click", (event) => {
                    inputElement.click(); /*clicking on input element whenever the dropzone is clicked so file browser is opened*/
                });

                inputElement.addEventListener("change", (event) => {
                    if (inputElement.files.length) {
                        updateThumbnail(dropZoneElement, inputElement.files[0]);
                    }
                });

                dropZoneElement.addEventListener("dragover", (event) => {
                    event.preventDefault(); /*this along with prevDef in drop event prevent browser from opening file in a new tab*/
                    dropZoneElement.classList.add("drop-zone--over");
                });
                ["dragleave", "dragend"].forEach((type) => {
                    dropZoneElement.addEventListener(type, (event) => {
                        dropZoneElement.classList.remove("drop-zone--over");
                    });
                });
                dropZoneElement.addEventListener("drop", (event) => {
                    event.preventDefault();
                    console.log(
                        event.dataTransfer.files
                    ); /*if you console.log only event and check the same data location, you won't see the file due to a chrome bug!*/
                    if (event.dataTransfer.files.length) {
                        inputElement.files =
                            event.dataTransfer.files; /*asigns dragged file to inputElement*/

                        updateThumbnail(
                            dropZoneElement,
                            event.dataTransfer.files[0]
                        ); /*thumbnail will only show first file if multiple files are selected*/
                    }
                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });

            function updateThumbnail(dropZoneElement, file) {
                let thumbnailElement = dropZoneElement.querySelector(
                    ".drop-zone__thumb"
                );
                /*remove text prompt*/
                if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                    dropZoneElement.querySelector(".drop-zone__prompt").remove();
                }

                /*first time there won't be a thumbnailElement so it has to be created*/
                if (!thumbnailElement) {
                    thumbnailElement = document.createElement("div");
                    thumbnailElement.classList.add("drop-zone__thumb");
                    dropZoneElement.appendChild(thumbnailElement);
                }
                thumbnailElement.dataset.label =
                    file.name; /*takes file name and sets it as dataset label so css can display it*/

                /*show thumbnail for images*/
                if (file.type.startsWith("image/")) {
                    const reader = new FileReader(); /*lets us read files to data URL*/
                    reader.readAsDataURL(file); /*base 64 format*/
                    reader.onload = () => {
                        thumbnailElement.style.backgroundImage = `url('${reader.result}')`; /*asynchronous call. This function runs once reader is done reading file. reader.result is the base 64 format*/
                        thumbnailElement.style.backgroundPosition = "center";
                    };
                } else {
                    thumbnailElement.style.backgroundImage = null; /*plain background for non image type files*/
                }
            }
        </script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:19 GMT -->

</html>
