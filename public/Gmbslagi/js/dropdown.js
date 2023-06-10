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


}