<?php
/**
 * Argv
 * La variable argv nos permite saber todos los argumentos que 
 * se provven desde la linea de comandos, util para cuando
 * tenemos que hacer comandos simple. Si necesitamos nombrar parámetros,
 * utilizaremos: getopt() http://php.net/getopt
 * 
 */

// El nombre del archivo es el parametro
$filename = array_shift($argv);

echo "Variables que contiene el archivo $filename \n";


var_dump($argv);

?>