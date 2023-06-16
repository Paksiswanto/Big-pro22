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
		<style>
			 .drop-zone {
        max-width: 200px; /*max to make it responsive*/
        height: 150px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-items: center;
        text-align: center;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 500;
        font-size: 15px;
        cursor: pointer;
        color: lightgrey;
        border: 4px dashed black;
        border-radius: 10px;
      }
      .drop-zone--over {
        border-style: solid;
      }
      .drop-zone__input {
        display: none;
      }
      .drop-zone__thumb {
        width: 100px;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
        background-color: #ccc;
        background-size: cover;
        position: relative;
      }
      .drop-zone__thumb::after {
        content: attr(data-label); /*  displays text of data-lable*/
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 0;
        color: white;
        background: rgba(0, 0, 0, 0.75);
        text-align: center;
        font-size: 14px;
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
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card" style="overflow: hidden">
									<div class="card-header">
										<div class="card-title"><h3>Profile<button type="button" style="border: none; background:none;">☆</button></h3></div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row gutters">

											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">
												<form action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
													@method('PUT')
													@csrf
												<div style="border-bottom: solid grey 1px;margin-bottom:1%">
													<h6>Umum</h6>
													<p>Informasi ini terlihat dalam rekaman yang Anda buat.</p>
												</div>

											</div>

											<div class="row ">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 row" >
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control @error('name')
														is-invalid
													@enderror" name="name" value="{{ $data->name }}" type="text" placeholder="Masukan Nama">
													<div class="field-placeholder">Nama <span class="text-danger">*</span></div>
													<div class="form-text">
														Silakan masukkan nama lengkap Anda.
													</div>
													@error('name')
														<div class="invalid-feedback">
															{{ $message }}
														</div>
													@enderror
												</div>
												<!-- Field wrapper end -->
											</div>

											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control @error('email')
														is-invalid
													@enderror" name="email" value="{{ $data->email }}" type="email" placeholder="Masukan Email">
													<div class="field-placeholder">Email <span class="text-danger">*</span></div>
													<div class="form-text">
														Kami tidak akan pernah membagikan email Anda kepada siapa pun.
													</div>
													@error('email')
														<div class="invalid-feedback">
															{{ $message }}
														</div>
													@enderror
											</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
												<!-- Field wrapper start -->

												<!-- Example of a form that Dropzone can take over -->
                                                <div class="field-wrapper">
													<input type="file" name="picture" value="{{ $data->piture }}" id="" class="form-control @error('picture')
														is-invalid
													@enderror">
												</div>
												@error('picture')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>


										</div>
												<!-- Field wrapper end -->




											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

												<div style="border-bottom: solid grey 1px;margin-bottom:1%">
													<h6>Ubah kata sandi</h6>
												</div>

											</div>



											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control @error('old_password')
														is-invalid
													@enderror" name="old_password" type="password" placeholder="Masukan kata sandi lama">
													<div class="field-placeholder">Kata sandi lama</div>
													@error('old_password')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
													@enderror
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control @error('password')
														is-invalid
													@enderror" name="password" type="password" placeholder="Masukan kata sandi baru">
													<div class="field-placeholder">Kata sandi baru</div>
													@error('password')
													 <div class="invalid-feedback">
														{{ $message }}
													</div>
													@enderror
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control @error('confirm_password')
														is-invalid
													@enderror" name="confirm_password" type="password" placeholder="Masukan konfirmasi kata sandi baru">
													<div class="field-placeholder">Konfirmas kata sandi baru</div>
													@error('confirm_password')
													{{ $message }}
													@enderror
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
										</div>
										<!-- Row end -->
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
		<script src="{{ asset ("vvendor/slimscroll/custom-scrollbar.js")}}"></script>

		<!-- Search Filter JS -->
		<script src="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.js")}}"></script>
		<script src="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.js")}}"></script>

		<!-- Main Js Required -->
		<script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js") }}"></script>
		<script>
			   document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
                const dropZoneElement = inputElement.closest(".drop-zone");

                dropZoneElement.addEventListener("click", (event) => {
                    inputElement.click(); /*clicking on input element whenever the dropzone is clicked so file browser is opened*/
                });

                inputElement.addEventListener("change", (event) => {
                    if (inputElement.files.length) {
                        updateThumbnail(dropZoneElement, inputElement.files[0]);
                    }
                });

                dropZoneElement.addEventListener("dragover", (event) => {
                    event.preventDefault(); /*this along with prevDef in drop event prevent browser from opening file in a new tab*/
                    dropZoneElement.classList.add("drop-zone--over");
                });
                ["dragleave", "dragend"].forEach((type) => {
                    dropZoneElement.addEventListener(type, (event) => {
                        dropZoneElement.classList.remove("drop-zone--over");
                    });
                });
                dropZoneElement.addEventListener("drop", (event) => {
                    event.preventDefault();
                    console.log(
                        event.dataTransfer.files
                    ); /*if you console.log only event and check the same data location, you won't see the file due to a chrome bug!*/
                    if (event.dataTransfer.files.length) {
                        inputElement.files =
                            event.dataTransfer.files; /*asigns dragged file to inputElement*/

                        updateThumbnail(
                            dropZoneElement,
                            event.dataTransfer.files[0]
                        ); /*thumbnail will only show first file if multiple files are selected*/
                    }
                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });

            function updateThumbnail(dropZoneElement, file) {
                let thumbnailElement = dropZoneElement.querySelector(
                    ".drop-zone__thumb"
                );
                /*remove text prompt*/
                if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                    dropZoneElement.querySelector(".drop-zone__prompt").remove();
                }

                /*first time there won't be a thumbnailElement so it has to be created*/
                if (!thumbnailElement) {
                    thumbnailElement = document.createElement("div");
                    thumbnailElement.classList.add("drop-zone__thumb");
                    dropZoneElement.appendChild(thumbnailElement);
                }
                thumbnailElement.dataset.label =
                    file.name; /*takes file name and sets it as dataset label so css can display it*/

                /*show thumbnail for images*/
                if (file.type.startsWith("image/")) {
                    const reader = new FileReader(); /*lets us read files to data URL*/
                    reader.readAsDataURL(file); /*base 64 format*/
                    reader.onload = () => {
                        thumbnailElement.style.backgroundImage = `url('${reader.result}')`; /*asynchronous call. This function runs once reader is done reading file. reader.result is the base 64 format*/
                        thumbnailElement.style.backgroundPosition = "center";
                    };
                } else {
                    thumbnailElement.style.backgroundImage = null; /*plain background for non image type files*/
                }
            }
		  </script>

	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->
</html>
