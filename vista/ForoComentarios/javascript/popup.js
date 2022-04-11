var btnAbrirPopup = document.getElementById('Abrir');
var btnAbrirPopup1 = document.getElementById('Abrir1');
var btnAbrirPopup2 = document.getElementById('Abrir2');
var	overlay = document.getElementById('overlay');
var	overlay1 = document.getElementById('overlay1');
var	overlay2 = document.getElementById('overlay2');
var	popup = document.getElementById('popup');
var	popup1 = document.getElementById('popup1');
var	popup2= document.getElementById('popup2');
var	btnCerrarPopup = document.getElementById('Cancelar');
var	btnCerrarPopup1 = document.getElementById('Cancelar1');
var	btnCerrarPopup2 = document.getElementById('Cancelar2');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

btnAbrirPopup1.addEventListener('click', function(){
	overlay1.classList.add('active');
	popup1.classList.add('active');
});

btnCerrarPopup1.addEventListener('click', function(){
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});

btnAbrirPopup2.addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
});
btnCerrarPopup2.addEventListener('click', function(){
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});
