<!--
    No hay manera de purificar este codigo
    por lo que los devs no es gusta
    se ocupa un formulario para manejralo, desde el action
    de los formularios

    modelo vista controlador separar los codigos

    para recuperar los datos del formulario debemos recuperar los
    id y el nombre de los campos
-->

<!--
    clase 14_08_2023
    maneras de conectar a la BD
    MySQLi - La mas sencilla
    PDO - Diferentes gestores de bases de datos
    ADOdb - 

    igual que luisgod_se ocupan 4 cosas para la conexion
    direccion, nombre de la base de datos, usuario y contraseña
    vamos a trabajar con ADOdb
-->
<?php
/* QUERY DataBase
    create database prograweb;
    create table tblMensajes(
	id_mensaje int auto_increment,
	nombre varchar(30),
	apepat varchar(25),
	apemat varchar(25),
	email varchar(30) unique,
	telefono char(10),
	CONSTRAINT pk_mensaje PRIMARY KEY(id_mensaje));
*/
    echo 'HOLA '.$_POST['txtNombre'];
    
?>