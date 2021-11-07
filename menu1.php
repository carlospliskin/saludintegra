<html>
<head>

<SCRIPT language="JavaScript" type="text/javascript">
function twoinone(nr,parametros){
	if (nr == 1) {
	    	parent.ventana.location.href=parametros
	} 
	if (nr == 2)  {
	    	parent.menu.location.href=parametros
	    	parent.ventana.location.href="./presentacion.php"
	}
}
</SCRIPT>
</head>

<body bgcolor="#D9D9D9">

<?php
/*
	include('configuracion.php');

	if ($utiliza_gets=="SI") {
		$matricula = $_GET['matricula'];
	}

	$connect = pg_Connect("host=$host_servidor  dbname=$name_database user=$usuariobd password=$passwordbd port=5432");

	if (!$connect) {
	echo " error en la base de datos";
		exit;
	}

	$resulta_encuestados=pg_Exec ($connect, "SELECT matricula, capturado from estudiantes where matricula='$matricula';" );

	if (pg_NumRows($resulta_encuestados)>0){
		$renglon_enc=pg_fetch_row($resulta_encuestados, 0);
		$capturado=$renglon_enc[1];
		if ($capturado==f){
			print("<font FACE='arial'><b>MATRICULA: $matricula</b></font><br><br>");
			$parametros = "?matricula=$matricula";
			print("<a HREF='JavaScript:twoinone(1, \"cestudiantes.php$parametros\")'>General</a><br>");
			print("<a HREF='JavaScript:twoinone(1, \"cestudiantesa.php$parametros\")'>Aprendizaje</a><br>");
			print("<a HREF='JavaScript:twoinone(1, \"cestudiantest.php$parametros\")'>Tutoria</a><br>");
			print("<a HREF='JavaScript:twoinone(1, \"cestudiantesea.php$parametros\")'>Evaluacion del aprendizaje</a><br>");
			print("<br><a HREF='JavaScript:twoinone(2, \"menu.php\")'>Salir</a><br>");
		} else {
			print("El alumno con la matricula $matricula ya captur su encuesta.<br>");
			print("<a HREF='JavaScript:twoinone(2, \"menu.php\")'>Regresar</a><br>");
		}
	} else {
		print("La matricula no se encuentra en la base de datos<br>");
		print("<a HREF='JavaScript:twoinone(2, \"menu.php\")'>Regresar</a><br>");
	}
*/
?>
</body>

</html>
