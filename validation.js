let modalcontent = document.querySelector('.modal-content');
let themebuttom = document.querySelector('.theme-button');

themebuttom.onclick = function(){
  modalcontent.classList.toggle('light-theme');
  modalcontent.classList.toggle('dark-theme');
};

