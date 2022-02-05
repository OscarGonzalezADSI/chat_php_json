document.addEventListener('DOMContentLoaded', (event) => {
	
var chats = document.getElementsByClassName("chat");
var dataa = document.getElementsByClassName("data");
var miMensaje = document.getElementById("miMensaje");
var btnEnviar = document.getElementById("btnEnviar");

function desaparecer(){
	for(let i=0; dataa.length > i; i++){
		dataa[i].style.display = "none";
	}	
}

function aparecer(dataa, i){
	dataa[i].style.display = "block";
	for(let d=0; dataa[i].childNodes.length > d; d++){
		if(dataa[i].childNodes[d].className === "bandeja"){
			dataa[i].childNodes[d].scrollTo(0, dataa[i].childNodes[d].scrollHeight);
		}
	}
}

desaparecer();
aparecer(dataa, 0);

for(let i=0; chats.length > i; i++){
	chats = document.getElementsByClassName("chat");
	chats[i].addEventListener("click", function(){
		dataa = document.getElementsByClassName("data");
		desaparecer();
		aparecer(dataa, i);
		for(let d=0; dataa[i].childNodes.length > d; d++){
			if(dataa[i].childNodes[d].className === "bandeja"){
				dataa[i].childNodes[d].scrollTo(0, dataa[i].childNodes[d].scrollHeight);
			}
		}
	}, false);
}

function crearMensaje(dataa){
	for(let i=0; dataa.length > i; i++){
		if(dataa[i].style.display === "block"){
			
			let miMensaje = document.getElementById("miMensaje");
			let nombreContenido = document.createTextNode(miMensaje.value);
			let div = document.createElement("div");
			let span = document.createElement("span");
			let img = document.createElement("img");
			
			if(miMensaje.value !== ""){
				img.src = "../imagenes/reloj.svg";
				
				span.style.display = "block";
				span.style.textAlign = "right";
				span.style.marginTop = "15px";
				span.appendChild(img);
				
				div.className = "mensaje mio";
				div.appendChild(nombreContenido);
				div.appendChild(span);
				
				for(let d=0; dataa[i].childNodes.length > d; d++){
					if(dataa[i].childNodes[d].className === "bandeja"){
						dataa[i].childNodes[d].appendChild(div);
						dataa[i].childNodes[d].scrollTo(0, dataa[i].childNodes[d].scrollHeight);
					}
				}
                miMensaje.value = "";				
			}else{
				alert("no puede enviar un mensaje vacio.");
			}
		}
	}
}

btnEnviar.addEventListener("click", function(){
	dataa = document.getElementsByClassName("data");
	crearMensaje(dataa);
}, false);

});
