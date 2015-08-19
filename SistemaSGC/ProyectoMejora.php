<html>
<head>
<title>Registro de proyectos de mejora</title>
</head>

<body background="http://www.fandroides.com/wp-content/uploads/2014/04/discover_ps4.png">

	<form method="post">
		<center>
			<img src="http://www.itmexicali.edu.mx/images/banner_web.jpg"><br /><br /><br /><br />
			
			<font color="white" size="5"><b>REGISTRO DE PROYECTOS DE MEJORA</b></font><br /><br /><br /><br />
			
			<!--Aqui se escribe el nombre del proyecto que se realizara con su respectiva campo de texto-->
			<font color="white"><b>NOMBRE DEL PROYECTO</b></font>
			<input type="texto" name="namep" /><br /><br />
			
			<!--Se escribe el punto de la norma-->
			<font color="white"><b>PUNTO DE LA NORMA</b></font>
			<input type="text" name="PNorma" /><br /><br /><br /><br />  
			
			<!--Tabla del proceso al que va dirigido-->
			<table border="2">
				<tr>
					<td colspan="3"><font color="white"><b><center>PROCESO AL QUE VA DIRIGIDO EL PROYECTO</center></b></font></td>
					<td><font color="white"><b>MARQUE</b></font></td>
				</tr>
 
				<tr>
					<td rowspan="5"><center><font color="white"><b>PROCESO</b></font></center></td>
					<td colspan="2"><font color="white"><b>VINCULASION Y DIFUSION DE LA CULTURA</b></font></td>
					<td colspan="2"><center><input type ="Checkbox" name="x1"/></center></td>
				</tr>
 
				<tr>
					<td colspan="2"><font color="white"><b><center>ACADEMICO</center></b></font></td>
					<td colspan="2"><center><input type ="Checkbox" name="x2"/></center></td>
					
				</tr>
				
				<tr>
					<td colspan="2"><font color="white"><b><center>INNOVACION Y CALIDAD</center></b></font></td>
					<td colspan="2"><center><input type ="Checkbox" name="x3"/></center></td>
				</tr>
				
				<tr>
					<td colspan="2"><font color="white"><b><center>ADMINISTRACION DE LOS RECURSOS</center></b></font></td>
					<td colspan="2"><center><input type ="Checkbox" name="x4"/></center></td>
				</tr>
				
				<tr>
					<td colspan="2"><font color="white"><b><center>PLANEACION</center></b></font></td>
					<td colspan="2"><center><input type ="Checkbox" name="x5"/></center></td>
				</tr>
			</table><br /><br /><br />
			
			<!--Tabla del contenido de la informacion (planteamiento,objetivo,descripcion, etc.)-->
			<table border="2">
				<tr>
					<td>
						<font color="white"><b>PLANTEAMIENTO DE LA HIPOTESIS DEL PROYECTO DE MEJORA:</b></font><br />
						<!--Se utiliza texareas para que el usuario escriba-->
						<center><textarea name="hipo" ows="10" cols="50" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"></textarea></center>
					</td>
				</tr>
				<tr>
					<td>
						<font color="white"><b>OBJETIVO:</b></font><br />
						<center><textarea name="obj" ows="10" cols="50" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"></textarea></center>
					</td>
				</tr>
				<tr>
					<td>
						<font color="white"><b>AREA DE INFLUENCIA:</b></font><br />
						<center><textarea name="influencia" ows="10" cols="50" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"></textarea></center>
					</td>
				</tr>
				<tr>
					<td>
						<font color="white"><b>DESCRIPCION BREVE DEL PROYECTO:</b></font><br />
						<center><textarea name="desc" ows="10" cols="50" style="margin-top: 0px; margin-bottom: 0px; height: 85px;"></textarea></center>
					</td>
				</tr>
			</table><br /><br /><br /><br />
			
			<!--Cronograma de implementacion-->
			<font color="white"><b>CRONOGRAMA DE IMPLEMENTACION:</b></font>
			<table border="2">
				<tr>
					<td rowspan="2"><font color="white"><b><center>ACTIVIDADES</center></b></font></td>
					<td colspan="2"><center><font color="white"><b>PERIODO</b></font></center></td>
					<td rowspan="2"><center><font color="white"><b>RESPONSABLE</b></font></center></td>
					<td colspan="2"><center><font color="white" size="2"><b>VIABILIDAD AUTORIZADA POR EL </b></font><br/>
											<font color="white" size="2"><b>COMITE DE INNOVACION Y CALIDAD(PLANTEL)</b></font></center></td>
					
				</tr>
				<tr>
					<td><font color="white" size="1"><b><center>TIEMPO DE INICIO</center></b></font></td>
					<td><font color="white" size="1"><b><center>TIEMPO DE TERMINO</center></b></font></td>
					<td><center><font color="white" size="2"><b>FIRMA</b></font></center></td>
				</tr>
				
				<!--TextAreas para el llenado de cada una de las secciones de la tabla-->
				<tr>
					<td><textarea name="act1"></textarea></td>
					<td><textarea name="TI1"></textarea></td>
					<td><textarea name="TT1"></textarea></td>
					<td><textarea name="Resp1"></textarea></td>
					<td><textarea name="Firma1" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 32px;"></textarea></td>
				</tr>
				
				<tr>
					<td><textarea name="act2"></textarea></td>
					<td><textarea name="TI2"></textarea></td>
					<td><textarea name="TT2"></textarea></td>
					<td><textarea name="Resp2"></textarea></td>
					<td><textarea name="Firma2" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 32px;"></textarea></td>
				</tr>
				
				<tr>
					<td><textarea name="act3"></textarea></td>
					<td><textarea name="TI3"></textarea></td>
					<td><textarea name="TT3"></textarea></td>
					<td><textarea name="Resp3"></textarea></td>
					<td><textarea name="Firma3" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 32px;"></textarea></td>
				</tr>
				
				<tr>
					<td><textarea name="act4"></textarea></td>
					<td><textarea name="TI4"></textarea></td>
					<td><textarea name="TT4"></textarea></td>
					<td><textarea name="Resp4"></textarea></td>
					<td><textarea name="Firma4" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 32px;"></textarea></td>
				</tr>
				
				<tr>
					<td><textarea name="act5"></textarea></td>
					<td><textarea name="TI5"></textarea></td>
					<td><textarea name="TT5"></textarea></td>
					<td><textarea name="Resp5"></textarea></td>
					<td><textarea name="Firma5" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 32px;"></textarea></td>
				</tr>
			</table><br /><br />
			
			<font color="white"><b>RESULTADOS Y OBSERVACIONES</b></font><br /><br />
			<table border="2">
			
				<tr>
					<td><font color="white"><b><center>IMPACTO</center></b></font></td>
					<td><font color="white"><b><center>RESULTADOS OBTENIDOS</b></center></font>
						<font color="white"><b><center>DURANTE EL PERIODO DE PRUEBA</center></b></font></td>
					<td width="20"><center><font color="white"><b>OBSERVACIONES</b></font></center></td>
					
				</tr>
				<tr>
					<td><textarea name="impact" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea></textarea></td>
					<td><textarea name="result" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea></td>
					<td><textarea name="obser" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 70px;"></textarea></td>
					
					
				</tr>
			
			</table><br /><br /><br />
			
			<table border="2">
				<tr>
					<td><center><font color="white"><b>PROPONE</b></font></center></td>
					<td><center><font color="white"><b>APROBACION</b></font></center></td>
				</tr>
				<tr>
						<td><textarea name="propone" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea></td>
						<td><textarea name="aprobacion" ows="10" cols="43" style="margin-top: 0px; margin-bottom: 0px; height: 40px;"></textarea></td>
				</tr>
			</table><br /><br />
			
			<!--Boton de envio de los datos-->
			<input type="submit" value="Enviar" />
		</center>	
	</form><!--Recordatorio colocar en el form la funcionalidad de envio de los datos-->		
</body>
</html>