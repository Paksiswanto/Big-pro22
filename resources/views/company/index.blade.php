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
		<title>Unknown | Perusahaan</title>



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
		<style>
			.dropzone-wrapper {
				width: 100%;
				height: 300px;
			}
		</style>
		<!-- Mega Menu -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/megamenu/css/megamenu.css")}}">

		<!-- Search Filter JS -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.css")}}">
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.css")}}">
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css") }}" />
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
								<div class="" style="">
									<div class="">
										<div class="card-title"><h3>Perusahaan<button type="button" style="border: none; background:none;">☆</button></h3></div>
									</div>
									<div class="">
									<form action="{{route('update_company')}}" method="POST">
										@method('PUT')
										@csrf
										<!-- Row start -->
										<div class="row gutters">

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

												<div style="border-bottom: solid grey 1px;margin-bottom:1%;  margin-bottom: 2%; margin-top: 2%;"">
													<h6>Umum</h6>
													<p>Informasi ini terlihat dalam rekaman yang Anda buat.</p>
												</div>

											</div>

										<div class="d-flex row ">
											<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12" >
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" value="{{$data -> name}}" name="name" type="text" placeholder="Masukan Nama">
													<div class="field-placeholder">Nama <span class="text-danger">*</span></div>
													<div class="form-text">
														Silakan masukkan nama lengkap Anda.
													</div>
												</div>
												<!-- Field wrapper end -->
											</div>


												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" value="{{$data ->email}}" name="email" type="email" placeholder="Masukan Email">
													<div class="field-placeholder">Email <span class="text-danger">*</span></div>
													<div class="form-text">
														Kami tidak akan pernah membagikan email Anda kepada siapa pun.
													</div>
													<div class="field-wrapper">
														<input class="form-control" value="{{$data->telephone}}" name="telephone" type="text" placeholder="Masukan Nomor Telepon">
														<div class="field-placeholder">Telepon</div>
													</div>
												<!-- Field wrapper end -->
												<div class="field-wrapper">
													<input class="form-control" value="{{$data->npwp}}" name="npwp" type="number" placeholder="Masukan Nomor NPWP">
													<div class="field-placeholder">NPWP</div>
												</div>
											</div>
											</div>
											<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
												<div class="field-wrapper">
													<input class="form-control" name="logo" type="file">
													<div class="field-placeholder">Logo</div>
												</div>
											</div>


										</div>
												<!-- Field wrapper end -->




											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

												<div style="border-bottom: solid grey 1px;margin-bottom:1%;  margin-bottom: 2%; margin-top: 1%;">
													<h6>Alamat</h6>
													<p>Alamat tersebut akan digunakan dalam faktur, tagihan, dan catatan lain yang Anda keluarkan.</p>
												</div>

											</div>


											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<textarea class="form-control" name="address" rows="2" placeholder="Masukan Alamat">{{$data->address}}</textarea>
													<div class="field-placeholder">Alamat <span class="text-danger">*</span></div>
													<div class="form-text">
														Silakan masukkan Alamat lengkap Anda.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" value="{{$data->city}}" name="city" type="text" placeholder="Masukan Kota">
													<div class="field-placeholder">Kota</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" value="{{$data->postal_code}}" name="postal_code" type="number" placeholder="Masukan Kode Pos">
													<div class="field-placeholder">Kode Pos</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" value="{{$data->province}}" name="province" type="text" placeholder="Masukan Provinsi">
													<div class="field-placeholder">Provinsi</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" value="{{$data->country}}" name="country" type="text" placeholder="Masukan Negara">
													<div class="field-placeholder">Negara</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
												<div class="d-flex justify-content-end mt-4">
													<button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
													<button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
												</div>
											</div>

										</div>
										<!-- Row end -->
									</form>
										

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

		<!-- Main Js Required -->
		<script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js") }}"></script>
		<script>
			 Dropzone.options.myDropzone = {
				maxFiles: 1,
				dictDefaultMessage: "Seret file di sini untuk mengunggah",
				maxFilesize: 5 * 1024, // 5 MB

				init: function() {
				this.on("addedfile", function(file) {
					if (this.files.length > 1) {
					this.removeFile(this.files[0]); // Hapus file sebelumnya jika ada
					}
				});
				}

			};
		  </script>

	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->
</html>


