<!DOCTYPE html>
<html>
	<head>
			<title>Formularios</title>
			<link rel="stylesheet" type="text/css" href="css/formulario.css">
			<script src="jquery-1.11.1.min.js"></script>
			<script>
				$(document).ready(function(){

						$("h1").css("color", "green");	

				});
</script>

	 
	</head>

	<body>
	
			
		<div id="container">
		
	
			
			<div id="wrapper"></div>
			
				<div id="sidebar">
					<form action="index.php" method="post" onsubmit="return true;">
				
						
					
					</form>
					
						
				</div>
				
				<div id="content">			
									
					<form action="index.php" method="post" id="form" onsubmit="return validar()" >
			
						<fieldset>
			
							<legend>Ingrese sus datos</legend>
				
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" />

							<label for="password">Contrasena</label>
							<input type="password" name="password" id="password" />

						</fieldset>					
						
			
					
			
						<button type="submit">Enviar</button>

					</form>
		
				
			</div>
			</div>
		
			<div id="footer">
			</div>
		
		</div>

			
	</body>
	
	<script>
		function IsBlank (strString){

			if (strString.length == 0)
			return true;

			for (i = 0; i < strString.length; i++)
			{
				strChar = strString.charAt(i);
				if (strChar != " ")
					return false;
			}
			return true;
		}


	
		function validar(){

			var ok = true;

			$("#form").

			//Declaramos las variables a validar
			var name = $("#name").val();	
			//var password 		= document.getElementById("password").value;
		
			//var email 		= document.getElementById("email").value;
			//var password 		= document.getElementById("password").value;
			//var repeatPassword 	= document.getElementById("repeatPassword").value;
			//var edad 		= document.getElementById("edad").value;

			
			//Validamos nombre
			//if( name.length == 0){			
			//	ok = false;
			//}
			
			if( IsBlank(name) ){
				ok = false;
				}
				
			if(ok)return ok;
			alert('Complete todos los campos indicados');
		}
			
			
	
	</script>
	
</html>