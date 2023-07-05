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
    <title>Unknown | Tambah-Faktur</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/bootstrap.min.css') }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/fonts/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/bs-select/bs-select.css') }}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>


    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/megamenu/css/megamenu.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/bs-select/bs-select.css') }}" />

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/dropzone/dropzone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/daterange/daterange.css') }}">
    <style>
      .button-tagihan {
    position: relative;
    margin-bottom: 10px;
  }

  .button-tagihan::after {
    content: "";
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 17%;
    height: 2px;
    background-color: #A9A9A9;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.5s ease;
  }

  .button-tagihan:hover::after {
    transform: scaleX(1);
  }

    .toggle-content {
      display: none;
      margin-top: 10px;
    }
        .edit-icon {
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }

        .edit-icon svg {
            height: 20px;
            width: 20px;
        }

        .toggle-container {
            display: flex;
            align-items: center;
        }

        .toggle-label {
            margin-right: 10px;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
            background-color: #ccc;
            border-radius: 12px;
            transition: background-color 0.3s;
        }

        .toggle-switch:before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: white;
            top: 2px;
            transition: transform 0.3s;
        }

        .toggle-switch.checked {
            background-color: green;
        }

        .toggle-switch.checked:before {
            transform: translateX(26px);
        }

        .toggle-switch.unchecked:before {
            transform: translateX(0);
        }

        .toggle-text {
            font-weight: bold;
        }

        .toggle-text-yes {
            color: green;
        }

        .toggle-text-no {
            color: red;
        }

        .accordion-heading {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .accordion-title {
            margin-bottom: 0.5rem;
        }
    </style>
    <style>
        .row {
            &:first-child {
                padding-top: 20px;
            }
        }

        .cat-title {
            display: inline-block;
            padding: 5px;
        }

        .cat-actions {
            display: inline-block;
            background-color: white;
            padding: 3px;
            margin-left: 10px;

            button {
                padding: 5px;
                line-height: 26px;
                box-shadow: none;
                color: black;
                background-color: transparent;
            }
        }
    </style>
    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        .col-md-8,
        .col-md-4 {
            flex: 1;
        }

        .field-wrapper {
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 2px;
        }
    </style>
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
                    <form action="/editInvoice/{{ $invoice->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3>Tambah Faktur<button type="button"
                                                    style="border: none; background:none;">☆</button></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Faq start -->
                                        <div class="accordion" id="faqAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="accordion-heading">
                                                            <h6 class="accordion-title">Perusahaan</h6>
                                                            <p class="accordion-description">Ubah alamat, logo, dan
                                                                informasi lain perusahaanmu.</p>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                    <div class="accordion-body">
                                                        <div class="flex-row row">
                                                            <div class="col-md-8">
                                                                <div class="d-flex flex-column">
                                                                    <div class="field-wrapper">
                                                                        <input class="form-control" type="text"
                                                                            name="title"
                                                                            value="{{ $invoice -> title }}">
                                                                        <div class="field-placeholder">Judul</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="d-flex flex-column">
                                                                    <div class="field-wrapper">
                                                                        <input class="form-control" type="text"
                                                                            name="subtitle" id="subjudul"
                                                                         value="{{ $invoice->subtitle }}""
                                                                            placeholder="Masukkan Subjudul">
                                                                        <div class="field-placeholder">Subjudul</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-row">
                                                            <div class="col-md-8">
                                                                <div class="d-flex">
                                                                    <div class="flex-grow-1">
                                                                        <div class="field-wrapper">
                                                                            <input class="form-control" type="file"
                                                                                name="logo" id="logo">
                                                                            <div class="field-placeholder">Logo</div>
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
                                    <div class="" style="margin-top: 2%;">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                            style="margin-bottom: 1%;">

                                            <div style="border-bottom: solid grey 1px;">
                                                <h6>Tagihan</h6>
                                                <p>Detail penagihan muncul di faktur Anda. Tanggal Faktur digunakan di
                                                    dasbor dan laporan. Pilih tanggal yang Anda harapkan untuk dibayar
                                                    sebagai Tanggal Jatuh Tempo.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="field-wrapper mb-3 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12"
                                            style="margin-left: initial;height: 76px;margin-right: -1%;">
                                            <select class="select-single js-states" name="customer_id"
                                                title="Select Product Category" data-live-search="true">
                                                <option disabled selected>Pilih Salah Satu</option>
                                                @foreach ($customer as $customer)
                                                    <option value="{{ $customer->id }}" {{($customer->id==$invoice->customer_id)? "selected" : ""}} >{{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="field-placeholder">Pelanggan <span
                                                    class="text-danger">*</span></div>
                                        </div>
                                        <div class=" col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 d-flex">
                                            <div class="col-6 ml-5 mr-5" style="margin-right:1%">
                                                <div class="field-wrapper">
                                                    <div class="input-group">
                                                        <input type="text" style="z-index:auto"
                                                            class="form-control datepicker" name="start_date"
                                                            id="date">
                                                        <span class="input-group-text">
                                                            <i class="icon-calendar1"></i>
                                                        </span>
                                                    </div>
                                                    <div class="field-placeholder">Tanggal Faktur<span
                                                            class="text-danger">*</span></div>
                                                </div>
                                                <div class="field-wrapper mb-3" style="margin-top: 16.5px">
                                                    <select class="select-single js-states" name="end_date"
                                                        title="Select Product Category" data-live-search="true">
                                                        <option selected>Jatuh tempo dalam 15 hari</option>
                                                        <option>Jatuh tempo dalam 30 hari</option>
                                                        <option>Jatuh tempo dalam 45 hari</option>
                                                        <option>Jatuh tempo dalam 60 hari</option>
                                                        <option>Jatuh tempo dalam 90 hari</option>
                                                        <option>Jatuh tempo saat diterima</option>
                                                    </select>
                                                    <div class="field-placeholder">Tanggal Pembayaran <span
                                                            class="text-danger">*</span></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="field-wrapper mb-3">
                                                    <input class="form-control" name="invoice_number" value="{{ $invoice->invoice_number  }}" id="increment-input" type="text"
                                                        placeholder="Masukkan Nomor Faktur">
                                                    <div class="field-placeholder">Nomor Faktur <span
                                                            class="text-danger">*</span></div>
                                                </div>
                                                <div class="field-wrapper mb-3">
                                                    <input class="form-control" name="order_quantity" value="{{ $invoice->order_quantity }}" type="number"
                                                        placeholder="Masukkan Jumlah Pesanan">
                                                    <div class="field-placeholder">Jumlah Pesanan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <button class="edit-icon"
                                                                style="background-color: transparent;border:none"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                    viewBox="0 -960 960 960" width="20">
                                                                    <path
                                                                        d="M180-180h44l443-443-44-44-443 443v44Zm614-486L666-794l42-42q17-17 42-17t42 17l44 44q17 17 17 42t-17 42l-42 42Zm-42 42L248-120H120v-128l504-504 128 128Zm-107-21-22-22 44 44-22-22Z" />
                                                                </svg>
                                                            </button>
                                                            Item
                                                        </th>
                                                        <th>Deskripsi</th>
                                                        <th>Kuantitas</th>
                                                        <th>Harga</th>
                                                        <th>Pajak</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>


                                                </thead>
                                                    <tbody id="table-body">
                                                        <input type="hidden" value="{{ $invoice->id }}" id="invoiceId" name="invoice_id">
                                                        @foreach ($data as $index => $item)
                                                        <tr data-row-index="{{ $index }}">
                                                                
                                                            <td>
                                                                <div class="field-wrapper m-0">
                                                                    <select class="item-dropdown ex-dropdown-input drop-items"
                                                                    name="item_id[]">
                                                                    @foreach ( $items as $data )
                                                                    <option value="{{ $data->id }}" {{($data->id==$item->ItemId)? "selected" : ""}} >{{ $data->name }}</option>                                                                    
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="field-wrapper m-0">
                                                                    <input type="text" value="{{ $item->description }}" style="border-radius:2px"
                                                                        name="description[]" class="form-control drop-description">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="field-wrapper m-0">
                                                                    <input type="number" value="{{ $item->quantity }}" style="border-radius:2px"
                                                                        name="quantity[]"
                                                                        class="quantity-input form-control drop-quantity" oninput="updateTotal(this)">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="field-wrapper m-0">
                                                                    <input type="number" style="border-radius:2px"
                                                                    name="price[]" value="{{ $item->price }}" class="form-control drop-price" oninput="updateTotal(this)">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="pajak-wrapper">
                                                                    <div
                                                                        class="field-wrapper m-0 mb-1 pajak-input-wrapper">
                                                                        @if ($item->item->tax_id != null)
                                                                        <input type="text" name="tax_id[]" class="form-control drop-tax-amount" value="{{ $item->item->tax->name }}({{ $item->item->tax->tax_amount }})" data-taxAmount="{{ $item->item->tax->tax_amount }}" oninput="updateTotal(this)" readonly>
                                                                        @else
                                                                        <input type="text" name="tax_id[]" class="form-control drop-tax-amount"  value="0" oninput="updateTotal(this)" readonly>
                                                                    @endif                                                                  
                                                                    </div>
                                                                
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="field-wrapper m-0">
                                                                    <input type="number" style="border-radius:2px"
                                                                        name="amount[]" value="{{ $item->amount }}" oninput="updateTotal(this)" class="form-control drop-amount" readonly>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="table-actions">
                                                                    <button type="button" class="btn btn-light delete-row drop-delete">
                                                                        <i class="icon-trash-2"></i>
                                                                    </button>
                                                                </div>
                                                        </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5"></td>
                                                        <td colspan="2">
                                                            <p>Subtotal = <span id="total-amount">{{ isset($invoice) ? 'Rp ' . $invoice->totalAmount : 'N/A' }}</span></p>
                                                            <a href="#" class="toggle-link button-tagihan" data-target=".toggle-content">
                                                              <p>Discount = <span id="total-discount">{{ isset($invoice) ? 'Rp ' . $invoice->totalDiscount : 'N/A' }}</span></p>
                                                            </a>
                                                            <div class="toggle-content field-wrapper" style="width:40%">
                                                              <input type="text" style="border-radius:2px" class="discount form-control" oninput="updateTotal(this)" value="{{ isset($invoice) ? $invoice->discount : 0 }}" name="discount">
                                                            </div>
                                                            <p>Total Pajak = <span id="total-tax">{{ isset($invoice) ? 'Rp ' . $invoice->totalTax : 'N/A' }}</span></p>
                                                            <h5 class="mt-2">Total = <b id="total">{{ isset($invoice) ? 'Rp ' . $invoice->totalPay : 'N/A' }}</b></h5>
                                                          </td>
                                                          
                                                          
                                                        </tr>
                                                      <input type="hidden" value="{{ $invoice->totalTax }}" class="total-tax" name="totalTax">
                                                      <input type="hidden" value="{{ $invoice->totalDiscount }}" class="total-discount" name="totalDiscount">
                                                      <input type="hidden" value="{{ $invoice->total_pay }}" class="total" name="totalPay">
                                                      <input type="hidden" value="{{ $invoice->totalAmount }}" class="total-amount" name="totalAmount">
                                                </tfoot>
                                            </table>

                                            <button class="btn btn-primary" type="button" id="add-row">Tambah
                                                Baris</button>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Tambah Item
                                            </button>

                                            <!-- Modal start -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="margin-top: -20%;">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="field-wrapper m-0">
                                                                    <label for="nama">Nama</label>
                                                                    <input type="text" name="nama"
                                                                        style="border-radius:2px"
                                                                        placeholder="Masukan nama item"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="field-wrapper m-0">
                                                                    <label for="nama">Harga Jual</label>
                                                                    <input type="text" name="Harga"
                                                                        style="border-radius:2px"
                                                                        placeholder="Masukan harga item"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="field-wrapper m-0">
                                                                    <label for="nama">kategori</label>
                                                                    <input type="text" name="kategori"
                                                                        style="border-radius:2px"
                                                                        placeholder="Masukan nama item"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="field-wrapper ">
                                                                    <label for="nama">Pajak</label>
                                                                    <input type="text" name="Pajak"
                                                                        style="border-radius:2px"
                                                                        placeholder="Masukan nama item"
                                                                        id="nama"class="form-control">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal end -->
                                            <!-- Modal start -->
                                            <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="margin-top: -20%;">
                                                        <div class="modal-header" style="margin-bottom: -1%">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Kolom
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="field-wrapper m-0">
                                                                    <label for="nama">Nama Item</label>
                                                                    <select class="select-single js-states"
                                                                        title="Select Product Category"
                                                                        data-live-search="true">
                                                                        <option>Item</option>
                                                                        <option>Layanan</option>
                                                                        <option>Produk</option>
                                                                    </select>

                                                                </div>
                                                                <!--  -->
                                                                <div class="field-wrapper m-0">
                                                                    <label for="nama">Nama Harga</label>
                                                                    <select class="select-single js-states"
                                                                        title="Select Product Category"
                                                                        data-live-search="true">
                                                                        <option>Harga</option>
                                                                        <option>Tarif</option>
                                                                    </select>

                                                                </div>
                                                                <label for="nama">Nama Kuantitas</label>
                                                                <div class="field-wrapper m-0"
                                                                    style="display: flex; flex-direction: row;">
                                                                    <select class="select-single js-states"
                                                                        title="Select Product Category"
                                                                        onchange="showInputField(this)">
                                                                        <option>Kuantitas</option>
                                                                        <option>Khusus</option>
                                                                    </select>
                                                                    <div id="customInput"
                                                                        style="display: none; margin-left: 10px;">
                                                                        <input type="text" class=""
                                                                            placeholder="Masukan">
                                                                    </div>
                                                                </div>


                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 1%">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <label for="judul" class="field-label">Catatan</label>
                                        <textarea class="form-control" name="notes" placeholder="Masukan Catatan" rows="2">{{ $invoice->notes }}</textarea>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                            </div>
                            <!-- Row end -->
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item" style="margin-top: 1%">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="accordion-heading">
                                                <h6 class="accordion-title">Opsi Lanjutan</h6>
                                                <p class="accordion-description">Pilih kategori, tambahkan, atau edit
                                                    footer, dan tambahkan lampiran ke invoice-recurring.</p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <div class="d-flex flex-wrap row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="field-wrapper" style="height: 88px">
                                                        <input class="form-control" type="file" name="attachment"
                                                            id="judul"
                                                            style="border-radius: 2px; margin-bottom: 10px; margin-right: 10%">
                                                        <div class="field-placeholder">Lampiran</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="field-wrapper mb-3">
                                                        <select class="select-single js-states" name="category_id"
                                                            title="Select Product Category" data-live-search="true">
                                                            <option disabled selected>Pilih Salah Satu</option>
                                                            @foreach ($category as $data)
                                                                <option value="{{ $data->id }}"  {{($data->id==$invoice->category_id)? "selected" : ""}}  >
                                                                    {{ $data->name }}</option>
                                                            @endforeach
                                                            <option><button type="button">Kategori Baru</button>
                                                            </option>
                                                        </select>
                                                        <div class="field-placeholder">Kategori <span
                                                                class="text-danger">*</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-8"
                                                    style="width: 100%; height: auto; margin-top: -8%;">
                                                    <div class="field-wrapper"
                                                        style="width: 100%; height: auto; margin-top:3%">
                                                        <textarea class="form-control" name="footer" placeholder="Masukan Catatan" rows="2">{{ $invoice->footer }}</textarea>
                                                        <div class="field-placeholder">Footer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                <div class="d-flex justify-content-end mt-4">
                                    <button class="btn btn-outline-secondary1" type="submit"
                                        style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
                                    <button class="btn btn-primary" onclick="create()"
                                        style="border-radius: 2px">Simpan</button>
                                </div>
                            </div>
                            <div class="app-footer">© Uni Pro Admin 2021</div>
                        </div>

                    </form>

                </div>
            </div>

            <!-- Card end -->

        </div>

    </div>

    <!-- Row end -->

    </div>

    <!-- Content wrapper end -->

    <!-- App Footer start -->

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


    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <!-- Bootstrap Select JS -->
    <script src="{{ asset('Gmbslagi/vendor/bs-select/bs-select.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/bs-select/bs-select-custom.js') }}"></script>

    <!-- Bootstrap Select CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- <script>
$(document).ready(function() {
  // Mengambil data item dari server
  $.ajax({
    url: '/get-items-data', // Gantilah '/get-items-data' dengan URL endpoint yang sesuai di aplikasi Anda
    type: 'GET',
    dataType: 'json',
    success: function(response) {
      if (response.success) {
        var itemsData = response.data; // Data item yang telah diambil

        // Menghapus opsi sebelumnya, jika ada
        $('#item-dropdown').empty();

        // Menambahkan opsi item ke dalam dropdown
        itemsData.forEach(function(item) {
          var option = $('<option>').val(item.id).text(item.name);
          $('#item-dropdown').append(option);
        });

        console.log('Data item berhasil diambil dan ditampilkan di HTML');
      } else {
        console.log(response.message);
      }
    },
    error: function(xhr, status, error) {
      console.log(error);
    }
  });
});

    </script> --}}

    <script>
// Event listener saat input quantity, price, atau tax berubah
$(document).on('input', '.quantity-input, [name^="price"], [name^="tax_id"]', function() {
  updateTotal(this);
});

// Event listener saat tombol "Add Row" di klik
document.getElementById('add-row').addEventListener('click', function() {
  var tableBody = document.getElementById('table-body');
  var newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td>
      <div class="field-wrapper m-0">
        <select class="item-dropdown ex-dropdown-input" name="item_id[]">
          <!-- Opsi item akan ditambahkan secara dinamis menggunakan JavaScript -->
        </select>
      </div>
    </td>
    <td>
      <div class="field-wrapper m-0">
        <input type="text" style="border-radius:2px" name="description[]" class="form-control">
      </div>
    </td>
    <td>
      <div class="field-wrapper m-0">
        <input type="number" oninput="updateTotal(this)" style="border-radius:2px" name="quantity[]" class="quantity-input form-control">
      </div>
    </td>
    <td>
      <div class="field-wrapper m-0">
        <input type="number" style="border-radius:2px" name="price[]" class="form-control">
      </div>
    </td>
    <td>
      <div id="pajak-wrapper">
        <div class="field-wrapper m-0 mb-1 pajak-input-wrapper">
          <input type="text" oninput="updateTotal(this)" name="tax_id[]" class="form-control" readonly> <br>
        </div>
      </div>
    </td>
    <td>
      <div class="field-wrapper m-0">
        <input type="number" style="border-radius:2px" name="amount[]" class="form-control drop-amount" oninput="updateTotal(this)" readonly>
      </div>
    </td>
    <td>
      <div class="table-actions">
        <button type="button" class="btn btn-light delete-row">
          <i class="icon-trash-2"></i>
        </button>
      </div>
    </td>
  `;
  tableBody.appendChild(newRow);

  // Ambil data item dari server
  $.ajax({
    url: '/get-items-data', // Ganti '/get-items-data' dengan URL endpoint yang sesuai di aplikasi Anda
    type: 'GET',
    dataType: 'json',
    success: function(response) {
      if (response.success) {
        var itemsData = response.data; // Data item yang telah diambil

        // Temukan dropdown item terbaru dalam baris yang ditambahkan
        var itemDropdown = newRow.querySelector('.item-dropdown');

        // Hapus opsi sebelumnya, jika ada
        while (itemDropdown.firstChild) {
          itemDropdown.removeChild(itemDropdown.firstChild);
        }

        // Tambahkan opsi "Pilih Item" sebagai opsi default
        var defaultOption = document.createElement('option');
        defaultOption.value = '';
        defaultOption.text = 'Pilih Item';
        itemDropdown.appendChild(defaultOption);

        // Tambahkan opsi item ke dalam dropdown
        itemsData.forEach(function(item) {
          var option = document.createElement('option');
          option.value = item.id;
          option.text = item.name;
          itemDropdown.appendChild(option);
        });

        // Inisialisasi TomSelect pada elemen dropdown item
        new TomSelect(itemDropdown, {
          plugins: ['dropdown_input'],
          create: true,
          allowEmptyOption: true,
          sortField: {
            field: 'text',
            direction: 'asc',
          },
        });

        console.log('Data item berhasil diambil dan ditampilkan di HTML');
      } else {
        console.log(response.message);
      }
    },
    error: function(xhr, status, error) {
      console.log(error);
    },
  });
  $(document).on('change', '.item-dropdown', function() {
    var selectedItemId = $(this).val();
    var row = $(this).closest('tr');

    if (selectedItemId !== '') {
      $.ajax({
        url: '/get-item-data/' + selectedItemId,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            var itemData = response.data;
            var tax = response.tax;
            var taxAmount = response.taxAmount;
            var combinedTax = tax + ' (' + taxAmount / 100 + ')';

            row.find('input[name="description[]"]').val(itemData.description);
            console.log(itemData.description)
            row.find('input[name="quantity[]"]').val(itemData.quantity);
            row.find('input[name="price[]"]').val(itemData.selling_price);

            if (tax === 'null') {
            row.find('input[name="tax_id[]"]').val('null').data('taxamount', 0);
            } else {
            row.find('input[name="tax_id[]"]').val(combinedTax).data('taxamount', taxAmount);
            }


            console.log(response);
          } else {
            console.log(response.message);
          }
        },
        error: function(xhr, status, error) {
          console.log(error);
        }
      });
    } else {
      console.log('Pilih Item dipilih');
    }
  });


  // Hubungkan event listener pada input jumlah, harga, dan pajak pada baris yang ditambahkan
  $(newRow).on('input', '.quantity-input, [name^="price"], [name^="tax_id"]', function() {
    updateTotal(this);
  });
});

function updateTotal(input) {
  var row = $(input).closest('tr');
  var quantity = parseFloat(row.find('.quantity-input').val()) || 0;
  var price = parseFloat(row.find('[name^="price"]').val()) || 0;
  var taxAmount = parseFloat(row.find('[name^="tax_id"]').data('taxamount')) || 0;

  var amount = quantity * price;
  var tax = amount * (taxAmount / 100);
  var total = amount - tax;

  row.find('.drop-amount').val(total.toFixed(2));
  updateTotalInvoice();
}

function updateTotalInvoice() {
  var totalAmount = 0;
  var totalDiscount = parseFloat($('.discount').val()) || 0;
  var totalTax = 0;

  $('.drop-amount').each(function() {
    var amount = parseFloat($(this).val()) || 0;
    totalAmount += amount;
    var taxAmount = parseFloat($(this).closest('tr').find('[name^="tax_id"]').data('taxamount')) || 0;
    totalTax += amount * (taxAmount / 100);
  });

  var subtotal = totalAmount;
  var discountAmount = subtotal * (totalDiscount / 100);
  var totalPay = subtotal - discountAmount;

  $('#total-amount').text('Rp ' + subtotal.toFixed(2));
  $('#total-discount').text('Rp ' + discountAmount.toFixed(2));
  $('#total-tax').text('Rp ' + totalTax.toFixed(2));
  $('#total').text('Rp ' + totalPay.toFixed(2));

  $('.total-amount').val(subtotal.toFixed(2));
  $('.total-discount').val(discountAmount.toFixed(2));
  $('.total-tax').val(totalTax.toFixed(2));
  $('.total').val(totalPay.toFixed(2));
}
// Event listener saat tombol "delete" di klik
$(document).on('click', '.delete-row', function() {
  var deletedRow = $(this).closest('tr');
  var deletedAmount = parseFloat(deletedRow.find('input[name="amount[]"]').val());
  var totalAmountElement = document.getElementById('total-amount');
  var totalAmount = parseFloat(totalAmountElement.textContent.replace('Rp ', ''));
  var totalTaxElement = document.getElementById('total-tax');
  var totalTax = parseFloat(totalTaxElement.textContent.replace('Rp ', ''));
  var totalDiscountElement = document.getElementById('total-discount');
  var totalDiscount = parseFloat(totalDiscountElement.textContent.replace('Rp ', ''));

  if (!isNaN(deletedAmount)) {
    totalAmount -= deletedAmount;
    totalTax -= deletedAmount * (deletedRow.find('[name^="tax_id"]').data('taxamount') / 100);
  }

  var discountInput = document.querySelector('input[name="discount"]');
  var discount = parseFloat(discountInput.value);
  if (isNaN(discount)) {
    totalDiscount = 0;
  }

  var total = totalAmount - totalDiscount;
  totalAmountElement.textContent = 'Rp ' + totalAmount.toFixed(2);
  totalTaxElement.textContent = 'Rp ' + totalTax.toFixed(2);
  totalDiscountElement.textContent = 'Rp ' + totalDiscount.toFixed(2);
  $('#total').text('Rp ' + total.toFixed(2));

  deletedRow.remove();

  if ($('input[name="quantity[]"]').length === 0) {
    resetTotals();
  }
});

    function resetTotals() {
    var totalAmount = 0;
    var totalDiscount = 0;

    var totalAmountElement = document.getElementById('total-amount');
    totalAmountElement.textContent = 'Rp. ' + totalAmount.toFixed(2);
    var totalTaxElement = document.getElementById('total-tax');
    totalTaxElement.textContent = 'Rp. 0.00';
    var totalDiscountElement = document.getElementById('total-discount');
    totalDiscountElement.textContent = 'Rp. ' + totalDiscount.toFixed(2);
    $('#total').text('Rp. ' + totalAmount.toFixed(2));
    $('input[name="totalAmount"]').val(totalAmount.toFixed(2));
    $('input[name="totalTax"]').val('0.00');
    $('input[name="totalDiscount"]').val(totalDiscount.toFixed(2));
    $('input[name="totalPay"]').val(totalAmount.toFixed(2));

  }
      </script>
            
    <script>
        $(document).ready(function() {
          $('.toggle-link').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $(target).toggle('toggle');
          });
        });
      </script>
<script>
// Inisialisasi TomSelect pada setiap elemen dropdown item
var itemDropdowns = document.querySelectorAll('.item-dropdown');

itemDropdowns.forEach(function(itemDropdown) {
  new TomSelect(itemDropdown, {
    plugins: ['dropdown_input'],
    create: true,   
    allowEmptyOption: true,
    sortField: {
      field: 'text',
      direction: 'asc',
    },
  });
});

  </script>
    <script>
    </script>

    <!-- Date Range JS -->
    <script src="{{ asset('Gmbslagi/vendor/daterange/daterange.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/daterange/custom-daterange.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
    </script>


    <script>
        // Fungsi untuk menghapus pajak yang baru ditambahkan
        function deletePajak(event) {
            var pajakInputWrapper = event.target.closest('.pajak-input-wrapper');
            pajakInputWrapper.remove();
        }

        // Event listener untuk tombol hapus pajak
        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('delete-pajak')) {
                deletePajak(event);
            }
        });

        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('add-pajak')) {
                var pajakWrapper = event.target.closest('#pajak-wrapper');
                var pajakInputWrapper = pajakWrapper.querySelector('.pajak-input-wrapper');

                var newPajakInputWrapper = pajakInputWrapper.cloneNode(true);
                var deletePajakButton = document.createElement('button');
                deletePajakButton.classList.add('btn', 'btn-light', 'delete-pajak');
                deletePajakButton.innerHTML = '<i class="icon-trash-2"></i> Hapus Pajak';
                deletePajakButton.style.width = event.target.offsetWidth +
                    'px'; // Menyesuaikan lebar tombol dengan tombol "Tambah Pajak"
                deletePajakButton.style.marginTop = '3%'; // Menambahkan margin-top 3%
                newPajakInputWrapper.appendChild(deletePajakButton);

                pajakWrapper.appendChild(newPajakInputWrapper);
            }
        });
    </script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

</html>
