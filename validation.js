let modalcontent = document.querySelector('.modal-content');
let themebuttom = document.querySelector('.theme-button');

themebuttom.onclick = function(){
  modalcontent.classList.toggle('light-theme');
  modalcontent.classList.toggle('dark-theme');
};


const myList = document.getElementsByClassName('wrapper');
        // Добавляем обработчик события клика к элементу ul
myList.addEventListener('click', function(event) {
      if(event.target.tagName === 'button') {
      event.target.classList.toggle('active')
    }
});