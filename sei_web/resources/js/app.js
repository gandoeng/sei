require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//mobile navbar
let buttonNav	= document.querySelector('.nav-button');
let contentNav	= document.querySelector('.nav-open');

buttonNav.addEventListener("click", ()=>{
	contentNav.classList.toggle('show');
});

//slider
var sliderIndex = 1;

window.showDivs = function (n) {
	var i;
	var x = document.getElementsByClassName("slider");

	if( n > x.length ) {sliderIndex =1}

	if (n < 1) {sliderIndex = x.length}

	for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";
	  }

	x[sliderIndex-1].style.display = "block";
} 


showDivs(sliderIndex);

window.plusDivs = function(n){
	showDivs(sliderIndex += n);
}



