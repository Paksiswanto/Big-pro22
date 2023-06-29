<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:00:09 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Beranda</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/dashboard.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/daterange/daterange.css") }}">

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css") }}" />
    <style>
        .alert1 {
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .alert-light1 {
            color: #636464;
            background-color: #FFFFFF;
            border-color: #fdfdfe;
            box-shadow: 2px 2px 4px rgba(0, 0.2, 0.2, 0.3);
            border-top: 5px solid #FBD89D;
        }

        .font-1 {
            color: #B87708;
        }
        
        .alert2 {
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .alert-light2 {
            color: #636464;
            background-color: #FFFFFF;
            border-color: #fdfdfe;
            box-shadow: 2px 2px 4px rgba(0, 0.2, 0.2, 0.3);
            border-top: 5px solid #99C5DB;
        }

        .font-2 {
            color: #51B4E8;
        }

        .font-2 .font-s {
            color: #00537D;
        }
        
        .alert3 {
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .alert-light3 {
            color: #636464;
            background-color: #FFFFFF;
            border-color: #fdfdfe;
            box-shadow: 2px 2px 4px rgba(0, 0.2, 0.2, 0.3);
            border-top: 5px solid #ff9696;
        }

        .font-3 {
            color: #ff7979;
        }


        .drop-zone {
            max-width: 100%;
            /*max to make it responsive*/
            height: 50px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-items: center;
            text-align: center;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 500;
            font-size: 20px;
            cursor: pointer;
            color: lightgrey;
            border: 2px dashed #D9D9D9;
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
            content: attr(data-label);
            /*  displays text of data-lable*/
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper" role="status">
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
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <form action="{{ route('ImportDataTransfer') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gutters">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h1 class="card-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="font-size: 20px;">Import Transfer</h1>
                                </div>
                            </div>
                            <!-- start -->
                            <div class="row mt-4">
                                <div class="alert1 alert-light1" role="alert">
                                    <p class="font-1">Jenis berkas yang diizinkan: XLS,XLSX</p>
                                    <p class="font-1">Baris maksimal yang diizinkan: 500</p>
                                </div>
                            </div>
                            {{-- <div class="row mt-4">
                                <div class="alert3 alert-light3" role="alert">
                                    <p class="font-3">Catatan:</p>
                                    <p class="font-3">category_type_id yang tersedia untuk di inputkan : 
                                        @foreach ($category_type as $index => $categories)
                                            {{ $categories->name }}
                                            @if ($index != count($category_type) - 1)
                                                ,
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                            </div> --}}
                            <div class="row mt-4">
                                <div class="alert2 alert-light2" role="alert">
                                    <p class="font-2">Anda dapat <a href="/DownloadTransfer"><strong class="font-s"> mengunduh</strong></a> berkas contoh dan lengkapi itu dengan data Anda.</p>
                                </div>
                            </div>
                        </div>
                            <div class="drop-zone">
                                <span class="drop-zone__prompt">Jatuhkan file atau klik untuk mengunggah</span>
                                <input type="file" name="myFile" class="drop-zone__input" onchange="displayFileName()" />
                                <p id="file-name"></p>
                            </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                            <div class="d-flex justify-content-end mt-4">
                                <button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="#">Batal</button>
                                <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                            </div>
                        </div>
                    </div>
                    </form>

                    <!-- Content wrapper end -->

                    <!-- App footer start -->
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
        <script src="{{ asset("Gmbslagi/js/jquery.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/js/modernizr.js") }}"></script>
        <script src="{{ asset("Gmbslagi/js/moment.js") }}"></script>
        <script src="{{ asset("Gmbslagi/js/dropdown.js") }}"></script>

        <!-- *************
			************ Vendor Js Files *************
		************* -->

        <!-- Megamenu JS -->
        <script src="{{ asset("Gmbslagi/vendor/megamenu/js/megamenu.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/megamenu/js/custom.js") }}"></script>

        <!-- Slimscroll JS -->
        <script src="{{ asset("Gmbslagi/vendor/slimscroll/slimscroll.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/slimscroll/custom-scrollbar.js") }}"></script>

        <!-- Search Filter JS -->
        <script src="{{ asset("Gmbslagi/vendor/search-filter/search-filter.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.js") }}"></script>

        <!-- Apex Charts -->
        <script src="{{ asset("Gmbslagi/vendor/apex/apexcharts.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/salesGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/ordersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/earningsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/visitorsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/customersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/sparkline.js") }}"></script>
        <!-- Date Range JS -->
        <script src="{{ asset("Gmbslagi/vendor/daterange/daterange.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/daterange/custom-daterange.js") }}"></script>
        <!-- Circleful Charts -->
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.custom.js") }}"></script>

        <!-- Date Range JS -->
        <!-- Main Js Required -->
        <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js") }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6.3.1/dist/tippy-bundle.umd.js"></script>

        <script src="{{ asset("Gmbslagi/js/chart_index.js") }}"></script>
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
        <script>
            function displayFileName() {
                var fileName = document.querySelector('input[type=file]').files[0].name;
                document.getElementById("file-name").innerHTML = "File yang dipilih: " + fileName;
            }
        </script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:19 GMT -->

</html>
