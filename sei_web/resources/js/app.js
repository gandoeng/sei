require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let buttonNav	= document.querySelector('.nav-button');
let contentNav	= document.querySelector('.nav-open');

buttonNav.addEventListener("click", ()=>{
	contentNav.classList.toggle('show');
});

