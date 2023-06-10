// Loading
$(function () {
    $("#loading-wrapper").fadeOut(1000);
});

// Toggle sidebar
$("#toggle-sidebar").on("click", function () {
    $(".page-wrapper").toggleClass("toggled");
});

// Toggle graph day selection
$(function () {
    $(".graph-day-selection .btn").on("click", function () {
        $(".graph-day-selection .btn").removeClass("active");
        $(this).addClass("active");
    });
});

// Todays Date
$(function () {
    var interval = setInterval(function () {
        var momentNow = moment();
        $("#todays-date").html(momentNow.format("DD MMMM YYYY"));
    }, 100);
});

// Todo list
$(".todo-body").on("click", "li.todo-list", function () {
    $(this).toggleClass("done");
});

// Chat App
$(".users-container .users-list li").on("click", function () {
    $(".empty-chat-screen").addClass("d-none");
    $(".chat-content-wrapper").removeClass("d-none");
    $(".users-container .users-list li").removeClass("active-chat");
    $(this).addClass("active-chat");
});

// Task App
(function ($) {
    var checkList = $(".task-checkbox"),
        toDoCheck = checkList.children('input[type="checkbox"]');
    toDoCheck.each(function (index, element) {
        var $this = $(element),
            taskItem = $this.closest(".task-block");
        $this.on("click", function (e) {
            taskItem.toggleClass("task-checked");
        });
    });
})(jQuery);

// Task App
$(function () {
    $(".task-actions a.important").on("click", function () {
        $(this).toggleClass("active");
    });
});
$(function () {
    $(".task-actions a.star").on("click", function () {
        $(this).toggleClass("active");
    });
});
$(function () {
    $(".task-action-items a.mark-done-item").on("click", function () {
        $(event.target).closest(".task-block").toggleClass("task-checked");
    });
});
$(function () {
    $(".task-action-items a.delete-task-item").on("click", function () {
        $(event.target).closest(".task-block").remove();
    });
});

$(".pem-btn").click(function () {
    $("pem-menu").toggleClass("show");
});

// Custom Default/Compact/Pinned Sidebars JS
jQuery(function ($) {
    // Default Compact menu
    $(".default-sidebar-dropdown > a").on("click", function () {
        $(".default-sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".default-sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".default-sidebar-dropdown").removeClass("active");
            $(this).next(".default-sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }
    });

    // Compact menu
    $(".compact-sidebar-dropdown > a").on("click", function () {
        $(".compact-sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".compact-sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".compact-sidebar-dropdown").removeClass("active");
            $(this).next(".compact-sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }
    });

    // Pinned sidebar
    $(function () {
        $(".slim-sidebar");
        $(".default-sidebar-wrapper").on(
            "hover",
            function () {
                console.log("mouseenter");
                $(".slim-sidebar").addClass("sidebar-hovered");
            },
            function () {
                console.log("mouseout");
                $(".slim-sidebar").removeClass("sidebar-hovered");
            }
        );
    });

    // Added by Srinu
    $(function () {
        // When the window is resized,
        $(window).resize(function () {
            // When the width and height meet your specific requirements or lower
            if ($(window).width() <= 768) {
                $(".page-wrapper").removeClass("pinned");
            }
        });
        // When the window is resized,
        $(window).resize(function () {
            // When the width and height meet your specific requirements or lower
            if ($(window).width() >= 768) {
                $(".page-wrapper").removeClass("toggled");
            }
        });
    });
});

/***********
***********
***********
	Bootstrap JS 
***********
***********
***********/

// Tooltip
var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Popover
var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
);
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});

// const optionMenu = document.querySelector(".select-menu"),
// 		  selectBtn = optionMenu.querySelector(".select-btn"),
// 		  options = optionMenu.querySelectorAll(".option"),
// 		  sBtn_text = optionMenu.queySelector(".sBtn-text");

// 	selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

// 	options.forEach(option =>{
// 		option.addEventListener("click", ()=>{
// 			let selectedOption = option.querySelector(".option-text").innerText;
// 			sBtn_text.innerText = selectedOption;
// 			console.log(selectedOption)
// 		})
// 	})

// var dropdown = document.getElementsByClassName("dropdown-btn");
// var droprow = document.getElementsByClassName("droprow");
// var click = document.getElementsByClassName(dropdown, droprow);
// var i;

// for (i = 0; i < dropdown.length; i++) {
//   dropdown[i].addEventListener("click", function() {
//     this.classList.toggle("active");

//     var dropdownContent = this.nextElementSibling;
//     if (dropdownContent.style.display === "block") {
//       dropdownContent.style.display = "none";
//     } else {
//       dropdownContent.style.display = "block";
//     }

//   });

//   droprow[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     this.classList.toggle("rotate");
//   });

//   function switchPage() {
//     var dropdown = document.getElementById("myDropdown");
//     var selectedValue = dropdown.value;

//     if (selectedValue !== "") {
//       window.location.href = selectedValue;
//     }
//   }

//   function openModal(modalText) {
//     document.getElementById("modalText").innerText = modalText;
//     document.getElementById("myModal").style.display = "block";
//   }

//   function closeModal() {
//     document.getElementById("myModal").style.display = "none";
//   }

var dropdowns = document.getElementsByClassName("dropdown-btn");
var droprows = document.getElementsByClassName("droprow");

for (var i = 0; i < dropdowns.length; i++) {
    dropdowns[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });

    droprows[i].addEventListener("click", function () {
        this.classList.toggle("active");
        this.classList.toggle("rotate");
    });
}

// Menambahkan kode berikut
var currentDropdown = document.querySelector(".dropdown-btn.current-page");
if (currentDropdown) {
    currentDropdown.classList.add("active");
    var dropdownContent = currentDropdown.nextElementSibling;
    if (dropdownContent) {
        dropdownContent.style.display = "block";
    }
}

// document.addEventListener("DOMContentLoaded", function () {
//     Ambil semua tautan navigasi dashboard
//     var dashboardLinks = document.querySelectorAll(".nav-link");

//     Hapus kelas "active" dari semua tautan navigasi dashboard
//     dashboardLinks.forEach(function (link) {
//         link.classList.remove("active");
//     });

//     Tambahkan kelas "active" pada tautan navigasi dashboard yang aktif
//     var currentDashboardLink = document.querySelector(".current-page");
//     currentDashboardLink.classList.add("active");
// });

// Ambil semua elemen tab dan konten tab
// Ambil semua elemen tab dengan kelas .nav-link
const tabsNavLink = document.querySelectorAll(".nav-link");

// Ambil semua elemen tab dengan kelas .nav-link-pro
const tabsNavLinkPro = document.querySelectorAll(".nav-link-pro");

// Gabungkan kedua array elemen tab menjadi satu array
const tabs = Array.from(tabsNavLink).concat(Array.from(tabsNavLinkPro));
const tabContents = document.querySelectorAll(".tab-pane");

// Fungsi untuk menampilkan tab yang aktif berdasarkan data-tab yang disimpan
function showActiveTab() {
    // Dapatkan data-tab yang disimpan dalam penyimpanan lokal
    const activeTab = localStorage.getItem("activeTab");

    // Jika ada data-tab yang tersimpan
    if (activeTab) {
        // Hilangkan kelas "active" dari semua tab dan konten tab
        tabs.forEach((tab) => tab.classList.remove("active"));
        tabContents.forEach((content) => content.classList.remove("active"));

        // Tambahkan kelas "active" pada tab yang sesuai dengan data-tab yang disimpan
        const selectedTab = document.querySelector(`[data-tab="${activeTab}"]`);
        const selectedContent = document.querySelector(
            `[data-tab-content="${activeTab}"]`
        );

        if (selectedTab && selectedContent) {
            selectedTab.classList.add("active");
            selectedContent.classList.add("active");
        }
    }
}

// Tambahkan event listener untuk setiap tab
tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        // Hapus kelas "active" dari semua tab dan konten tab
        tabs.forEach((tab) => tab.classList.remove("active"));
        tabContents.forEach((content) => content.classList.remove("active"));

        // Tambahkan kelas "active" pada tab yang diklik
        tab.classList.add("active");

        // Ambil data-tab dari tab yang diklik
        const selectedTab = tab.getAttribute("data-tab");

        // Tambahkan kelas "active" pada konten tab yang sesuai dengan data-tab
        const selectedContent = document.querySelector(
            `[data-tab-content="${selectedTab}"]`
        );
        selectedContent.classList.add("active");

        // Simpan data-tab yang aktif dalam penyimpanan lokal
        localStorage.setItem("activeTab", selectedTab);
    });
});

// Panggil fungsi untuk menampilkan tab yang aktif saat halaman dimuat
showActiveTab();

// }

// Tabs on Hover
// jQuery('.sidebar-tabs .nav a.nav-link').hover(function(e){
// 	e.preventDefault();
// 	jQuery('.tab-pane').removeClass('active');
// 	tabContentSelector = jQuery(this).attr('href');
// 	jQuery(this).tab('show');
// 	jQuery(tabContentSelector).addClass('active');
// });
