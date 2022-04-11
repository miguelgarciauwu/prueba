var btnAbrirPopup = document.getElementById('Abrir');
var	overlay = document.getElementById('overlay');
var	popup = document.getElementById('popup');
var	btnCerrarPopup = document.getElementById('Cancelar');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');
});