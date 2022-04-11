var btnAbrirPopup = document.getElementById('Abrir');
var btnAbrirPopup1 = document.getElementById('Abrir1');
var	overlay = document.getElementById('overlay');
var	overlay1 = document.getElementById('overlay1');
var	popup = document.getElementById('popup');
var	popup1 = document.getElementById('popup1');
var	btnCerrarPopup = document.getElementById('Cancelar');
var	btnCerrarPopup1 = document.getElementById('Cancelar1');

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
	overlay1.classList.remove('active');
	popup1.classList.remove('active');
});
