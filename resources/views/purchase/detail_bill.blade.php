<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Rincian</title>


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
    <style>
        .tmbl{

  background: none;
  border: none;
  color: black

        }
        .rcr-screen {
            position: relative;
            background: #ffffff;
            border: 1px solid #e1e8f3;
            border-radius: 3px;
            -webkit-box-shadow: 0 30px 15px -20px rgba(255, 255, 255, 0.2);
            box-shadow: 0 30px 15px -20px rgba(255, 255, 255, 0.2);
            min-width: 100%;
            max-width: 100%;
        }

        .badge-finish {
            border-radius: 2px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D4FFCD;
            color: #0A6D01;
            font-size: 12px;
        }

        .table1 {
    color: #6f7479;
    font-size: .725rem;
    border-color: #e8edf3;
}

.table1 th,
.table1 td {
    padding: 12px;
    font-size: 10pt;
    font-weight: 600;
    color: #072242;
    border-bottom: 1px solid #c8d3df !important;
    white-space: nowrap;
}

        /* Tambahkan gaya CSS yang diperlukan di sini */
        /* ... */

        /* Media queries untuk tampilan seluler */
        @media only screen and (max-width: 600px) {
            /* Tambahkan gaya CSS untuk tampilan seluler di sini */
            /* ... */
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

            <!-- Page header starts -->
            <div class="page-header">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                        <!-- Search container start -->
                        <div class="search-container">

                        </div>
                        <!-- Search container end -->

                    </div>
                </div>
                <!-- Row end -->
                <div class="row">
                    <div class="card">
                        <div class="card-header ">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                            <div class="card-title">
                                <h3>Tagihan: {{ $data->bill_number }}</h3>

                            </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                        <div class="graph-day-selection" role="group" style="margin-left: -30px;margin-right: 10px;">
                                                <div class="badge-finish" style="text-align: center;">Terima</div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                            <li><a class="dropdown-item-bt" href="#">Duplikat</a></li>
                                            <li><a class="dropdown-item" href="#">Cetak</a></li>
                                            <li><a class="dropdown-item-bt" href="#">Unduh PDF</a></li>
                                            <li><a class="dropdown-item" href="#">Hapus</a></li>

                                        </ul>
                                    </div>

                        </div>
                        <div class="d-flex row">

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card-body">
                                    <div class="alert alert-primary mb-5"
                                        style="border-radius: 2px; background-color:#9a99e2" role="alert">
                                        faktur ini dihasilkan otomatis dari <a href="{{url('detail_rcr_bill')}}">TBU-00002</a>
                                    </div>
                                    <!-- Faq start -->
                                    <div class="accordion" id="faqAccordion">
                                        <div class="alert alert-primary"
                                        style="border-radius: 2px; border:1px solid #e3e3e3 ; background-color:#ffffff" role="alert">
                                        <p style="font-size:14pt;color:black">Membuat</p>
                                        <br>
                                        <p style="font-size:10pt;color:black">{{ $data->user->name }} membuat Tagihan ini pada
                                            <b>{{ \Carbon\Carbon::parse($data->date)->isoFormat('DD/MMMM/YYYY') }}</b>   </p>
                                                <button style="background-color: #9a99e2;border-radius:2px;width:80px;border:transparent;height:25px;color:#ffffff">Sunting</button>
                                    </div>
                                    <div class="alert alert-primary"
                                        style="border-radius: 2px; border:1px solid #e3e3e3 ; background-color:#ffffff" role="alert">
                                        <p style="font-size:14pt;color:rgb(0, 0, 0)">Bayar</p>
                                        <br>
                                        <p style="font-size:10pt;color:black">Terakhir dikirm pada <b>28 mei 2023</b>  </p>
                                        <button style="background-color: #9a99e2;border-radius:2px;width:80px;border:transparent;height:25px;color:#ffffff" data-bs-toggle="modal" data-bs-target="#payment">Bayar</button>
                                    </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <div class="d-flex row">
                                                        <p style="font-size:14pt">Melakukan pembayaran</p><br>
                                                        <span>Sisa yang belum di bayar: 400.000,000</span>
                                                        <br>
                                                        <p style="font-size:10pt">Pembayaran dibuat: </p>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <p>24 Mei 2023 - Pembayaran untuk Rp200.000,00 telah dilakukan menggunakan jayaabadi Kirim Resi- <button class="tmbl" data-bs-toggle="modal" data-bs-target="#payment">Sunting Pembayaran</a></button>   - <a href=""> Hapus Pembayaran</a> </p>
                                                    <p>25 Mei 2023 - Pembayaran untuk Rp200.000,00 telah dilakukan menggunakan jayaabadi Kirim Resi- <button class="tmbl" data-bs-toggle="modal" data-bs-target="#payment">Sunting Pembayaran</a></button>   - <a href="">Hapus Pembayaran</a></p>
                                                    <p>26 Mei 2023 - Pembayaran untuk Rp200.000,00 telah dilakukan menggunakan jayaabadi Kirim Resi- <button class="tmbl" data-bs-toggle="modal" data-bs-target="#payment">Sunting Pembayaran</a></button>  - <a href="">Hapus Pembayaran</a></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Faq end -->

                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-3">
                                <form
                                    action="https://www.kodingwife.com/demos/unipro/v1-x/05-desig4-violet/reports.html">
                                    <div class="rcr-screen">
                                        <div class="login-body pb-4 ">
                                            <div class="d-flex row col-12 ms-2">
                                                <p>Tagihan</p>
                                                <div class="col-8">
                                                    <img style="width: 25%"
                                                        src="{{ asset('Gmbslagi/img/Carausel/person.jpg') }}"
                                                        alt="Uni Pro Admin">
                                                </div>
                                                <div class="ml-2 col-4">
                                                    
                                                    <p style="float: right" class="me-3">{{ $data->company->name }}</p>
                                                    <br>
                                                    <p style="float: right" class="me-3">{{ $data->company->email }}</p>
                                                </div>
                                            </div>
                                            <div class="field-wrapper mb-3">
                                                <div style="border-bottom: solid grey 1px; margin-top: 4%">
                                                </div>
                                                <div class="d-flex" style="margin-top: 2%">
                                                    <div class="col-6 ms-3">
                                                        <p style="margin-top:2%">Tagihan Kepada</p>
                                                        <p style="margin-top:2%">{{ $data->supplier->name }}</p>
                                                        <p style="margin-top:2%">MPWP: {{ $data->supplier->npwp }}</p>
                                                        <p style="margin-top:2%">{{ $data->supplier->email }}</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p style="margin-top:2%">Nomor Tagihan:{{ $data->bill_number }} </p>
                                                        <p style="margin-top:2%">Nomer Antrean: {{ $data->order_quantity }}</p>
                                                        <p style="margin-top:2%">Tanggal Tagihan: {{ $data->start_date }}</p>
                                                        <p style="margin-top:2%">Tanggal Jatuh Tempo: {{ $data->end_date }}</p>
                                                    </div>
                                                </div>
                                                <div class="table-responsive mt-3">
                                                    <table
                                                        class="table1 products-table col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <thead>
                                                            <tr>
                                                                <th>Item</th>
                                                                <th>Kuantitas</th>
                                                                <th>Harga</th>
                                                                <th>Jumlah</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ( $item as $items )
                                                            <tr>
                                                                <td>
                                                                    <p>{{ $items->item->name }}</p>
                                                                    <br>
                                                                    <p style="font-size: 8pt; margin-top: -10%">
                                                                        {{ $items->item->description }}</p>
                                                                </td>
                                                                <td><span class="badge" style="border-radius:2px">{{ $items->quantity }}</span></td>
                                                                <td>{{ $items->price }}</td>
                                                                <td>{{ $items->amount }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"
                                                        style="float: right; margin-bottom: -5%">
                                                        <!-- Card start -->
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <li class="list-group-item">Subtotal: {{ $data->totalAmount }} </li>
                                                                <li class="list-group-item">Total Tax: {{ $data->totalTax }} </li>
                                                                <li class="list-group-item">Total: {{ $data->totalPay }} </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- Card end -->
                                                        <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="paymentTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                                <div class="modal-content" style="margin-top: -10%">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="paymentTitle">Pembayaran</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                            <div class="field-wrapper">
                                                                                <label for="subjudul" class="field-label">Kategori<span class="text-danger">*</span></label>
                                                                                <input type="text" class="form-control datepicker" style="border-radius: 10px">
                                                                            </div>
                                                                            <div class="field-wrapper">
                                                                                <label for="subjudul" class="field-label">Jumlah<span class="text-danger">*</span></label>
                                                                                <input type="number" class="form-control datepicker" style="border-radius: 10px">
                                                                            </div>
                                                                            <div class="field-wrapper">
                                                                                <label for="subjudul" class="field-label">Metode Pembayaran<span class="text-danger">*</span></label>
                                                                                <select class="select-single js-states" title="Select Product Category" data-live-search="true" style="border-radius: 10px">
                                                                                    <option>Cash</option>
                                                                                    <option>Transfer</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="field-wrapper">
                                                                                <label for="subjudul" class="field-label">Akun<span class="text-danger">*</span></label>
                                                                                <select class="select-single js-states" title="Select Product Category" data-live-search="true" style="border-radius: 20px">
                                                                                    <option>Adi</option>
                                                                                    <option>Rudi</option>
                                                                                </select>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="text-white" style="background-color:rgb(255, 0, 0); border:none; border-radius:2px; width:20%; height:25px; color:white" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="button" class="text-white" style="background-color: #55be0e; border:none; border-radius:2px; width:30%; height:25px; color:white">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->

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

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

</html>
