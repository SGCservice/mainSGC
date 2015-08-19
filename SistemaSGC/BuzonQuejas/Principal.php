<html>
<head>
<title>Buzon de quejas y sugerencias</title>

<!--INSTRUCCIONES PARA LA FECHA AUTOMATICA-->
<script language="javascript"> 
mydate = new Date(); 
myday = mydate.getDay(); 
mymonth = mydate.getMonth(); 
myweekday= mydate.getDate(); 
weekday= myweekday; 

if(myday == 0) 
day = " DOMINGO " 

else if(myday == 1) 
day = " LUNES " 

else if(myday == 2) 
day = " MARTES " 

else if(myday == 3) 
day = " MIERCOLES " 

else if(myday == 4) 
day = " JUEVES " 

else if(myday == 5) 
day = " VIERNES " 

else if(myday == 6) 
day = " SABADO " 

if(mymonth == 0) 
month = "ENERO " 

else if(mymonth ==1) 
month = "FEBRERO " 

else if(mymonth ==2) 
month = "MARZO" 

else if(mymonth ==3) 
month = "ABRIL" 

else if(mymonth ==4) 
month = "MAYO" 

else if(mymonth ==5) 
month = "JUNIO" 

else if(mymonth ==6) 
month = "JULIO" 

else if(mymonth ==7) 
month = "AGOSTO" 

else if(mymonth ==8) 
month = "SEPTIEMBRE" 

else if(mymonth ==9) 
month = "OCTUBRE" 

else if(mymonth ==10) 
month = "NOVIEMBRE" 

else if(mymonth ==11) 
month = "DICIEMBRE" 
</script> 
</head>

<body background="http://www.fondox.net/wallpapers/textura-fondo-azul-1573.jpg" onload="empezar()">

<!-- Imagen SEP -->
<center>
<IMG SRC="http://www.itmexicali.edu.mx/quejas/img/logos.png">
</center>

<!-- Escrito del buzon de quejas-->
<font align="center" size="4" color="yellow"><p><b>Para el Instituto Tecnológico de Mexicali, es importante conocer tus inquietudes y nuevas ideas para poder ofrecerte un mejor servicio, por tal motivo, pone a tu disposición este buzón de quejas y sugerencias.
Le recomendamos no olvidar poner su dirección de correo electrónico, para poder enviarle una respuesta más personalizada.</b></p></font><br /><br />

<!--FORMULARIOS-->
<center>
<!--RECORDATORIO EN EL FORM COLOCAR LAS IPCIONES DE ENVIO POR POST-->
<form>

	<!--COLOCACION DE FECHA AUTOMATICA-->
	<font color="yellow">
	<b>
		<script>document.write(day);document.write(myweekday+" DE "+month+"");</script> 
	</b>
	</font>
	<br /><br />
	
	<!--No.Control-->
	<font color="yellow"><b>NO. CONTROL:</b></font>
	<input type="text" name="control" /><br /><br /><br />
	
	<!--Colocamos un opcion de despligue para que el usuario elige entre queja o sugerencia-->
	<font color="yellow" align="center"><b>QUEJA O SUGERENCIA:</b></font><br /><br />
	<input type="radio" value="Queja" name="adjuntar" onclick = "javascript: var ch=document.getElementById('acta1');ch.style.display='inline' ; " checked /><font color="yellow"><b>QUEJA</b></font>
	<input type="radio" value="Sugerencia" name="adjuntar" onclick = "javascript: var ch=document.getElementById('acta1');ch.style.display='inline' ; "><font color="yellow"><b>SUGERENCIA</b></font><br />
	<textarea cols="40" rows="10" id="acta1" name="acta1" style=" display:none";/></textarea><br /><br />
	
	<!--Aqui se coloca el correo del alumno-->
	<font color="yellow"><b>CORREO:</b></font>
	<input type="text" name="email" /><br /><br />
	
	<font color="yellow"><b>NIP</b></font>
	<input type="text" name="NIP" /><br /><br />
	
	<center>
	<!--Opcion para el usuario si quiere poner o no sus datos personales.-->
	
	<font color="yellow"><b>QUIERES PONER TUS DATOS?</b></font><br /><br>
		<input type="radio" value="No" name="adjuntar" onclick = "javascript: var ch=document.getElementById('acta');ch.style.display='none' ; " checked /><font color="yellow"><b>NO</b></font>
		<input type="radio" value="Si" name="adjuntar" onclick = "javascript: var ch=document.getElementById('acta');ch.style.display='inline' ; "><font color="yellow"><b>SI</b></font><br />
		<textarea cols="40" rows="10" id="acta" name="acta" style=" display:none";/></textarea><br /><br />
	</center>
	
	<!--BOTON DE ENVIAR-->
	<input type="submit" value="ENVIAR" />
	
</form>
</center>







<!--RECORDATORIOS-->
<!--Investigar como darle un folio aleatorio tanto quejas como sugerencias al hacerlos documentos para queja:(Q2015xxx) para sugerencia:(S2015xxx)-->
<!--Al presionar el boton de enviar que genere un documento con toda la informacion y que le asigne un folio-->
</body>
</html>