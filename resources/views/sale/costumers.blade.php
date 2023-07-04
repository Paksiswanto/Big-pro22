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
    <title>Unknown | Pelanggan</title>


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

        .hover-trigge1r {
            cursor: pointer;
            position: relative;
        }

        .hover-trigge1r:hover::before {
            content: attr(data-tooltip_dpt);
            position: absolute;
            top: -42px;
            left: 0;

            font-size: 12px;
            background-color: #5957b1;
            color: #fff;
            padding: 3px;
            border-radius: 2px;
        }

        .hover-trigge2r {
            cursor: pointer;
            position: relative;
        }

        .hover-trigge2r:hover::before {
            content: attr(data-tooltip_buka);
            position: absolute;
            top: -42px;
            left: 0;
            font-size: 12px;
            background-color: #5957b1;
            color: #fff;
            padding: 3px;
            border-radius: 2px;
        }



        .hover-trigge3r:hover::before {
            content: attr(data-tooltip_byr);
            position: absolute;
            top: -42px;
            left: 0;
            font-size: 12px;
            background-color: #5957b1;
            color: #fff;
            padding: 3px;
            border-radius: 2px;
        }

        .hover-trigge3r {
            cursor: pointer;
            position: relative;
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
                                <div class="card">
                                    <div class="card-header">
                                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6">
                                            <div class="card-title">
                                                <h3>Pelanggan<button type="button" style="border: none; background:transparent;">☆</button></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                            <div class="graph-day-selection" role="group" style="margin-left: -30px;margin-right: 10px;">
                                                <a href="{{route('add_costumers')}}">
                                                    <button type="button" class="btn active" style="background: transparent">Tambah</button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                                <li><a class="dropdown-item" href="{{url('ImportCustomer')}}">Impor</a></li>
                                                <li><a class="dropdown-item" href="{{route('ExportCustomer')}}">Expor</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="">
                                        <!-- Row start -->
                                        <div class="row gutters" style="margin-left: 10%; margin-bottom: -5%">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="stats-tile">
                                                    <div class="sale-icon">
                                                        <p><b><i>Rp</i></b></p>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h2 class="hover-trigge1r">25.5M</h2>
                                                        <p>Jatuh Tempo</p>
                                                    </div>
                                                    <div class="sale-graph">
                                                        <div id="sparklineLine1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="stats-tile">
                                                    <div class="sale-icon">
                                                        <p><b><i>Rp</i></b></p>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h2 class="hover-trigge2r">90.5M</h2>
                                                        <p>Buka</p>
                                                    </div>
                                                    <div class="sale-graph">
                                                        <div id="sparklineLine2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <div class="stats-tile">
                                                    <div class="sale-icon">
                                                        <p><b><i>Rp</i></b></p>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h2 class="hover-trigge3r">90.5M</h2>
                                                        <p>Dibayar</p>
                                                    </div>
                                                    <div class="sale-graph">
                                                        <div id="sparklineLine3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            const hoverTrigger = document.querySelector('.hover-trigge1r');
                                            const tooltipContent1 = '25.500.000.000.000';
                                            hoverTrigger.setAttribute('data-tooltip_dpt', tooltipContent1);

                                            const hoverTrigger2 = document.querySelector('.hover-trigge2r');
                                            const tooltipContent2 = '25.500';
                                            hoverTrigger2.setAttribute('data-tooltip_buka', tooltipContent2);

                                            const hoverTrigger3 = document.querySelector('.hover-trigge3r');
                                            const tooltipContent3 = '25.500.000';
                                            hoverTrigger3.setAttribute('data-tooltip_byr', tooltipContent3);
                                        </script>
                                        <!-- Row end -->
                                        <div style="margin-top: 5%;">
                                            <div class="table-responsive">
                                                <div class="hidden-menu" style="display: none; background-color: #f2f2f2; font-size: 12pt; padding: 10px;">
                                                    <p style="display: inline" id="count-display">&emsp;</p>
                                                    &emsp;<a href="#" title="Aktifkan"> <i class="icon-check-circle" style="color:#424242 "></i> </a>
                                                    &emsp;<a href="#" title="Nonaktifkan"> <i class="icon-do_not_disturb_alt"></i> </a>
                                                    &emsp;<a href="#" title="Hapus"> <i class="icon-trash-2"></i> </a>
                                                </div>
                                                <table id="basicExample" class="table table-hover caption-top">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"> <input type="checkbox" id="select-all-checkbox"> </th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Negara</th>
                                                            <th scope="col">Jatuh Tempo</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-- Data 1 -->
                                                        @foreach ($data as $row)

                                                        <tr class="table-row">
                                                            <a href="">
                                                                <td><input type="checkbox" class="other-checkbox"></td>
                                                                <td>{{ $row->name }}</td>
                                                                <td>{{ $row->email }}</td>
                                                                <td>{{ $row->country }}</td>
                                                                <td>20.000.000</td>
                                                                <th>
                                                                    <div class="menu-icons" style="font-size: 15px;">
                                                                        <a href="{{route('edit_cos',['id' => $row->id])}}" class="menu-icon icon-edit-2"></a>
                                                                        <a href="{{url('delete_cos')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleterole"></a>
                                                                        <a href="{{route('show_cos',['id' => $row->id])}}" class="menu-icon icon-eye1"></a>

                                                                    </div>
                                                                </th>
                                                            </a>
                                                        </tr>
                                                        </form>
                                                        <div class="modal fade" id="deleterole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleterole" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" style="padding: 0px">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Pelanggan</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Anda Yakin Ingin Menghapus Pelanggan Ini?</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        @isset($row)
                                                                        <form action="{{ route('delete_customers', ['id' => $row->id]) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger" id="deleteButton">Hapus</button>
                                                                        </form>
                                                                        @endisset

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Modal start -->
                                        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Impor Pemasok</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="dropzone">
                                                            <form action="https://www.kodingwife.com/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

                                                                <div class="dz-message needsclick">
                                                                    <button type="button" class="dz-button" style="border:none; margin-right:20%; margin-left:20%; margin-top: 12%">Pilih berkas di sini untuk mengunggah.</button><br>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:2%">
                                                        <a href="" onclick="window.location.reload()" style="margin-right: 2%" data-bs-dismiss="modal">Batal</a>
                                                        <button type="button" class="btn btn-primary" style="border-radius: 2px">Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal end -->
                                        <!-- Modal start -->
                                        <div class="modal fade" id="deleterole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleterole" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="padding: 0px">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Pelanggan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Anda Yakin Ingin Menghapus Pelanggan Ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        @isset($row)
                                                        <a href="{{ route('delete_customers', ['id' => $row->id]) }}"><button type="button" class="btn btn-danger" id="deleteButton">Hapus</button></a>
                                                        @endisset

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal end -->
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

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>