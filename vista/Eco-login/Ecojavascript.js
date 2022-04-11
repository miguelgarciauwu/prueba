const Ecoperri = document.getElementById('Ecoperri');
const inputUsuario = document.getElementById('input-usuario');
const inputClave = document.getElementById('input-clave');
const body = document.querySelector('body');
const anchoMitad = window.innerWidth/2;
const altoMitad = window.innerHeight/2;
let seguirPunteroMouse = true;

body.addEventListener('mousemove',(m)=>{
	if(seguirPunteroMouse){
		if(m.clientX < anchoMitad && m.clientY < altoMitad){
			Ecoperri.src= "Img/mouse/4.png";
		}else if(m.clientX < anchoMitad && m.clientY > altoMitad ){
			Ecoperri.src= "Img/mouse/3.png";
		}else if(m.clientX > anchoMitad && m.clientY > altoMitad){
			Ecoperri.src= "Img/mouse/2.png";
		}else {
			Ecoperri.src= "Img/mouse/1.png";
		}
	}
})

inputUsuario.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
})

inputUsuario.addEventListener('blur',()=>{
    seguirPunteroMouse = true;
})

inputUsuario.addEventListener('keyup',()=>{
	let usuario = inputUsuario.value.length;
	if(usuario >= 0 && usuario<= 5){
		Ecoperri.src = 'Img/escribir/1.png';
	}else if(usuario >= 6 && usuario<= 14){
		Ecoperri.src = 'Img/escribir/2.png';
	}else if(usuario >= 15 && usuario<= 20){
		Ecoperri.src = 'Img/escribir/3.png';
	
	}else{
		Ecoperri.src = 'Img/escribir/4.png';
	}
})

inputClave.addEventListener('focus',()=>{
    seguirPunteroMouse = false;
    let cont = 1;
    const cubrirOjo = setInterval(() => {
        Ecoperri.src = 'Img/contraseña/'+cont+'.png';
        if(cont < 5){
            cont++;
        }else{
            clearInterval(cubrirOjo);
        }
    }, 60);
})

inputClave.addEventListener('blur',()=>{
    seguirPunteroMouse = true;
    let cont = 5;
    const descubrirOjo = setInterval(() => {
        Ecoperri.src = 'Img/contraseña/'+cont+'.png';
        if(cont > 1){
            cont--;
        }else{
            clearInterval(descubrirOjo);
        }
    }, 60);
})