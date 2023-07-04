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
		<title>Unknown | Tambah-Tagihan</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/css/bootstrap.min.css")}}">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/fonts/style.css")}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/css/main.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Mega Menu -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/megamenu/css/megamenu.css")}}">

		<!-- Search Filter JS -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.css")}}">
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css")}}"/>
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/daterange/daterange.css")}}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/bs-select/bs-select.css") }}" />

        <style>

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
      .ts-control{
        z-index: auto;
      }
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
				<div class="page-header">
					
					<!-- Row start -->
					<div class="row gutters">
						@include('layouts.header')

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
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<form action="{{ route('saveBill') }}">
                                <!-- Card start -->
								<div class="card">
                                    <div class="card-header">
                                      <div class="card-title">
                                        <h3>Tambah Tagihan<button type="button" style="border: none; background:none;">☆</button></h3>
                                      </div>
                                    </div>
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-md-4">
                                          <div class="field-wrapper mb-3">
                                            <select class="select-single js-states" title="Select Product Category" name="suppliier_id" data-live-search="true">
                                              <option value="" selected disabled >Pilih Pemasok</option>
                                              @foreach ($supplier as $item )
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                              @endforeach
                                            </select>              
                                            <div class="field-placeholder">Pemasok <span class="text-danger">*</span></div>
                                          </div>
                                        </div>
                                        <div class="col-md-8">
                                          <div class="row" style="margin-top: -3%">
                                            <div class="col-md-6">
                                              <div class="field-wrapper mb-3">
                                                <input id="tanggal-tagihan" name="start_date" class="form-control datepicker" type="text">
                                                <div class="field-placeholder">Tanggal Tagihan<span class="text-danger">*</span></div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="field-wrapper mb-3">
                                                <select class="select-single js-states" name="end_date" title="Select Product Category" data-live-search="true">
                                                    <option selected>Jatuh tempo dalam 15 hari</option>
                                                    <option>Jatuh tempo dalam 30 hari</option>
                                                    <option>Jatuh tempo dalam 45 hari</option>
                                                    <option>Jatuh tempo dalam 60 hari</option>
                                                    <option>Jatuh tempo dalam 90 hari</option>
                                                    <option>Jatuh tempo saat diterima</option>
                                                </select>              
                                                <div class="field-placeholder">Tanggal Pembayaran <span class="text-danger">*</span></div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="field-wrapper mb-3">
                                                <input id="increment-input" name="bill_number" class="form-control" type="text" placeholder="Masukkan Nomor Faktur">
                                                <div class="field-placeholder">Nomor Faktur<span class="text-danger">*</span></div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="field-wrapper mb-3">
                                                <input id="nomor-pesanan" name="order_quantity" class="form-control" type="text" placeholder="Masukkan Nomor Pesanan">
                                                <div class="field-placeholder">Nomor Pesanan</div>
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
                                                            <button class="edit-icon" style="background-color: transparent;border:none" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                              <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                                                <path d="M180-180h44l443-443-44-44-443 443v44Zm614-486L666-794l42-42q17-17 42-17t42 17l44 44q17 17 17 42t-17 42l-42 42Zm-42 42L248-120H120v-128l504-504 128 128Zm-107-21-22-22 44 44-22-22Z"/>
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
                                                      <tr>
                                                          <td>
                                                              <div class="field-wrapper m-0">
                                                                  <select class="item-dropdown ex-dropdown-input drop-items"
                                                                      name="item_id[]">
                                                                      <!-- Opsi item akan ditambahkan secara dinamis menggunakan JavaScript -->
                                                                  </select>
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="field-wrapper m-0">
                                                                  <input type="text" style="border-radius:2px"
                                                                      name="description[]" class="form-control drop-description">
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="field-wrapper m-0">
                                                                  <input type="number" style="border-radius:2px"
                                                                      name="quantity[]"
                                                                      class="quantity-input form-control drop-quantity">
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="field-wrapper m-0">
                                                                  <input type="number" style="border-radius:2px"
                                                                      name="price[]" class="form-control drop-price">
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div id="pajak-wrapper">
                                                                  <div
                                                                      class="field-wrapper m-0 mb-1 pajak-input-wrapper">
                                                                      <input type="text" name="tax_id[]"
                                                                           class="form-control"
                                                                          id="" readonly> <br>
                                                                          
                                                                  </div>
                                                                 
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="field-wrapper m-0">
                                                                  <input type="number" style="border-radius:2px"
                                                                      name="amount[]" class="form-control drop-amount" readonly>
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
                                                  </tbody>
  
                                                  <tfoot>
                                                      <tr>
                                                          <td colspan="5"></td>
                                                          <td colspan="2">
                                                            <p>Subtotal = <span id="total-amount"></span></p>
                                                            <a href="#" class="toggle-link button-tagihan" data-target=".toggle-content"><p>Discount = <span id="total-discount"></span></p></a>
                                                            <div class="toggle-content field-wrapper" style="width:40%;display:none">
                                                              <input type="text" style="border-radius:2px" class="discount form-control" name="discount">
                                                            </div>
                                                            <p>Total Pajak = <span id="total-tax"></span></p>
                                                            <h5 class="mt-2">Total = <b id="total"></b></h5>
                                                          </td>
                                                          </tr>
                                                        <input type="hidden" class="total-tax" name="totalTax">
                                                        <input type="hidden" class="total-discount" name="totalDiscount">
                                                        <input type="hidden" class="total" name="totalPay">
                                                        <input type="hidden" class="total-amount" name="totalAmount">
                                                  </tfoot>         
                                               </table>
                                                    
                                                    <button class="btn btn-primary" id="add-row">Tambah Baris</button>                                                  
                                                     <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                      Tambah Item
                                                    </button>
  
                                                    <!-- Modal start -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content" style="margin-top: -20%;">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form>
                                                            <div class="field-wrapper m-0">
                                                                <label for="nama">Nama</label>
                                                              <input type="text" name="nama" style="border-radius:2px" placeholder="Masukan nama item" id="nama"class="form-control">
                                                            </div>
                                                            <div class="field-wrapper m-0">
                                                                <label for="nama">Harga Jual</label>
                                                              <input type="text" name="Harga"  style="border-radius:2px" placeholder="Masukan harga item" id="nama"class="form-control">
                                                            </div>
                                                            <div class="field-wrapper m-0">
                                                                <label for="nama">kategori</label>
                                                              <input type="text" name="kategori" style="border-radius:2px" placeholder="Masukan nama item" id="nama"class="form-control">
                                                            </div>
                                                            <div class="field-wrapper ">
                                                                <label for="nama">Pajak</label>
                                                              <input type="text" name="Pajak" style="border-radius:2px" placeholder="Masukan nama item" id="nama"class="form-control">
                                                            </div>
                                                          </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!-- Modal end -->
                                                      <!-- Modal start -->
                                                  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content" style="margin-top: -20%;">
                                                    <div class="modal-header" style="margin-bottom: -1%">
                                                        <h5 class="modal-title" id="exampleModalLabel" >Edit Kolom</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form>
                                                         <div class="field-wrapper m-0">
                                                          <label for="nama">Nama Item</label>
                                                            <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                                              <option>Item</option>
                                                              <option>Layanan</option>
                                                              <option>Produk</option>
                                                            </select>
                                                          
                                                         </div>
<!--  -->                                                  <div class="field-wrapper m-0">
                                                          <label for="nama">Nama Harga</label>
                                                          <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                                            <option>Harga</option>
                                                            <option>Tarif</option>
                                                          </select>

                                                        </div>
                                                        <label for="nama">Nama Kuantitas</label>
                                                        <div class="field-wrapper m-0" style="display: flex; flex-direction: row;">
                                                          <select class="select-single js-states" title="Select Product Category" onchange="showInputField(this)">
                                                            <option>Kuantitas</option>
                                                            <option>Khusus</option>
                                                          </select>
                                                          <div id="customInput" style="display: none; margin-left: 10px;">
                                                            <input type="text" class="" placeholder="Masukan">
                                                          </div>
                                                        </div>
                                                        
                                                          
                                                        </form>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <!-- Modal end -->
                                                    </div>
                                                </div>
                                              </div>
                                            <!-- Row end -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 2%">
												
                                              <!-- Field wrapper start -->
                                              <div class="field-wrapper">
                                                <label for="judul" class="field-label">Catatan</label>
                                                <textarea class="form-control" placeholder="Masukan Catatan" rows="2"></textarea>
                                              </div>
                                              <!-- Field wrapper end -->                     
                                            </div>
                                            <div class="accordion" id="faqAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="accordion-heading">
                                                            <h6 class="accordion-title">Opsi Lanjutan</h6>
                                                            <p class="accordion-description">Pilih kategori, tambahkan, atau edit footer, dan tambahkan lampiran ke invoice-recurring.</p>
                                                          </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                    <div class="accordion-body">
                                                        <div class="d-flex row">
                                                          <div class="flex-grow-0 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <div class="field-wrapper" style="height: 88px">
                                                              <input class="form-control" type="file" name="attachment" id="judul" style="border-radius: 2px; margin-bottom: 10px; margin-right: 10%">
                                                              <div class="field-placeholder">Lampiran</div>
                                                            </div>
                                                          </div>
                                                          <div class="flex-grow-0 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="z-index:auto" >
                                                            <div class="field-wrapper mb-3">
                                                              <select class="select-single js-states" name="category_id" title="Select Product Category" data-live-search="true">
                                                                  <option value="" selected>pilih category</option>
                                                                @foreach ( $category as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                @endforeach
                                                              </select>              
                                                              <div class="field-placeholder">Kategori <span class="text-danger">*</span></div>
                                                              </div>
                                                            </div>
                                                        
                                                        </div>
                                                      </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                              <div class="d-flex justify-content-end mt-4">
                                                  <button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
                                                  <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                                              </div>
                                          </div>
                                          <div class="app-footer">© Uni Pro Admin 2021</div>
                                        </div>
                                        <!-- Faq end -->

                                    </div>
                                </div>
								<!-- Card end -->
              </form>
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
				



        	<!-- Bootstrap Select JS -->
		<script src="{{ asset("Gmbslagi/vendor/bs-select/bs-select.min.js") }}"></script>
		<script src="{{ asset("Gmbslagi/vendor/bs-select/bs-select-custom.js") }}"></script>

		<!-- Main Js Required -->
		<script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js")}}"></script>
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
 $(document).ready(function() {
// Mengambil data item dari server
$.ajax({
url: '/get-items-data-bill',
type: 'GET',
dataType: 'json',
success: function(response) {
  if (response.success) {
    var itemsData = response.data;

    $('.item-dropdown').empty();
    var defaultOption = $('<option>').val('').text('Pilih Item');
    $('.item-dropdown').append(defaultOption);

    itemsData.forEach(function(item) {
      var option = $('<option>').val(item.id).text(item.name).data('tax-id', item.tax_id).attr('name', item.name);
      $('.item-dropdown').append(option);
    });

    new TomSelect('.item-dropdown', {
      plugins: ['dropdown_input'],
      create: true,
      allowEmptyOption: true,
      sortField: {
        field: "text",
        direction: "asc",
      }
    });
    var incrementInput = $("#increment-input");
      var companyId = parseInt(response.company);

    if (isNaN(incrementInput.val())) {
    incrementInput.val('1');
    } else {
    var formattedCompanyId = String(companyId + 1).padStart(3, '0');
    incrementInput.val( 'TGH - ' + formattedCompanyId);
    }

console.log(incrementInput);
      } else {
        console.log(response.message);
      }
    },
    error: function(xhr, status, error) {
      console.log(error);
    }
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
          var description = response.description;
          var combinedTax = tax + ' (' + taxAmount / 100 + ')';

          row.find('input[name="description[]"]').val(itemData.description);
          row.find('input[name="quantity[]"]').val(itemData.quantity);
          row.find('input[name="price[]"]').val(itemData.purchase_price);

          if (tax === 'null') {
            row.find('input[name="tax_id[]"]').val(0);
          } else {
            row.find('input[name="tax_id[]"]').val(combinedTax).data('taxAmount', taxAmount);
          }

        } else {
          console.log(response.message);
        }
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  } else {
  }
});

$(document).on('input', 'input[name="quantity[]"], input[name="price[]"], input[name="tax_id[]"], input[name="discount"]', function() {
  updateTotals();
});

$(document).on('click', '.delete-row', function() {
  var deletedRow = $(this).closest('tr');
  var deletedAmount = parseFloat(deletedRow.find('input[name="amount[]"]').val());
  var totalAmountElement = document.getElementById('total-amount');
  var totalAmount = parseFloat(totalAmountElement.textContent.replace('Rp. ', ''));
  var totalTaxElement = document.getElementById('total-tax');
  var totalTax = parseFloat(totalTaxElement.textContent.replace('Rp. ', ''));
  var totalDiscountElement = document.getElementById('total-discount');
  var totalDiscount = parseFloat(totalDiscountElement.textContent.replace('Rp. ', ''));

  if (!isNaN(deletedAmount)) {
    totalAmount -= deletedAmount;
    totalTax -= deletedAmount * (deletedRow.data('taxAmount') / 100);
  }

  var discountInput = document.querySelector('input[name="discount"]');
  var discount = parseFloat(discountInput.value);
  if (isNaN(discount)) {
    totalDiscount = 0;
  }

  var total = totalAmount - totalDiscount;
  totalAmountElement.textContent = 'Rp. ' + totalAmount.toFixed(2);
  totalTaxElement.textContent = 'Rp. ' + totalTax.toFixed(2);
  totalDiscountElement.textContent = 'Rp. ' + totalDiscount.toFixed(2);
  $('#total').text('Rp. ' + total.toFixed(2));

  deletedRow.remove();

  if ($('input[name="quantity[]"]').length === 0) {
    resetTotals();
  }
});

function updateTotals() {
var totalAmount = 0;
var totalTax = 0;
var hasEmptyQuantity = false;

$('input[name="quantity[]"]').each(function() {
  var row = $(this).closest('tr');
  var quantity = parseFloat($(this).val());
  var price = parseFloat(row.find('input[name="price[]"]').val());
  var taxAmount = parseFloat(row.find('input[name="tax_id[]"]').data('taxAmount'));

  if (isNaN(quantity) || isNaN(price)) {
    hasEmptyQuantity = true;
    return false;
  }

  var amount = price * quantity;

  // Kurangi amount dengan pajak jika ada
  if (!isNaN(taxAmount)) {
    amount -= amount * (taxAmount / 100);
    totalTax += amount * (taxAmount / 100);
  }

  row.find('input[name="amount[]"]').val(amount.toFixed(2));
  totalAmount += amount;
});

if (hasEmptyQuantity) {
  resetTotals();
  return;
}

var discountInput = document.querySelector('input[name="discount"]');
var discount = parseFloat(discountInput.value);
var totalDiscount = isNaN(discount) ? 0 : totalAmount * (discount / 100);
var total = totalAmount - totalDiscount;

var totalAmountElement = document.getElementById('total-amount');
totalAmountElement.textContent = 'Rp. ' + totalAmount.toFixed(2);
var totalTaxElement = document.getElementById('total-tax');
totalTaxElement.textContent = 'Rp. ' + totalTax.toFixed(2);
var totalDiscountElement = document.getElementById('total-discount');
totalDiscountElement.textContent = 'Rp. ' + totalDiscount.toFixed(2);
$('#total').text('Rp. ' + total.toFixed(2));

// Update the values of the hidden input fields
$('input[name="totalAmount"]').val(totalAmount.toFixed(2));
$('input[name="totalTax"]').val(totalTax.toFixed(2));
$('input[name="totalDiscount"]').val(totalDiscount.toFixed(2));
$('input[name="totalPay"]').val(total.toFixed(2));
}

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
});

  </script>

  <!-- Date Range JS -->
  <script src="{{ asset('Gmbslagi/vendor/daterange/daterange.js') }}"></script>
  <script src="{{ asset('Gmbslagi/vendor/daterange/custom-daterange.js') }}"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  <script>
      document.getElementById('add-row').addEventListener('click', function() {
          var tableBody = document.getElementById('table-body');
          var newRow = document.createElement('tr');
          newRow.innerHTML = `
          <td>
                                                          <div class="field-wrapper m-0">
                                                              <select class="item-dropdown ex-dropdown-input"
                                                                  name="item_id[]">
                                                                  <!-- Opsi item akan ditambahkan secara dinamis menggunakan JavaScript -->
                                                              </select>
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="field-wrapper m-0">
                                                              <input type="text" style="border-radius:2px"
                                                                  name="description[]" class="form-control">
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="field-wrapper m-0">
                                                              <input type="number" style="border-radius:2px"
                                                                  name="quantity[]"
                                                                  class="quantity-input form-control">
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="field-wrapper m-0">
                                                              <input type="number" style="border-radius:2px"
                                                                  name="price[]" class="form-control">
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div id="pajak-wrapper">
                                                              <div
                                                                  class="field-wrapper m-0 mb-1 pajak-input-wrapper">
                                                                  <input type="text" name="tax_id[]"
                                                                       class="form-control"
                                                                      id="" readonly> <br>
                                                                      
                                                              </div>
                                                              <div class="add-pajak-wrapper mb-2">
                                                                  <button class="btn add-pajak" type="button"
                                                                      name="tax_id[]" style="margin-top: 1%">
                                                                      <i class="icon-plus"></i> Tambah Pajak
                                                                  </button>
                                                              </div>
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="field-wrapper m-0">
                                                              <input type="number" style="border-radius:2px"
                                                                  name="amount[]" class="form-control" readonly>
                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="table-actions">
                                                              <button class="btn btn-light delete-row">
                                                                  <i class="icon-trash-2"></i>
                                                              </button>
                                                          </div>
                                                      </td>
`;
          tableBody.appendChild(newRow);

          // Ambil data item dari server
          $.ajax({
              url: '/get-items-data-bill',  // Ganti /get-items-data' dengan URL endpoint yang sesuai di aplikasi Anda
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

                  } else {
                      console.log(response.message);
                  }
              },
              error: function(xhr, status, error) {
                  console.log(error);
              },
          });
      });
  </script>
	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->
</html>