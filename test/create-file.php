<?php
/**
 * Create File
 *
 * Script que permite la cracion de un archivo, utilizando el
 * primer parámetro como nombre
 */


/**
 * File Creator
 * Permite crear un archivo php
 */
class FileCreator{

	static $root;

	var $filename;
	var $content;

	function __construct($filename, $content){

		// Utilizamos getcwd, para que sea desde el Root
		self::$root = getcwd();

		// Guardamos el nombre y contenido
		$this->filename = self::$root . '\\' . $filename;
		$this->content = $content;
	}

	function save(){
		$fileHandler = fopen($this->filename, 'w') or die('El archivo no pudo crearse');
		fwrite($fileHandler, $this->content);
		fclose($fileHandler);
	}
}

// Vamos a crear un archivo de prueba con una plantilla
$scriptname = array_shift($argv);

$filename = ($argv[0]) ? $argv[0] : 'test';
$filename .= '.test.txt';

// Definimos la plantilla
$template = "# Archivo de Prueba \n\n";
$template.= "Este archivo ha sido genrado a través de un script PHP, ejecutado desde la línea de comando \n\n";
$template.= "Nombre del Script \n";
$template.= ":`{$scriptname}` \n";

// Creamos el archivo
$file = new FileCreator($filename, $template);
$file->save();





?>