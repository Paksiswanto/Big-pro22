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
    <title>Unknown | Akun</title>


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

        .float-right {
            float: right;
        }

        .badge-start {
            border-radius: 30px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D8D7FF;
            color: #030179;
        }

        .badge-finish {
            border-radius: 30px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D4FFCD;
            color: #0A6D01;
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
            border-bottom: 2px solid #f26861;
        }

        .empty-box:hover {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #f26861;
        }

        .lingkaran-warna1 {

            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: red;

        }

        .lingkaran-warna2 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: blue;

        }

        .lingkaran-warna3 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: green;

        }

        .lingkaran-warna4 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: purple;

        }

        .lingkaran-warna5 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: pink;

        }

        .icon-no {
            padding-top: 90px;
            font-size: 3rem;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-right: auto;
            margin-left: auto;
        }

        #dropdown-menu {
            display: none;
            position: relative;
        }

        .dropdown-toggle {
            padding: 5px;
            font-size: 20px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 8px 16px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        /* Tampilkan dropdown saat tombol titik tiga diklik */
        #dropdown-menu.show .dropdown-content {
            display: block;
        }

        /* Atur tampilan tombol untuk ukuran layar yang lebih kecil */
        @media screen and (max-width: 1024px) {
            .button-container {
                justify-content: flex-end;
            }

            #dropdown-menu {
                display: block;
            }

            .dropdown-toggle {
                display: block;
            }

            .dropdown-content {
                position: static;
                min-width: unset;
                box-shadow: none;
            }

            .dropdown-content button {
                display: none;
            }

            /* Tampilkan tombol dropdown saat layar kecil */
            #dropdown-menu.show .dropdown-content button {
                display: block;
            }

            .button-container {
                /* justify-content: flex-end; */
                display: none;
            }
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

                                <!-- <div class="card-header"> -->
                                <div class="d-flex">
                                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6">
                                        <div class="card-title">
                                            <h3 class="card-tittle">Akun<button type="button" style="border: none; background:transparent;">☆</button></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                        <div class="graph-day-selection" role="group" style="margin-left: 68%">
                                            <a href="{{url('add_account')}}">
                                                <button type="button" class="btn active" style="background: transparent">Tambah</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="content">
                                    <div class="searchcontainer">
                                        <i class="icon-search"></i>
                                        <input class="search" name="cari" type="text" placeholder="Cari Disini..." style="margin-bottom: 2%; font-size:10pt" />
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <div class="hidden-menu" style="display: none; background-color: #f2f2f2; font-size: 12pt; padding: 10px;">
                                            <p style="display: inline" id="count-display">&emsp;</p>
                                            &emsp;<a href="#" title="Hapus" data-bs-toggle="modal" data-bs-target="#deleteallaccount"> <i class="icon-trash-2"></i> </a>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th scope="col"> <input type="checkbox" id="select-all-checkbox"></th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Nomor Rekening</th>
                                                <th scope="col">Nama Bank</th>
                                                <th scope="col">Telepon</th>
                                                <th scope="col">Saldo Saat Ini</th>
                                                <th scope="col">Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $row)
                                            <tr class="table-row">
                                                <td name="item"><input type="checkbox" class="other-checkbox"></td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->rekening_number }}</td>
                                                <td>{{ $row->name_bank }}</td>
                                                <td>{{ $row->bank_telephone }}</td>
                                                <td>Rp{{ $row->balance }}</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{ route('edit_account', ['id' => $row->id]) }}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{ url('delete_account') }}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleteaccount{{ $row->id }}"></a>
                                                        <a href="{{ route('show_account1', ['id' => $row->id]) }}" class="menu-icon icon-eye1"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <!-- Modal start -->
                                            <div class="modal fade" id="deleteaccount{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteaccount{{ $row->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="padding: 0px">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Hapus Akun</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Anda Yakin Ingin Menghapus Akun Ini?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="/delete_account/{{ $row->id }}" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger" id="deleteButton">Hapus</button>
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
                            </div>
                        </div>
                        <!-- Card start -->
                        <div class="card">
                            <div class="card-body col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination" style="justify-content: flex-end;">
                                        <li class="page-item">
                                        @if ($data->currentPage() > 1)
                                            <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        @endif
                                        </li>
                                        @for ($i = 1; $i <= $data->lastPage(); $i++)
                                        <li class="page-item {{ $data->currentPage() == $i ? 'active' : '' }}"><a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a></li>
                                        @endfor
                                        <li class="page-item">
                                        @if ($data->currentPage() < $data->lastPage())
                                            <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        @endif
                                        </li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <!-- Card end -->


                        <!-- Modal start -->
                        <div class="modal fade" id="deleteallaccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteallaccount" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="padding: 0px">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Semua Akun</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda Yakin Ingin Menghapus Semua Akun yang Anda Buat?</p>
                                    </div>
                                    <div class="modal-footer">
                                        @isset($row)
                                        <a href="{{ route('delete_account', ['id' => $row->id]) }}"><button type="button" class="btn btn-danger" id="deleteButton">Hapus</button></a>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->

                        <!-- Card end -->


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
        <script src="{{ asset ("Gmbslagi/js/jquery.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/js/modernizr.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/js/moment.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/js/dropdown.js")}}"></script>

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
            function cari() {
                var input = document.querySelector('.search');
                var keyword = input.value.trim().toLowerCase();

                var rows = document.querySelectorAll('.table-row');

                rows.forEach(function(row) {
                    var name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    var rekening_number = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                    var name_bank = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                    var bank_telephone = row.querySelector('td:nth-child(5)').textContent.toLowerCase();
                    var balance = row.querySelector('td:nth-child(6)').textContent.toLowerCase();

                    if (
                        name.includes(keyword) ||
                        rekening_number.includes(keyword) ||
                        name_bank.includes(keyword) ||
                        bank_telephone.includes(keyword) ||
                        balance.includes(keyword)
                    ) {
                        row.style.display = 'table-row';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            var searchInput = document.querySelector('.search');
            searchInput.addEventListener('input', cari);
            searchInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                }
            });
        </script>


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>