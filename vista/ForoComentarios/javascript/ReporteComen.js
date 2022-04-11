var btnOpenReporte = document.getElementById('ReporteAbrir');
var	ReporteAni = document.getElementById('ReporteAni');
var	ReporteAnimado = document.getElementById('ReporteAnimado');
var	btnCerrarReporte = document.getElementById('CancelarReporte');

btnOpenReporte.addEventListener('click', function(){
	ReporteAni.classList.add('active');
	ReporteAnimado.classList.add('active');
});

btnCerrarReporte.addEventListener('click', function(){
	ReporteAni.classList.remove('active');
	ReporteAnimado.classList.remove('active');
});