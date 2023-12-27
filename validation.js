let modalcontent = document.querySelector('.modal-content');
let themebuttom = document.querySelector('.theme-button');

themebuttom.onclick = function(){
  modalcontent.classList.toggle('light-theme');
  modalcontent.classList.toggle('dark-theme');
};


// var modal = document.getElementById('exampleModal');
// var elements = document.getElementsByClassName("sign_up1");
// var close = document.getElementsByClassName('btn-close')[0];

// for (var i = 0; i < elements.length; i++) {
// 	  elements[i].addEventListener('click', function(){
//       $('#exampleModal').modal(show);
// 	})
// }
// // close.addEventListener('click', function() {
// //   closeModalWindow();
// // })

// // function openModalWindow() {
// //   modal.style.display = "block";
// // }

// // function closeModalWindow() {
// //   modal.style.display = "none";
// // }

var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalTitle = exampleModal.querySelector('.modal-title')
  modalTitle.textContent = recipient
})