<!DOCTYPE html>
<html>
	<head>
			<title>Formularios Validacion</title>
			<link rel="stylesheet" type="text/css" href="css/form-java.css">
			<script type="text/javascript" ></script>
			<script src="jquery-1.11.1.min.js"></script>
			
			<script>
				
				
					
						//$("h1").css("color", "green");
						
						
					
			</script>

			


	</head>

	<body>
	
			
		<div id="container">
			<h1 align="center">Formulario</h1>
		
						
			<div id="wrapper"></div>	
				
				
				<div id="content">			
									
					<form id="miForm" action="form-jq.php" method="POST" onsubmit= "return validar('miForm1')" >
					 
			
						<fieldset>
			
							<legend>Ingrese sus datos</legend>
				
							<label  for="firstName">Nombre *</label>
							<input class="required" type="text" name="firstName" id="firstName" />
							<span class="error">ingrese el nombre</span>
							
							<label for="lastName">Apellido *</label>
							<input class="required" type="text" name="lastName" id="lastName" />
							
										
							<label for="edad">Edad *</label>
							<input class="required" type="text" name="edad" id="edad" />

							<label for="email">Correo *</label>
							<input class="required" type="text" name="email" id="email" />
							
							<label for="password">Contrasena *</label>
							<input class="required" type="password" name="password" id="password" />
							
							<label for="repeatPassword">Repita la Contrasena *</label>
							<input class="required" type="password" name="repeatPassword" id="repeatPassword" />
							
						
						</fieldset>
						
						<button type="submit">Enviar</button>
						
					</form>
			
				</div>
				<script>	
			

			$(document).ready(function(){

					function validar(miForm1)
{
	
	var ok = true;
	
	$("#miForm").find(".required").not(".email").each(function(){
		if(IsBlank($(this).val()))
		{		
			ok = false;			
		}		
	});


	$("#miForm").find(".email").filter(".required").each(function(){ 
		if(!isValidEmail($(this).val())) 
			ok = false;						
	});
	
	return ok;
}

//alert ($("#firstName").val());
						//Declaramos las variables a validar
						var firstName 		= $("#firstName").val();
						var lastName 		= $("#lastName").val();
						var email 		    = $("#email").val();
						var password 		= $("#password").val();
						var repeatPassword 	= $("#repeatPassword").val();
						var edad 		    = $("#edad").val();
						
						//alert (firstName);

					
					function IsBlank (strString)
					{
						if (strString.length == 0)
							
						for (i = 0; i < strString.length; i++)
						{
				    	strChar = strString.charAt(i);
						//$("#firstName").keydown(function(){		 						
								 //);	
							return false;							
								 	
						}						
				    return true;
					}
					

					$("#miForm").find(".required").each(function(){						
						$(this).keyup(function(){							
							if(IsBlank($(this).val()))
							{
				
							$(this).siblings("span.error").show();
						
							}
							else 			
					 		{
				
							$(this).siblings("span.error").hide();
							}
						});
		
	 				});

					
	
			




					//Definimos la funcion para validar el correo
					function isValidEmail(email)
					{

						if (email.length < 5)
							return false;

						subEmail=email.split('@'); //subEmail is a string array (contains strings splitted by '@')
						if (subEmail.length != 2)
							return false;

						dotStr=subEmail[1].split('.'); //dotStr is a string array (contains strings splitted by '.')

						if(dotStr.length<2)
							return false;

						for(i=1;i<dotStr.length;i++)
						{
						
							if((dotStr[i].length!=2)&&(dotStr[i].length!=3))
							return false;
						}
						
						return true;

					}

					
				</script>

				
				<pre>
						
				</pre>
				
		</div>
	</body>		
				
</html>