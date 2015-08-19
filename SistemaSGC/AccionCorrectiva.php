<!--RECORDATORIO PONER LA OPCION DE ENVIA, FUNCIONALIDAD Y OTROS ASPECTOS-->
<html>
<head>
<title>Acciones Correctivas</title>
</head>

<body background="http://www.fandroides.com/wp-content/uploads/2014/04/discover_ps4.png">

	<form method="post">
	<center>
	
			<img src="http://www.itmexicali.edu.mx/images/banner_web.jpg"><br /><br /><br /><br />
	</center>
	
			<font color="white"><b>FECHA</b></font>
			<input type="date" name="date1" /><br /><br /><br /><br />
			
	<center>
			<font color="white"><b>LA NO CONFORMIDAD PROVIENE DE:</b></font>
			<table border="2">
					<tr>
						
						<td><font color="white" size="1"><b>QUEJA DEL CLIENTE</b></font></td>
						<td><font color="white" size="1"><b>AUDITORIA DE SERVICIO</b></font></td>
						<td><font color="white" size="1"><b>ANALIS DE</b></font><br /><font color="white" size="1"><b>INDICADORES</b></font></td>
						<td><font color="white" size="1"><b>AUDITORIA DE</b></font><br /><font color="white" size="1"><b><center>CALIDAD</center></b></font></td>
						<td><font color="white" size="1"><b>ESPECIFICACIONES DE</b></font><br /><font color="white" size="1"><b>CALIDAD NO CUMPLIDAS</b></font></td>
						<td><font color="white" size="1"><b>EVALUACION DE</b></font><br /><font color="white" size="1"><b>CLIMA LABORAL</b></font></td>
						<td><font color="white" size="1"><b>OTRO, ESPECIFIQUE</b></font></td>
					</tr>
					<tr>
						<td><center><input type="checkbox" name="QDC" /></center></td>
						<td><center><input type="checkbox" name="ADS" /></center></td>
						<td><center><input type="checkbox" name="ADI" /></center></td>
						<td><center><input type="checkbox" name="ADC" /></center></td>
						<td><center><input type="checkbox" name="EDCNC" /></center></td>
						<td><center><input type="checkbox" name="EDCL" /></center></td>
						<td><center><textarea name="OE"></textarea></center></td>
					</tr>
			</table><br /><br /><br /><br />
			
			<font color="white"><b>SOLICITUD:</b></font>
			<table border="2">
				<tr>
					<td><font color="white"><b>DESCRIPCION:</b></font><br />
						<center><textarea name="Desc" style="margin: 0px; width: 495px; height: 108px;"></textarea></center></td>
				</tr>
				<tr>
					<td><font color="white"><b>Responsable de verificar el cumplimiento de acciones de mejora definida en el plan:</b></font><br />
								<center><textarea name="resp3" style="margin: 0px; width: 495px; height: 50px;"></textarea></center></td>
				</tr>
			</table><br /><br /><br />
			
			<font color="white"><b>REPORTE:</b></font><br />
			<table border="2">
				<tr>
						<td>
								<font color="white"><b>REQUIERE ACCION CORRECTIVA:</b></font><br />
							<center>
								<input type="radio" value="No" name="adjuntar9" onclick = "javascript: var ch=document.getElementById('actas9');ch.style.display='none' ; " checked /><font color="white"><b>NO</b></font>
								<input type="radio" value="Si" name="adjuntar9" onclick = "javascript: var ch=document.getElementById('actas9');ch.style.display='inline' ; "><font color="white"><b>SI</b></font><br />
								<textarea cols="20" rows="5" id="actas9" name="acta9" style="display: none; margin: 0px; width: 270px; height: 127px;" ;=""></textarea>
							</center>
						</td>
						
						<td>
							<font color="white"><b>REQUIERE CORRECCION:</b></font><br />
							<center>
								<input type="radio" value="No" name="adjuntar09" onclick = "javascript: var ch=document.getElementById('actas09');ch.style.display='none' ; " checked /><font color="white"><b>NO</b></font>
								<input type="radio" value="Si" name="adjuntar09" onclick = "javascript: var ch=document.getElementById('actas09');ch.style.display='inline' ; "><font color="white"><b>SI</b></font><br />
								<textarea cols="20" rows="5" id="actas09" name="acta09" style="display: none; margin: 0px; width: 270px; height: 127px;" ;=""></textarea>
							</center>
						</td>
				</tr>
			</table><br /><br /><br />
			
			<font color="white"><b>ANALISIS DE DATOS:</b></font><br />
			<table border="2">
				<tr>
					<td><font color="white" size="2"><b>TECNICA ESTADISTICA UTILIZADA: CAUSA RAIZ(6)</b></font><br />
					<center><textarea name="causaR" style="margin: 0px; width: 495px; height: 50px;"></textarea></center></td>	
				</tr>
				<tr>
					<td><font color="white" size="2"><b>ACCION CORRECTIVA O CORRECCION A REALIZAR:</b></font><br />
					<center><textarea name="correcionR" style="margin: 0px; width: 495px; height: 50px;"></textarea></center></td>
				</tr>
			</table><br /><br /><br />
			
			<font color="white"><b>PLAN:</b></font><br />
			<table border="2">
				<tr>
					
					<td><center><font color="white" size="2"><b>ACCION</b></font></center></td>
					<td><center><font color="white" size="2"><b>RESPONSABLE</b></font></center></td>
					<td><center><font color="white" size="2"><b>FECHA PROGRAMADA</b></font></center></td>
					
				</tr>
				<tr>
					<td><center><textarea name="accion1" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="respons1" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="FP" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
				<tr>
				<tr>
					<td><center><textarea name="accion2" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="respons2" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="FP1" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
				</tr>
				<tr>
					<td><center><textarea name="accion3" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="respons3" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="FP2" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
				</tr>
				<tr>
					<td><center><textarea name="accion4" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="respons4" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="FP3" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
				</tr>
			</table><br /><br /><br />
			
			<font color="white"><b>EVIDENCIAS DE LAS ACCIONES CORRECTIVAS:</b></font><br />
			<textarea name="EAC" style="margin: 0px; width: 495px; height: 108px;"></textarea><br /><br />
			
			<table border="2">
				<tr>
					<td><center><font color="white" size="2"><b>DEFINIO LA AC O CORRECCION:</b></font></center></td>
					<td><center><font color="white" size="2"><b>VERIFICO LA AC O CORRECCION:</b></font></center></td>
					<td><center><font color="white" size="2"><b>FECHA DE CIERRE: NOMBRE Y FIRMA DEL RD</b></font></center></td>
				</tr>
				<tr>
					<td><center><textarea name="DAC" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="VAC" style="margin: 0px; width: 260px; height: 50px;"></textarea></center></td>
					<td><center><textarea name="FC" style="margin: 0px; width: 300px; height: 50px;"></textarea></center></td>
				</tr>
			</table><br /><br />
			
			<input type="submit" value="ENVIAR" />
	</center>
	</form>
</body>
</html>