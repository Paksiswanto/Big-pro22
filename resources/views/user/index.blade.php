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
    <title>Uni Pro Admin Template - Admin Dashboard</title>


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

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/dataTables.bs4-custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/datatables/buttons.bs.css') }}" />
    <style>
          .badge-sent{
            border-radius: 2px;
            padding: .35rem .5rem;
            background: #ffd7d7;
            color: #df0000;
        }
        .kotak{
            background-color: #00D1FF;
            color:#fff;
            display:inline-block;
            border-radius:20px;
            padding:3%
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            z-index: 1;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 4px;
            right: 0;
            /* Mengarahkan dropdown ke arah kiri */
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 5px 0;
            text-decoration: none;
            color: #333;
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

        <!-- *************
    ************ Main container start *************
   ************* -->
        <div class="main-container">

            <!-- Page header starts -->
            <div class="page-header">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">



                    </div>

                </div>
                <!-- Row end -->

            </div>
            <!-- Page header ends -->

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
                                            <h3>Pengguna<button type="button" style="border: none; background:transparent;">☆</button></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                            <div class="graph-day-selection" role="group" style="margin-left: -30px;margin-right: 10px;">
                                                <a href="{{url('add_users')}}">
                                                    <button type="button" class="btn active" style="background: transparent">Tambah Pengguna</button>
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
                                    <div class="content">
                                        <div class="searchcontainer">
                                            <i class="icon-search"></i><input class="search " type="text"
                                                placeholder="Cari Disini..."
                                                style="
                                              margin-bottom: 2%; font-size:10pt " />
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover caption-top">
                                            <thead>
                                                <tr>
                                                    <th scope="col"> <input type="checkbox"
                                                            id="select-all-checkbox"> </th>
                                                    <th scope="col"> Nama</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item )                                                    
                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            @if ($item->email_verified_at != null)                                                             
                                                            @if ($item->picture != null)
                                                            <img src="{{ asset( $item->picture) }}" alt="Foto Profil">
                                                            <p style="margin-left: 2%">&emsp; {{ $item->name }}</p>
                                                            @else
                                                            <i class="icon-account_circle" style="font-size: 24px;transform: scale(1.5); "></i> <p style="margin-left: 2%">&emsp; {{ $item->name }}</p>
                                                            @endif
                                                            @else
                                                            @if ($item->picture != null)
                                                            <img src="{{ asset( $item->picture) }}" alt="Foto Profil">
                                                            <p style="margin-left: 2%;margin-right:3%">&emsp; {{ $item->name }}</p><span class="badge-sent" style="width: 30%; text-align: center;">
                                                                <p style="font-size: 10px; margin: 0;">Undangan Tertunda</p>
                                                            @else
                                                            <i class="icon-account_circle" style="font-size: 24px;transform: scale(1.5); "></i> <p style="margin-left: 2%;margin-right:3%">&emsp; {{ $item->name }}</p>  <span class="badge-sent" style="width: 30%; text-align: center;">
                                                                <p style="font-size: 10px; margin: 0;">Undangan Tertunda</p>
                                                            </span>
                                                            
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        @foreach ($item->roles as $role)
                                                            <p>{{ $role->name }}</p>
                                                         @endforeach          
                                                     </td>
                                                    <td>
                                                        <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="/edit_users/{{ $item->id }}" class="menu-icon icon-edit-2"></a>
                                                            <a href="javascript.void(0)" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleterole{{ $item->id }}"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                  <!-- Modal start -->
                                                    <div class="modal fade" id="deleterole{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleterole" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content" style="padding: 0px">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel">Hapus Pengguna</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Anda Yakin Ingin Menghapus Pengguna Ini?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="user_delete/{{ $item->id }}" method="POST">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal end -->
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Card start -->
                                    <div class="card">
                                        <div class="card-body" style="margin-left: -2.1%">

                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination" style="justify-content: flex-end;">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"
                                                            aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">3</a></li>
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

        </divkolaja>
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

        <!-- Data Tables -->
        <script src="{{ asset('Gmbslagi/vendor/datatables/dataTables.min.js') }}"></script>
        <script src="{{ asset('Gmbslagi/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>

        <!-- Custom Data tables -->
        <script src="{{ asset('Gmbslagi/vendor/datatables/custom/custom-datatables.js') }}"></script>
        <script src="{{ asset('Gmbslagi/vendor/datatables/custom/fixedHeader.js') }}"></script>

        <!-- Download / CSV / Copy / Print -->
        <script src="{{ asset('Gmbslagi/vendor/datatables/buttons.min.js') }}"></script>
        <script src="{{ asset('Gmbslagi/vendor/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('Gmbslagi/vendor/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('Gmbslagi/vendor/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('Gmbslagi/vendor/datatables/html5.min.js') }}"></script>
        <script src="{{ asset('Gmbslagi/vendor/datatables/buttons.print.min.js') }}"></script>

        <!-- Main Js Required -->
        <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
        <script>
            // Ambil elemen-elemen yang diperlukan
            var selectAllCheckbox = document.getElementById('select-all-checkbox');
            var otherCheckboxes = document.getElementsByClassName('other-checkbox');

            // Tambahkan event listener pada checkbox "Select All"
            selectAllCheckbox.addEventListener('change', function() {
                // Periksa apakah checkbox "Select All" dicentang atau tidak
                var isChecked = selectAllCheckbox.checked;

                // Ubah status checked pada checkbox lainnya sesuai dengan checkbox "Select All"
                for (var i = 0; i < otherCheckboxes.length; i++) {
                    otherCheckboxes[i].checked = isChecked;
                }
            });

            // Tambahkan event listener pada checkbox lainnya
            for (var i = 0; i < otherCheckboxes.length; i++) {
                otherCheckboxes[i].addEventListener('change', function() {
                    // Periksa apakah semua checkbox lainnya telah dicentang
                    var allChecked = true;
                    for (var j = 0; j < otherCheckboxes.length; j++) {
                        if (!otherCheckboxes[j].checked) {
                            allChecked = false;
                            break;
                        }
                    }

                    // Perbarui status checked pada checkbox "Select All" sesuai dengan kondisi di atas
                    selectAllCheckbox.checked = allChecked;
                });
            }
        </script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>
