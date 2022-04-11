//Se declaran las variables
var btnAbrirPopup = document.getElementById('Report');
var	overlay = document.getElementById('overlay1');
var	popup = document.getElementById('popup1');
var	btnCerrarPopup = document.getElementById('Cancelar1');
//Si se selecciona el boton aparece la información
btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});
//Si se oprime se retira la información
btnCerrarPopup.addEventListener('click', function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
