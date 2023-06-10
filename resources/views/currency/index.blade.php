<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:53 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Mata Uang</title>


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

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4-custom.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/buttons.bs.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css")}}" />
    <style>
  
        .hidden-menu {
            display: none;
            background-color: #f2f2f2;
            font-size: 20px;
            padding: 20px;
        }

        .hidden-menu a {
            display: inline-block;
            padding: 6px;
            transition: transform 0.3s;
            position: relative;
        }

        .hidden-menu a:hover {
            transform: scale(1.2);
        }

        .text {
            text-align: center;
            color: #5e6973;
        }

        .empty-box {
            /* text-align: ; */
            height: 25px;
            border: 0px;
            border-bottom: 2px solid grey;
        }

        .empty-box.active {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #333;
        }

        .empty-box:hover {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #333;
        }

        .searchcontainer {
            width: 90%;
            font-size: 20px;

            .icon-search {
                display: inline-block;
                margin-right: 50px;
                color: rgba(255, 255, 255, 0.5);
            }

            .search {
                width: 111%;
                display: inline-block;
                background-color: rgba(255, 255, 255, 0);
                border: 0px;
                color: grey;
                font-size: 16px;
                padding: 10px 0px;
                padding-left: 25px;
                border-bottom: 1px solid grey;

                &:focus {
                    outline: 0px;
                    border-bottom: 1px solid #ccc;
                }
            }
        }
    </style>

</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

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

                                <div class="card">
                                    <div class="card-header">
                                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6">
                                            <div class="card-title">
                                                <h3>Mata Uang<button type="button" style="border: none; background:transparent;">☆</button></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                            <div class="graph-day-selection" role="group" style="margin-left: -30px;margin-right: 10px;">
                                                <a href="{{url('add-currency')}}">
                                                    <button type="button" class="btn active" style="background: transparent">Tambah</button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                                <li><a class="dropdown-item" href="#">Impor</a></li>
                                                <li><a class="dropdown-item" href="#">Expor</a></li>

                                            </ul>
                                        </div>


                                    </div>
                                    <div class="">
                                        <!-- Row start -->

                                        <!-- Row end -->


                                        </nav>
                                        <div class="content">
                                            <div class="searchcontainer">
                                                <i class="icon-search"></i><input class="search " type="text" placeholder="Cari atau seleksi hasil.." style="
                                              margin-bottom: 2%; font-size:10pt " />
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <div class="hidden-menu" style="display: none; background-color: #f2f2f2; font-size: 12pt; padding: 10px;">
                                                <p style="display: inline" id="count-display">&emsp;</p>
                                                &emsp;<a href="#" title="Aktifkan"> <i class="icon-check-circle" style="color:#424242 "></i> </a>
                                                &emsp;<a href="#" title="Nonaktifkan"> <i class="icon-do_not_disturb_alt"></i> </a>
                                                &emsp;<a href="#" title="Hapus"> <i class="icon-trash-2"></i> </a>
                                            </div>
                                            <table class="table table-hover caption-top">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"> <input type="checkbox" id="select-all-checkbox"> </th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Kode</th>
                                                        <th scope="col">Simbol</th>
                                                        <th scope="col">Kurs</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Data 1 -->
                                                    <tr class="table-row">
                                                        <td><input type="checkbox" class="other-checkbox"></td>
                                                        <td>Rupiah</td>
                                                        <td>USD</td>
                                                        <td>$</td>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                <a href="{{route('currency-edit')}}" class="menu-icon icon-edit-2"></a>
                                                            <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleterole"></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Data 2 -->
                                                    <tr class="table-row">
                                                        <td><input type="checkbox" class="other-checkbox"></td>
                                                        <td>Rupiah</td>
                                                        <td>IDR</td>
                                                        <td>Rp</td>
                                                        <td>10</td>
                                                        <td>
                                                            <div class="menu-icons" style="font-size: 15px;">
                                                                <a href="{{route('currency-edit')}}" class="menu-icon icon-edit-2"></a>
                                                            <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleterole"></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Card start -->
                                        <div class="card">
                                            <div class="card-body" style="margin-left: -2.1%">

                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination" style="justify-content: flex-end;">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>

                                            </div>
                                        </div>
                                        <!-- Card end -->
                                        <!-- Modal start -->
  <!-- Modal start -->
  <div class="modal fade" id="deleterole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleterole" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="padding: 0px">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hapus Mata Uang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Anda Yakin Ingin Menghapus Mata Uang Ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>

            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
                                        <!-- Modal end -->
                                    </div>
                                </div>
                                <!-- Card end -->


                            </div>
                            <!-- Row end -->

                        </div>
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

        <!-- Data Tables -->
        <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bootstrap.min.js")}}"></script>

        <!-- Custom Data tables -->
        <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/custom-datatables.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/fixedHeader.js")}}"></script>

        <!-- Download / CSV / Copy / Print -->
        <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/datatables/jszip.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/datatables/pdfmake.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/datatables/vfs_fonts.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/datatables/html5.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.print.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js")}}"></script>

        <!-- Main Js Required -->
        <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
        <script>
            const checkboxes = document.querySelectorAll('.other-checkbox');
            const selectAllCheckbox = document.querySelector('#select-all-checkbox');
            const hiddenMenu = document.querySelector('.hidden-menu');
            const countDisplay = document.querySelector('#count-display');

            // Function to count the number of checked checkboxes
            function countCheckedCheckboxes() {
                const checkedCheckboxes = document.querySelectorAll('.other-checkbox:checked');
                return checkedCheckboxes.length;
            }

            // Function to update the count display
            function updateCountDisplay() {
                const totalCount = countCheckedCheckboxes();
                countDisplay.textContent = totalCount + ' Item Yang dipilih : ';
            }

            // Add event listener to each checkbox
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        hiddenMenu.style.display = 'block'; // Show the hidden menu
                    } else {
                        const checkedCount = countCheckedCheckboxes();
                        if (checkedCount === 0) {
                            hiddenMenu.style.display = 'none'; // Hide the hidden menu if no checkboxes are checked
                        }
                    }

                    updateCountDisplay(); // Update the count display
                });
            });

            // Add event listener to the "Select All" checkbox
            selectAllCheckbox.addEventListener('change', function() {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked; // Set the state of each checkbox based on the "Select All" checkbox
                });

                if (this.checked) {
                    hiddenMenu.style.display = 'block'; // Show the hidden menu
                } else {
                    hiddenMenu.style.display = 'none'; // Hide the hidden menu
                }

                updateCountDisplay(); // Update the count display
            });
        </script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>
