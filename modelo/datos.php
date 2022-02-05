<?php

/*
 *
 *	Está pendiente desarrollar el código del modelo
 *	de acuerdo a la estructura expuesta en el repositorio.
 *  https://github.com/OscarGonzalezADSI/php_pdo_mysql_json
 *
 *  Se supone que el resultado de las consultas deben generar
 *  un Json acorde con el siguiente formato:
 *
 **/

$chats = '[
	{
		"id_chat": "1",
		"foto": "../imagenes/oscar.png",
		"chat_nombre": "oscar gonzalez",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "2",
		"foto": "../imagenes/daniel.png",
		"chat_nombre": "daniel",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "3",
		"foto": "../imagenes/yeison.png",
		"chat_nombre": "yeison",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "4",
		"foto": "../imagenes/rolling.png",
		"chat_nombre": "rolling",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "5",
		"foto": "",
		"chat_nombre": "pedro",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "6",
		"foto": "",
		"chat_nombre": "kevin",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "7",
		"foto": "",
		"chat_nombre": "kevin",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "8",
		"foto": "../imagenes/kevin.jpg",
		"chat_nombre": "kevin",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "9",
		"foto": "",
		"chat_nombre": "eduardo",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "10",
		"foto": "",
		"chat_nombre": "jorge",
		"hora" : "7:00pm"
	},
	{
		"id_chat": "11",
		"foto": "",
		"chat_nombre": "jose",
		"hora" : "7:00pm"
	}
]';

$mensajes = '[
	{
		"id_usuario" : "1",
		"id_chat" : "1",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "1",
		"id_chat" : "1",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "1",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "1",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "1",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "2",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "2",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "1",
		"id_chat" : "2",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "1",
		"id_chat" : "2",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "2",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "3",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "3",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "3",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "2",
		"id_chat" : "3",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "1",
		"id_chat" : "3",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "1",
		"id_chat" : "4",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	},
	{
		"id_usuario" : "1",
		"id_chat" : "4",
		"mensaje" : "hola que tal",
		"id_mensaje_estado" : "1"
	}
]';
