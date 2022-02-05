<?php
include "../controlador/controlador.php";
?>
<html>
<head>
<link rel="stylesheet" href="../librerias/css/index.css">
<script src="../librerias/js/index.js"></script>
</head>
<body>
<div class="titulo" style="float:left; height:10%; width:100%;" >
<?php
btnMenu();
?>
</div>
<div class="chatPagina">
	<div class="chats" >
		<?php
		vistaChats($chats);
		?>
	</div>
	<div class="mensajes" style="float:left; display:block;" >
		<?php
		vistaPaginaChats($chats, $mensajes, $inicio_sesion_id_usuario)
		?>
		<div class="btnEnviar" id="btnEnviar" >
			<?php
			btnEnviar();
			?>
		</div>
		<textarea id="miMensaje" placeholder="Tu mensaje..."></textarea>
	</div>
</div>
</body>
</html>
