 
function toggleMenu() {
    
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}
// Add Modal


// var addBtn = document.getElementById("addBtn");
// var span = document.querySelectorAll(".close");
// var content = document.querySelector("section.container");
// var aside = document.querySelector("aside");
// var emptyAdd = document.querySelector(".empty-span");

// // edit Modal
// var editBtn = document.querySelectorAll(".editBtn");
// var editModal = document.getElementById("editModal");

// // Info Modal

// var info = document.getElementById("info");
// var infoBtn = document.querySelectorAll(".moreInfo");
// var infoRow = document.querySelectorAll("td:nth-child(3)");



// span[0].onclick = function () {
//   addModal.style.transform = "translateY(-100%)";
//   aside.style.filter = "none";
//   content.style.filter = "none";
// };
// emptyAdd.onclick = function() {
//   content.style.filter = "blur(15px)";
//   aside.style.filter = "blur(15px)";
//   addModal.style.transform = "translateY(0)";
// }
// addBtn.onclick = function () {
//   content.style.filter = "blur(15px)";
//   aside.style.filter = "blur(15px)";
//     addModal.style.transform = "translateY(0)";
//     alert('ll');
// };
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//   if (
//     event.target == addModal ||
//     event.target == editModal ||
//     event.target == info
//   ) {
//     addModal.style.transform = "translateY(-100%)";
//     editModal.style.transform = "translateY(-100%)"; // edit modal
//     info.style.transform = "translateY(-100%)"; // info modal

//     aside.style.filter = "none";
//     content.style.filter = "none";
//   }
// };