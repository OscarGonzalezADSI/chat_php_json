<?php

/*
 *
 *	Está pendiente desarrollar el código del controlador
 *	de acuerdo a la estructura expuesta en el repositorio:
 *  https://github.com/OscarGonzalezADSI/php_pdo_mysql_json
 *
 **/

// simulación de recepción de datos desde el modelo
include "../modelo/datos.php";
// administración de contenidos de la interfaz
include "./componentes/componentes.php";
// interpretación de la data en formato json
$chats = json_decode($chats, true);
// simulación de recepción del id del usuario que inicia sesión
$inicio_sesion_id_usuario = "1";
