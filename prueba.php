<?php
/**
 * https://parzibyte.me/blog
 */
$cadena = "Soy una cadena en PHP. Tengo varias palabras. Estamos en el blog de Parzibyte";
# Cuántas palabras extraer
$cantidad_palabras = 5;
$palabras_arreglo = explode(" ", $cadena);
echo "<br>";
$primer_texto = implode(" ", array_slice($palabras_arreglo, 0, $cantidad_palabras));


echo "<hr>";
$segundo_texto = implode(" ", array_slice($palabras_arreglo, $cantidad_palabras));
echo "Primer texto: " . $primer_texto;
echo "<hr>";
echo "Segundo texto: " . $segundo_texto;    