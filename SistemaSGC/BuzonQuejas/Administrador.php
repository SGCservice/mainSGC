<html>
<head>
<title>ADMINISTRADOR</title>
</head>

<body background="http://www.fondox.net/wallpapers/textura-fondo-azul-1573.jpg">
	
	<!--PARTE SUPERIOR DE LA PAGINA (PRESENTACION)-->
	<table align="center" width=1390 border=0>
		<tr>
			<td>
							<!--Imagen del logo de ITM-->
							<img  src="http://www.universidadmonterrey.com/imagenes/logos/logo181.jpg">
					
					<center>
						<td>
							<font color="yellow" size="7"><b>ADMINISTRADOR</b></font>
						</td>
					</center>
			</td>
		</tr>
	</table>
	<br />
	<br />

<!--RECORDATORIO: Meter codigo PHP para la creacion y eliminacion de usuarios en una BD-->
<form method="post" name="Admi">
	<!--ENVIO DE LA RESPUESTA PARA EL ALUMNO-->
	<table align="left" WIDTH=1390 BORDER=0>
			<tr>
				<td>
							
					<!--Leyenda para la creacion del usuario y password-->
					<font color="yellow" align="left">
						<b>CREACION DE USUARIOS Y PASSWORDS</b>
					</font>
					
					<!--Son espacion para alinear los textos y formularios-->
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					
					<!--LEYENDA PARA LA ELIMINACION DE USUARIOS-->
					<font color="yellow" align="center"><b>ELIMINACION DE USUARIOS</b></font><br /><br />
						
						<!--Input para introducir el nuevo usuario-->
						<input type="text" name="NU" align="left" />
						<font color="yellow"><b> USUARIO NUEVO</b></font>
						
						<!--Son espacion para alinear los textos y formularios-->
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					
						<!--Leyenda para eliminacion de usuarios-->
						<font color="yellow"><b>USUARIO A ELIMINAR</b></font>
						<input type="text" name="UE"><br /><br />
						
						<!--Boton para el envio de la respueta al alumno es un docuemento-->
						<input type="text" name="NP" align="left" /><font color="yellow"><b>PASSWORD PARA EL USUARIO</b></font><br /><br />
					
						
					<!--Boton de envio de la respuesta tanto queja como sugerencia-->
						<input type="submit" value="CREAR" align="left" />
						
					<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span>
					
					<!--BOTON PARA LA ELIMINACION DEL USUARIO-->
					<input type="submit" value="ELIMINAR"><br /><br /><br /><br />
						

				</td>
				
			</tr>
		</table>
		
		<center>
		<!--MODIFICACION YA SEA TANTO USUARIO COMO PASSWORD-->
		<font color="yellow" align="center"><b>MODIFICACION DE USUARIO O PASSWORD</b></font><br /><br />
		<font color="yellow" size="1"><b>CON ANTERIORIDAD INGRESE EL USUARIO O PASSWORD A MODIFICAR</b></font><br />
		<input type="text" name="APU"/><br /><br />
		<input type="radio" value="ocultar" name="adjuntar3" onclick = "javascript: var ch=document.getElementById('acta2');ch.style.display='none';" checked /><font color="yellow"><b>OCULTAR</b></font>
		<input type="radio" value="NUsuario" name="adjuntar3" onclick = "javascript: var ch=document.getElementById('acta2');ch.style.display='inline';"/><font color="yellow"><b>USUARIO</b></font>
		<input type="radio" value="NPassword" name="adjuntar3" onclick = "javascript: var ch=document.getElementById('acta2');ch.style.display='inline';"/><font color="yellow"><b>PASSWORD</b></font><br />
		<br />
		<input type="text" cols="40" rows="10" id="acta2" name="acta2" style=" display:none";/><br />
		<input type="submit" value="MODIFICAR" /><br /><br /><br /><br />
		</center>
</form>

		<center>
				<img  src="http://www.itmexicali.edu.mx/quejas/img/logos.png">
		</center>
</body>
</html>

