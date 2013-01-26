## PHP Cli Tests

EL primer paso es generar las pruebas, para despue crear un framework, tal vez tengamos que ver como lo hace Laravel.

## Hello World

Es la primer prueba, se ejecuta y devuelve un mensaje:

	$ php hello-world.php
	Hola

## Params

Prueba para comenzar a manejar los parámetros:

	$ php params.php cualquier numero de parametros
	Variables que contiene el archivo params.php
	array(4){
		[0] =>
		string(9) "cualquier"
		[1] =>
		string(6) "numero"
		[2] =>
		string(2) "de"
		[3] =>
		string(10) "parametros"
	}

## Create File

Este script permite crear un archiv con un plantilla muy básica

	$ php create-file.php demo

Genera un archivo con extension .test.txt
@TODO El siguiente paso es poder utilizar una plantilla e interpretarla como Mustache


## Download Files

@TODO Este script permitirá descargar un paquete en zip y colocarlo dentro de un archivo