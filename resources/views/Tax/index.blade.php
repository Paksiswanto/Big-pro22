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
	<title>Unknown | Pajak</title>


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

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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

			<!-- Page header starts -->

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
									<!-- <div class=""> -->
									<div class="card-header">
										<div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6">
											<div class="card-title">
												<h3>Pajak<button type="button" style="border: none; background:transparent;">☆</button></h3>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
											<div class="graph-day-selection" role="group" style="margin-left: -30px;margin-right: 10px;">
												<a href="{{url('add-tax')}}">
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
										<!-- <div class="dropdown icon-dots-three-vertical">
											<span></span>
											<div class="dropdown-content">
												<a href="#">
												<button type="button" style="border: none; background-color: white; color:#333; background:transparent" class="icon-download" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
													Impor
												</button>
												</a>
												<a href="#" class="icon-folder" style="color: #333">
												<button type="button" style="border: none; background-color: white; color:#333; background:transparent"> Ekspor</button>
												</a>
											</div>
										</div>      -->
									</div>

									<!-- Row start -->

									<!-- Row end -->


									</nav>
									<div class="content">
										<div class="searchcontainer">
											<i class="icon-search"></i>
											<input class="search" name="cari" type="text" placeholder="Cari Disini..." style="margin-bottom: 2%; font-size:10pt" />
										</div>
									</div>
									<div class="table-responsive">
										<div class="hidden-menu" style="display: none; background-color: #f2f2f2; font-size: 12pt; padding: 10px;">
											<p style="display: inline" id="count-display">&emsp;</p>
											&emsp;<a href="#" title="Aktifkan"> <i class="icon-check-circle" style="color:#424242 "></i> </a>
											&emsp;<a href="#" title="Nonaktifkan"> <i class="icon-do_not_disturb_alt"></i> </a>
											&emsp;<a href="#" title="Hapus"> <i class="icon-trash-2"></i> </a>
										</div>
										<table id="myTable" class="table table-hover caption-top">
											<thead>
												<tr>
													<th scope="col"> <input type="checkbox" id="select-all-checkbox"> </th>
													<th scope="col">Nama</th>
													<th scope="col">Jenis</th>
													<th scope="col">Tarif (%)</th>
													<th scope="col">Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($data as $row)
												<!-- Data 1 -->
												<tr class="table-row">
													<td name="item"><input type="checkbox" class="other-checkbox"></td>
													<td>{{ $row->name }}</td>
													<td>{{ $row->type }}</td>
													<td>{{ $row->tax_amount }}%</td>
													<td>
														<div class="menu-icons" style="font-size: 15px;">
															<a href="{{ route('tax-edit', ['id' => $row->id]) }}," class="menu-icon icon-edit-2"></a>
															<a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleterole"></a>
														</div>
													</td>
												</tr>
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
									<!-- Modal start -->
									<div class="modal fade" id="deleterole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleterole" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content" style="padding: 0px">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Hapus Pajak</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>

												<div class="modal-body">

													<p>Anda Yakin Ingin Menghapus Pajak Ini?</p>
												</div>
												<div class="modal-footer">
													@isset($row)
													<a href="{{ route('tax-delete', ['id' => $row->id]) }}"><button type="button" class="btn btn-danger" id="deleteButton">Hapus</button></a>
													@endisset
												</div>


											</div>
										</div>
									</div>
									<!-- Modal end -->
									<!-- Modal end -->

									<!-- </div> -->
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

		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>



		<!-- Main Js Required -->
		<script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>

		<script>
			$(document).ready(function() {
				$('#myTable').DataTable({
					responsive: true
				});
			});
		</script>
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
					var type = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
					var tax_amount = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

					if (
						name.includes(keyword) ||
						type.includes(keyword) ||
						tax_amount.includes(keyword)
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
		@if(Session::has('success'))
		<script>
			toastr.success('{{ Session::get('
				success ') }}');
		</script>
		@endif


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>