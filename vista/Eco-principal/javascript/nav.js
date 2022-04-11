var icononavbutton =  document.getElementById('icono-nav-button');
var icononavbloque = document.getElementById('icono-nav-bloque');

contadorBotonNav = 0;
function perfil()
    {    if(contadorBotonNav==0)
        {
            icononavbloque.classList.add('activo');
            contadorBotonNav= 1;
        }
        else
        {icononavbloque.classList.remove('activo');
            contadorBotonNav= 0;
        }
    }
    
icononavbutton.addEventListener('click',perfil, true);

