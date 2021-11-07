<html>
<head>

<SCRIPT language="JavaScript" type="text/javascript">
function twoinone(nr, parametros){
	if (nr == 1) {
	    	parent.ventana.location.href=parametros
	} 
	if (nr == 2)  {
	    	parent.menu.location.href=parametros
	    	parent.ventana.location.href="./presentacion.php"
	}
}

function validar(e, strValidos, campo) {
    if (document.all) {
        e = window.event;
    }

    var tecla;

    if (e.keyCode)
	{ tecla = e.keyCode; }
    else 
	{ tecla = e.which; }

    if ( (strValidos.indexOf( String.fromCharCode(tecla) ) == -1) && !(tecla==8 || tecla==9 || tecla==46 || (tecla>34 && tecla<41)) ) 
	return false; 
  
    return true; 
}

</SCRIPT>

</head>


<body bgcolor="#D9D9D9" font="arial">

<?php

include('configuracion.php');

	
$connect = pg_Connect("host=$host  dbname=$dbname user=$username password=$password");

if (!$connect) {
echo " error en la base de datos";
	exit;
}

$resulta_planteles=pg_Exec ($connect, "select *  from planteles order by descripcion;" );


?>

<p><font FACE="arial"><b>Teclee su Clave</b></font></p>

<form action="menu1.php" method=get name="frmFolio">
<fieldset>

	<table>
	<tr><td><font FACE="arial"><b>Matr�ula:</b></font></td> 
	    <td><input type=text name=matricula size=10 onKeypress="return validar(event, '0123456789', this) "></td>
	<tr><td>                                           </td> 
	    <td><input type="submit" value="Aceptar" name="enviar"></td>
	</table>

</fieldset>
</form>

<br>

</body>

</html>
