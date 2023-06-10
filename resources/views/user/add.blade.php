<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

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
	<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css")}}" />

	 <!-- Dropdown Search -->
	 <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/daterange/daterange.css")}}">

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
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

						<!-- Search container start -->
						<div class="search-container">

							<!-- Toggle sidebar start -->
							<div class="toggle-sidebar" id="toggle-sidebar">
								<i class="icon-menu"></i>
							</div>
							<!-- Toggle sidebar end -->

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
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

							<!-- Card start -->
							<div class="card" style="overflow: hidden">
								<div class="card-header">
									<div class="card-title">
										<h3>Undang Pengguna<button type="button" style="border: none; background:none;">☆</button></h3>
									</div>
								</div>
								<div class="card-body">

									<!-- Row start -->
									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

											<div style="border-bottom: solid grey 1px;margin-bottom:1%; margin-bottom: 2%; margin-top: 2%;">
												<h6>Informasi pribadi</h6>
												<p>Informasi kontak penyedia Anda akan muncul di tagihan dan profil mereka. Anda dapat menambahkan informasi kontak dan logo mereka untuk digunakan dalam tagihan.</p>
											</div>

										</div>
										<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">

											<!-- Field wrapper start -->
											<div class="field-wrapper">
												<input class="form-control" type="text" placeholder=" Masukan Nama">
												<div class="field-placeholder">Nama <span class="text-danger">*</span></div>
												<div class="form-text">

												</div>
											</div>
											<!-- Field wrapper end -->
											<!-- Field wrapper start -->
											<div class="field-wrapper">
												<input class="form-control" type="email" placeholder=" Masukan Email">
												<div class="field-placeholder">Email <span class="text-danger">*</span></div>
												<div class="form-text">

												</div>
											</div>
											<!-- Field wrapper end -->
										</div>
										<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" style="margin-top:-1%">
											<!-- Field wrapper start -->
											<div id="dropzone">
												<label for="judul" class="field-label">Foto<span class="text-danger">*</span></label>
												<form action="https://www.kodingwife.com/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
													<div class="dz-message needsclick">
														<button type="button" class="dz-button">Seret berkas disini untuk mengunggah</button><br>
													</div>
												</form>
											</div>
											<!-- Field wrapper end -->
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" style="margin-top: -20%">

										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

											<div style="border-bottom: solid grey 1px;margin-bottom:1%; margin-bottom: 2%; margin-top: 1%;">
												<h6>Tetapkan</h6>
												<p>Pengguna tersebut akan memiliki akses ke perusahaan yang dipilih. Anda dapat mengatur hak akses melalui halaman roles.</p>
											</div>

										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

											<!-- Field wrapper start -->
											<div class="field-wrapper-group">
                                            <div class="field-wrapper">
                                                <select class="select-multiple js-states" multiple title="Select Product Category">
                                                    <option>Unknown Company</option>


                                                </select>
                                                <div class="field-placeholder">Perusahaan<span class="text-danger">*</span></div>
                                            </div>

                                        </div>
											<!-- Field wrapper end -->

										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

											<!-- Field wrapper start -->
											<div class="field-wrapper-group">
                                            <div class="field-wrapper">
                                                <select class="select-multiple js-states" title="Select Product Category">
                                                    <option>Accountant</option>


                                                </select>
                                                <div class="field-placeholder">Peran<span class="text-danger">*</span></div>
                                            </div>

                                        </div>

											<!-- Field wrapper end -->

										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

											<div style="border-bottom: solid grey 1px;margin-bottom:1%">
												<h6>Preferensi</h6>
												<p>Pilih bahasa default untuk pengguna. Anda juga bisa tentukan untuk halaman muka setelah pengguna berhasil masuk</p>
											</div>

										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

											<!-- Field wrapper start -->

                                            <div class="field-wrapper">
                                                <select class="select-multiple js-states" title="Select Product Category">
												<option>Akun</option>
													<option>Dasbor</option>
													<option>Faktur</option>
													<option>Item</option>
													<option>Laporan</option>
													<option>PayPal Standard</option>
													<option>Pelanggan</option>
													<option>Pemasok</option>
													<option>Pembayaran Offline</option>
													<option>Penyesuaian</option>
													<option>Tagihan</option>
													<option>Transaksi</option>
													<option>Transfer</option>


                                                </select>
                                                <div class="field-placeholder">Halaman Muka<span class="text-danger">*</span></div>
                                            </div>

                                        </div>

											<!-- Field wrapper end -->


										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

											<!-- Field wrapper start -->
											<div class="field-wrapper">
                                                <select class="select-multiple js-states" title="Select Product Category">
												<option>Azərbaycan</option>
													<option>Bahasa Indonesia</option>
													<option>Bahasa Melayu</option>
													<option>Bosanski</option>
													<option>Català</option>
													<option>Dansk</option>
													<option>Duetsch</option>
													<option>Esti</option>
													<option>English (AU)</option>
													<option>English (GB)</option>
													<option>English (US)</option>
													<option>Espanol</option>
													<option>Espanol de Argentina</option>
													<option>Espanol de mexico</option>
													<option>Francais</option>
													<option>Italiano</option>

                                                </select>
                                                <div class="field-placeholder">Bahasa<span class="text-danger">*</span></div>
                                            </div>

											<!-- Field wrapper end -->

										</div>

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
											<div class="d-flex justify-content-end mt-4">
												<button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
												<a href="{{ url('confirm_password') }}"><button class="btn btn-primary" type="submit" style="border-radius: 2px" >Simpan</button></a>
											</div>
										</div>
									</div>
									<!-- Row end -->

								</div>
							</div>
							<!-- Card end -->

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

	 <!-- Dropdown Search -->
	 <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select-custom.js")}}"></script>

	<!-- Main Js Required -->
	<script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
	<script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js")}}"></script>
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

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>
