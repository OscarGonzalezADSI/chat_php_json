<?php
function btnMenu(){
	?>
	<svg width="60" height="60" style="margin:4px;">
	<circle cx="30" cy="30" r="30" stroke-width="4" fill="#9999e2"/>
	<!-- sombras -->
	<ellipse cx="28" cy="22" rx="20" ry="1" style="fill:#000;stroke:#000;stroke-width:2" />
	<ellipse cx="28" cy="32" rx="20" ry="1" style="fill:#000;stroke:#000;stroke-width:2" />
	<ellipse cx="28" cy="42" rx="20" ry="1" style="fill:#000;stroke:#000;stroke-width:2" />
	<!-- formas -->
	<ellipse cx="30" cy="20" rx="20" ry="1" style="fill:#fff;stroke:#fff;stroke-width:2" />
	<ellipse cx="30" cy="30" rx="20" ry="1" style="fill:#fff;stroke:#fff;stroke-width:2" />
	<ellipse cx="30" cy="40" rx="20" ry="1" style="fill:#fff;stroke:#fff;stroke-width:2" />
	</svg>
	<?php
}

function btnEnviar(){
	?>
	<svg height="50" width="50">
	<polygon points="15,8 35,20 15,33 10,28 10,25 15,20 10,15 10,13" style="fill:#9A65B8;stroke:#9A65B8;stroke-width:1" />
	<polygon points="10,13 30,20 10,29 22,20" style="fill:#ffffff;stroke:#9A65B8;stroke-width:1" />
	Sorry, your browser does not support inline SVG.
	</svg>
	<?php			
}

function imagenDefectoPerfil(){
	?>
	<svg width="60" height="60" class="foto" >
	<circle cx="30" cy="27" r="10" stroke="#999999" stroke-width="4" fill="#999999" />
	<circle cx="30" cy="65" r="20" stroke="#999999" stroke-width="4" fill="#999999" />
	<circle cx="30" cy="30" r="46" stroke="#ffffff" stroke-width="32" fill="#ffffff" fill-opacity=0 />
	Sorry, your browser does not support inline SVG.
	</svg>
	<?php	
}

function validaMensajeEstado($id_mensaje_estado){
	if($id_mensaje_estado == "1"){
		?>
		<svg height="17" width="25" >
		<line x1="4" y1="14" x2="13" y2="0" style="stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="0" y1="8" x2="4" y2="14" style="stroke:rgb(150,150,255);stroke-width:2" />
		</svg>
		<?php
	}else if($id_mensaje_estado == "2"){
		?>
		<svg height="17" width="25" >
		<line x1="4" y1="14" x2="13" y2="0" style="stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="0" y1="8" x2="4" y2="14" style="stroke:rgb(150,150,255);stroke-width:2" />

		<line x1="9" y1="14" x2="18" y2="0" style="stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="5" y1="8" x2="9" y2="14" style="stroke:rgb(150,150,255);stroke-width:2" />
		</svg>
		<?php
	}else if($id_mensaje_estado == "3"){
		?>
		<svg height="17" width="25" >
		<line x1="4" y1="14" x2="13" y2="0" style="stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="0" y1="8" x2="4" y2="14" style="stroke:rgb(150,150,255);stroke-width:2" />

		<line x1="9" y1="14" x2="18" y2="0" style="stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="5" y1="8" x2="9" y2="14" style="stroke:rgb(150,150,255);stroke-width:2" />

		<line x1="14" y1="14" x2="23" y2="0" style="stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="10" y1="8" x2="14" y2="14" style="stroke:rgb(150,150,255);stroke-width:2" />
		</svg>
		<?php
	}else if($id_mensaje_estado == "4"){
		?>
		<svg height="17" width="17" >
		<ellipse cx="8" cy="8" rx="7" ry="7" style="fill:#fff;stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="8" y1="9" x2="8" y2="2" style="stroke:rgb(150,150,255);stroke-width:2" />
		<line x1="8" y1="8" x2="12" y2="8" style="stroke:rgb(150,150,255);stroke-width:2" />
		</svg>
		<?php
	}
}



function validaMensaje($mensaje_id_usuario, $inicio_sesion_id_usuario){
	if($mensaje_id_usuario == $inicio_sesion_id_usuario){
		return "mio";
	}else{
		return "suyo";
	}		
}

function vistaChats($chats, $id_chat = ""){
	if($id_chat == ""){
		foreach($chats as $chat){
		?>
		<div class="chat" data-id="<?php echo $chat["id_chat"]; ?>" >
			<div>
				<?php
				if($chat["foto"] == ""){
					imagenDefectoPerfil();	
				}else{
					?>
					<img src="<?php echo $chat['foto']; ?>" class="foto" >
					<?php	
				}
				?>
			</div>
			<div class="chat_nombre" ><?php echo $chat["chat_nombre"]; ?></div>
			<div class="hora" ><?php echo $chat["hora"]; ?></div>
		</div>
		<?php
		}
	}else if(is_numeric($id_chat)){
		foreach($chats as $chat){
			if($chat["id_chat"] == $id_chat){
				?>
				<div class="chat">
					<div>
						<?php
						if($chat["foto"] == ""){
							imagenDefectoPerfil();	
						}else{
						?>
							<img src="<?php echo $chat['foto']; ?>" class="foto" >
						<?php	
						}
						?>
					</div>
					<div class="chat_nombre" ><?php echo $chat["chat_nombre"]; ?></div>
					<div class="hora" ><?php echo $chat["hora"]; ?></div>
				</div>
				<?php
			}
		}
	}else{
		echo "error";
	}
}

function vistaMensajes($mensajes, $id_chat, $inicio_sesion_id_usuario){
	$mensajes = json_decode($mensajes, true);
	foreach($mensajes as $mensaje){
		if($mensaje["id_chat"] == $id_chat){
			$mensaje_id_usuario = $mensaje["id_usuario"];
			$origenMensaje = validaMensaje($mensaje_id_usuario, $inicio_sesion_id_usuario);
			?>
			<div class="mensaje <?php echo $origenMensaje; ?>" >
				<?php echo $mensaje["mensaje"]; ?>
				<span style="display:block; text-align:right; margin-top:15px;">
				    5:00 pm <!-- falta poner la hora del mensaje-->
					<?php validaMensajeEstado($mensaje["id_mensaje_estado"]); ?>
				</span>
			</div>
			<?php
		}
	}
}

function vistaPaginaChats($chats, $mensajes, $inicio_sesion_id_usuario){
	foreach($chats as $chat){
		?>
		<div class="data" data-id="<?php echo $chat["id_chat"]; ?>">
			<?php vistaChats($chats, $chat["id_chat"]); ?>
			<div class="bandeja" style="float:left" >
				<?php vistaMensajes($mensajes, $chat["id_chat"], $inicio_sesion_id_usuario); ?>
			</div>
		</div>	
		<?php		
	}
}
