<?php

$data = '[
	{
		"tabla" : "chats",
		"data" : [
			{
				"id_chat" : "1",
				"id_chat_estado" : "001",
				"id_usario" : "123"	
			},
			{
				"id_chat" : "2",
				"id_chat_estado" : "002",
				"id_usario" : "1234"
			}
		],
		"orden" : {
			"insertar" : [
				{
					"id_chat_estado" : "001",
					"id_usario" : "123"	
				},
				{
					"id_chat_estado" : "002",
					"id_usario" : "1234"
				},
				{
					"id_chat_estado" : "0023",
					"id_usario" : "1235"
				}
			],
			"modificar" : [
				{
					"id_chat" : "01",
					"id_chat_estado" : "111",
					"id_usario" : "123"
				},
				{
					"id_chat" : "01",
					"id_chat_estado" : "002",
					"id_usario" : "4321"
				}
			],
			"eliminar" : [
				{
					"id_chat" : "01"
				}			
			] 
		}
	},
	{
		"tabla" : "chat_estados",
		"data" : [
			{ 
				"id_chat_estado" : "10",
				"chat_estado" : "inactivo"
				
			},
			{ 
				"id_chat_estado" : "11",
				"chat_estado" : "activo"
				
			},
			{ 
				"id_chat_estado" : "12",
				"chat_estado" : "inactivo"
				
			},
			{ 
				"id_chat_estado" : "13",
				"chat_estado" : "activo"
				
			}
		],
		"orden" : {
			"registrar" : [
				{
					"chat_estado" : "inactivo"
				},
				{
					"chat_estado" : "activo"
				},
				{
					"chat_estado" : "inactivo"
				}
			],
			"modificar" : [
				{
					"id_chat_estado" : "10",
					"chat_estado" : "inactivo"
				},
				{
					"id_chat_estado" : "10",
					"chat_estado" : "activo"
				},
				{
					"id_chat_estado" : "10",
					"chat_estado" : "inactivo"
				}
			],
			"eliminar" : [
				{
					"id_chat_estado" : "10"
				}			
			]
		}
	},
{
		"tabla" : "autorizaciones",
		"data" : [
			{
				"id_codigo" : "1",
				"id_autorizacion" : "15296874563",
				"id_aut_estado" : "15296856713",
				"id_chat" : "15259834563",
				"id_usuario" : "15632474563"
			},
			{  	
				"id_codigo" : "2",
				"id_autorizacion" : "15249634563",
				"id_aut_estado" : "15296987713",
				"id_chat" : "15259816353",
				"id_usuario" : "15632568563"
			}
		],
		"orden" : {
			"insertar" : [
				{
					"id_autorizacion" : "15296683463",
					"id_aut_estado" : "15296896373",
					"id_chat" : "86939834563",
					"id_usuario" : "15632476931"
					
				},
				{
					"id_autorizacion" : "15296632463",
					"id_aut_estado" : "96856856713",
					"id_chat" : "15259833256",
					"id_usuario" : "15637410563"
				},
				{	
					"id_autorizacion" : "10147874563",
					"id_aut_estado" : "15296853698",
					"id_chat" : "10258834563",
					"id_usuario" : "15632407623"
				}	
					
			],
			"modificar" : [
				{
					"id_codigo" : "1",
					"id_autorizacion" : "15296874563",
					"id_aut_estado" : "15296856713",
					"id_chat" : "15259834563",
					"id_usuario" : "15632474563"
				},
				{  	
					"id_codigo" : "2",
					"id_autorizacion" : "15249634563",
					"id_aut_estado" : "15296987713",
					"id_chat" : "15259816353",
					"id_usuario" : "15632568563"
				}
			],
			"eliminar" : [
				{
					"id_codigo" : "2"
				}			
			] 
		}
	},
	{
		"tabla" : "aut_estados",
		"data" : [
			{
				"id_codigo" : "1",
				"id_aut_estado" : "15296856713",
				"aut_estados" : "autorizado"
	
			},
			{	
				"id_codigo" : "2",
				"id_aut_estado" : "15296569813",
				"aut_estados" : "autorizado"
							
			}
		],
		"orden" : {
			"insertar" : [
				{
					"id_aut_estado" : "15263206713",
					"aut_estados" : "autorizado"
			
				},
				{	
					"id_aut_estado" : "15296963513",
					"aut_estados" : "autorizado"
								
				},
				{	
					"id_aut_estado" : "15296546303",
					"aut_estados" : "autorizado"
								
				}
			],
			"modificar" : [
				{
					"id_codigo" : "1",
					"id_aut_estado" : "15296856713",
					"aut_estados" : "autorizado"
				},
				{	
					"id_codigo" : "2",
					"id_aut_estado" : "15296569813",
					"aut_estados" : "autorizado"
				}
			],
			"eliminar" : [
				{
					"id_codigo" : "2"
				}			
			] 
		}
	},
{
		"tabla" : "mensajes",
		"data" : [
			{
				"id_mensajes" : "1",
				"mensajes" : "hola yeison",
				"id_usuario" : "1",
				"id_chat" : "1",
				"id_msn_estado" : "1"
			},
			{
				"id_mensajes" : "2",
				"mensajes" : "como estas?",
				"id_usuario" : "1",
				"id_chat" : "1",
				"id_msn_estado" : "1"
			}
		],
		"orden" : {
			"insertar" : [
				{
					"mensajes" : "todo bien",
					"id_usuario" : "1",
					"id_chat" : "1",
					"id_msn_estado" : "1"
				},
				{
					"mensajes" : "me alegra",
					"id_usuario" : "1",
					"id_chat" : "1",
					"id_msn_estado" : "1"				
				},
				{
					"mensajes" : "y el trabajo",
					"id_usuario" : "1",
					"id_chat" : "1",
					"id_msn_estado" : "1"
				}
			],
			"modificar" : [
				{
					"id_mensajes" : "1",
				    "mensajes" : "bien, bien",
					"id_usuario" : "1",
					"id_chat" : "1",
					"id_msn_estado" : "1"
				},
				{
					"id_mensajes" : "2",
				    "mensajes" : "que bien",
					"id_usuario" : "1",
					"id_chat" : "1",
					"id_msn_estado" : "1"
				}
			],
			"eliminar" : [
				{
					"id_mensajes" : "1"
				}			
			] 
		}
	},
	{
		"tabla" : "mns_estados",
		"data" : [
			{ 
				"id_mns_estado" : "1",
				"mns_estado" : "sin enviar"
				
			},
			{
				"id_mns_estado" : "2",
				"mns_estado" : "enviado"
			
			}
		],
		"orden" : {
			"insertar" : [
				{
					"mns_estado" : "mensaje enviado"
				},
				{
					"mns_estado" : "chat sin conexion" 
				}
		    ],
			"modificar" : [
				{ 
					"mns_estado" : "conexion a internet activa, mensaje enviado"
				},
				{
					"mns_estado" : "el mensaje se envio correctamente"
				}
		    ],
			"eliminar" : [
				{
					"id_mns_estado" : 2
				}			
			]
		}
	},
	{
		"tabla" : "persona_estados",
		"data" : [
			{
				"id_persona_estado" : "1",
				"persona_estado" : "activo"
			},
			{
				"id_persona_estado" : "1",
				"persona_estado" : "activo"
			}
		],
		"orden" : {
			"insertar" : [
				{
					"persona_estado" : "activo"
				},
				{
					"persona_estado" : "activo"
				},
				{
					"persona_estado" : "activo"
				},
				{
					"persona_estado" : "activo"
				}
			],
			"modificar" : [
				{
					"id_persona_estado" : "1",
					"persona_estado" : "activo"
				},
				{
					"id_persona_estado" : "1",
					"persona_estado" : "activo"
				}
			],
			"eliminar" : [
				{
					"id_persona_estado" : "1"
				}			
			] 
		}
	},
	{
		"tabla" : "personas",
		"data" : [
			{ 
				"id_persona" : "1",
				"nombre" : "oscar",
				"apellido" : "gonzalez",
				"correo" : "oigonzalezp@gmail.com",
				"celular" : "3228858439",
				"id_persona_estado" : "1"
			},
			{ 
				"id_persona" : "2",
				"nombre" : "oscar",
				"apellido" : "gonzalez",
				"correo" : "oigonzalezp@gmail.com",
				"celular" : "3228858439",
				"id_persona_estado" : "1"
			}
		],
		"orden" : {
			"insertar" : [
				{
					"nombre" : "oscar",
					"apellido" : "gonzalez",
					"correo" : "oigonzalezp@gmail.com",
					"celular" : "3228858439",
					"id_persona_estado" : "1"
				},
				{
					"nombre" : "oscar",
					"apellido" : "gonzalez",
					"correo" : "oigonzalezp@gmail.com",
					"celular" : "3228858439",
					"id_persona_estado" : "1"
				}
		    ],
			"modificar" : [
				{ 
					"id_persona" : "2",
					"nombre" : "oscar",
					"apellido" : "gonzalez",
					"correo" : "oigonzalezp@gmail.com",
					"celular" : "3228858439",
					"id_persona_estado" : "1"
				},
				{ 
					"id_persona" : "2",
					"nombre" : "oscar",
					"apellido" : "gonzalez",
					"correo" : "oigonzalezp@gmail.com",
					"celular" : "3228858439",
					"id_persona_estado" : "1"
				}
		    ],
			"eliminar" : [
				{ 
					"id_persona" : "2"
				}
			]
		}
	},
	{
		"tabla" : "usuario_estados",
		"data" : [
			{ 
				"id_usuario_estado" : "1",
				"usuario_estado" : "activo"
			},
			{ 
				"id_usuario_estado" : "1",
				"usuario_estado" : "activo"
			}
		],
		"orden" : {
			"insertar" : [
				{
					"usuario_estado" : "activo"
				},
				{
					"usuario_estado" : "activo"
				}
		    ],
			"modificar" : [
				{ 
					"id_usuario_estado" : "1",
					"usuario_estado" : "activo"
				},
				{ 
					"id_usuario_estado" : "1",
					"usuario_estado" : "activo"
				}
		    ],
			"eliminar" : [
				{ 
					"id_usuario_estado" : "1"
				}
			]
		}
	},
	{
		"tabla" : "usuarios",
		"data" : [
			{ 
				"id_usuario" : "1",
				"id_usuario_estado" : "1",
				"id_persona" : "1"
			},
			{ 
				"id_usuario" : "2",
				"id_usuario_estado" : "1",
				"id_persona" : "1"
			}
		],
		"orden" : {
			"insertar" : [
				{
					"id_usuario_estado" : "1",
					"id_persona" : "1"
				},
				{
					"id_usuario_estado" : "1",
					"id_persona" : "1"
				}
		    ],
			"modificar" : [
				{ 
					"id_usuario" : "2",
					"id_usuario_estado" : "1",
					"id_persona" : "1"
				},
				{ 
					"id_usuario" : "2",
					"id_usuario_estado" : "1",
					"id_persona" : "1"
				}
		    ],
			"eliminar" : [
				{ 
					"id_usuario" : "2"
				}
			]
		}
	}
]';



