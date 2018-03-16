<p align="center"><img src="https://www.astrapp.com/wp-content/uploads/2018/02/small_logo.png"></p>

# Red Medica #

Repositorio para proyecto de red medica

## Requisitos ##

	- PHP7
	- MYQSL5
	- Composer

## Paso 1 ##

Luego de clonado el repositorio dentro de la carpeta del proyecto ejecutar con una terminal el comando:

	Composer update

## Paso 2 ##

Crear una copia del archivo .env.example y renombrar a .env, configurar los campos como segun corresponda.

## Paso 3 ##

Nuevamente en la carpeta del proyecto ejecutar con una terminal el comando:

	php artisan key:generate

Y por ultimo ejecutar el comando:

	php artisan serve

Y ya puedes acceder al proyecto a traves de localhost:8000