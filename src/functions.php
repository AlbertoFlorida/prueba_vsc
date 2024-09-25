<?php
function saludo($nombre)
{
    return "Hola" . $nombre;
}
echo saludo("Manolo");




function saludoPersonalizado($nombre)
{
    return "Que tal" . $nombre;
}

echo saludo("Andres");
