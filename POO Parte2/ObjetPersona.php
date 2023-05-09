<?php

include_once('Persona.php');

$persona = new Persona('Samuel', 'Escobar', 17);

echo $persona ->saludar();

unset($persona);