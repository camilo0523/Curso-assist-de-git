<?php
//El nombre por defecto es Mundo en Git
$nombre = isset($argv[1]) ? ($argv[1]) : "Mundo en Git";
@print "Hola, {$nombre}\n";
