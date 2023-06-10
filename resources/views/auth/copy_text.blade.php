<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

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
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/summernote/summernote-bs4.css")}}" />
    <script>.tooltip {
        position: relative;
        display: inline-block;
      }
      
      .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
      }
      
      .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
      }
      
      .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
      }</script>
      <style>

        .rcr-screen {
            position: relative;
            background: #ffffff;
            border: 1px solid #e1e8f3;
            border-radius: 2px;
            -webkit-box-shadow: 0 30px 15px -20px rgba(0, 0, 0, .2);
            box-shadow: 0 30px 15px -20px rgba(0, 0, 0, .2);
            min-width: 100%;
            max-width: 100%;
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

        <!-- *************
    ************ Main container start *************
   ************* -->
        <div class="main-container1">

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

            </div>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-^ col-lg-6 col-md-6 col-sm-6 col-12" style="margin-left: -2%">

                            <!-- Card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title" style="margin-top: -1%">
                                        <h2>Biaya Nikah</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div style="margin-right: 2%; margin-top:-3%; display:flex">
                                      <div style="margin-top: 3%; width:40%">
                                        <div class="hr-switch">
                                          <a href="#" onclick="switchTab('cash')">
                                            <div id="cashTab" class="empty-box1 active">
                                              <h6 class="">Cash</h6>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2" style="margin-top: 3%; width:40%">
                                        <div class="hr-switch">
                                          <a href="#" onclick="switchTab('bankTransfer')">
                                            <div id="bankTransferTab" class="empty-box2">
                                              <h6 class="">Bank Transfer</h6>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div id="cashContent" style="display: block; margin-left:1%; margin-top:2%">
                                      <!-- Konten untuk tab "Cash" -->
                                      <p>Bayar Langsung</p>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <label for="nama">Lampiran</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <!-- Field wrapper end -->

                                    </div>
                                    </div>
                                    
                                    <div id="bankTransferContent" style="display: none; margin-left:1%; margin-top:2%">
                                      <!-- Konten untuk tab "Bank Transfer" -->
                                      <p>Transfer</p>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <label for="nama">Lampiran</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <!-- Field wrapper end -->

                                    </div>
                                    </div>
                                  </div>                                  
                                  
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button type="button" style="border-radius:2px; width:46%; height: 30px; border:none; background-color:#5BB318; color:white; margin-left:4%">Konfirmasi</button>
                                </div>
                            </div>
                            <!-- Card end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" style="margin-top: 6.5%">
                            <form
                                action="https://www.kodingwife.com/demos/unipro/v1-x/05-desig4-violet/reports.html">
                                <div class="rcr-screen">
                                    <div class="login-body pb-4 ">
                                        <div class="d-flex row col-12 ms-2">
                                            <p style="margin-top: 1%">Biaya nikah</p>
                                            <div class="col-8">
                                                <img style="width: 25%"
                                                    src="{{ asset('Gmbslagi/img/Carausel/person.jpg') }}"
                                                    alt="Uni Pro Admin">
                                            </div>
                                            <div class="ml-2 col-4">
                                            <p style="float: right" class="me-2">cina baik hati</p>
                                            <br>
                                            <p style="float: right" class="me-2">unknown company</p>
                                            <br>
                                            <p style="float: right" class="me-2">cireng@gmail.com</p>
                                        </div>
                                        </div>
                                        <div class="field-wrapper mb-3">
                                            <div style="border-bottom: solid grey 1px; margin-top: 4%">
                                        </div>
                                        <div class="d-flex" style="margin-top: 2%">
                                        <div class="col-6 ms-3">
                                            <p style="margin-top:2%">Tagihan Kepada</p>
                                            <p style="margin-top:2%">Koirul</p>
                                            <p style="margin-top:2%">1672671</p>
                                            <p style="margin-top:2%">cireng@gmail.com</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="margin-top:2%">Nomor faktur: INV-9</p>
                                            <p style="margin-top:2%">Tanggal faktur: 24 mei 2023</p>
                                            <p style="margin-top:2%">Tanggal Jatuh Tempo: 24 mei 2023</p>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table products-table col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Kuantitas</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>api maps</p>
                                                        <br>
                                                        <p style="font-size: 8pt; margin-top: -10%">pembelian api untuk map</p>
                                                    </td>
                                                    <td><span class="badge" style="border-radius: 2px">1</span></td>
                                                    <td>385.000,00</td>
                                                    <td>385.000,00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="float: right; margin-bottom: -5%">
                                            <!-- Card start -->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <li class="list-group-item">Subtotal: 9000000 </li>
                                                        <li class="list-group-item">Ppn(20%): 9000000 </li>
                                                        <li class="list-group-item">PPH(12%): 9000000 </li>
                                                        <li class="list-group-item">Total: 9000000 </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Card end -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>
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

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/summernote/summernote-bs4.js")}}"></script>
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
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ]
            });
        });

    </script>
    <script>function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");
      
        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices
      
         // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);
      
        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }</script>
      <script>
      function switchTab(tabName) {
        // Mengubah gaya tampilan tab aktif
        document.getElementById('cashTab').classList.remove('active');
        document.getElementById('bankTransferTab').classList.remove('active');
        
        // Menyembunyikan konten untuk semua tab
        document.getElementById('cashContent').style.display = 'none';
        document.getElementById('bankTransferContent').style.display = 'none';

        if (tabName === 'cash') {
            document.getElementById('cashTab').classList.add('active');
            // Menampilkan konten untuk tab "Cash"
            document.getElementById('cashContent').style.display = 'block';
        } else if (tabName === 'bankTransfer') {
            document.getElementById('bankTransferTab').classList.add('active');
            // Menampilkan konten untuk tab "Bank Transfer"
            document.getElementById('bankTransferContent').style.display = 'block';
        }
        }
      </script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

</html>
