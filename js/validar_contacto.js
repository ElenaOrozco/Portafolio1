function enviar(){
			//Objetos
			var nombre = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			
			expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			if (nombre ==""){
				alert("Error:  Debes escribir tu nombre");
				document.contacto.nombre.focus();	
				return false;
			}
			else if (email =="" || !expr.test(email) ){
				if (email =="")
				alert("Error:  Escribe tu correo " );
				else
				alert("Error: La dirección de correo:  " + email + "  es incorrecta.");
				
				document.contacto.email.focus();
				return false;
			}
			else if (document.contacto.message.value.length==0) {
				alert("Error:  Escribe tu comentario " );
				document.contacto.message.focus();
				return false;
			}
			
			return true;
			
			
		}