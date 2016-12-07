<?php
	error_reporting(0);
	include("conexion.php");
	class insertar{
			static function nuevo($cod,$nom,$des,$val){
				$cnx=conexion::conectar();
				$q="insert into producto (codigo, nombre, descripcion, valor) values ($cod,'$nom','$des',$val)";
				mysql_query($q,$cnx);
				mysql_close($cnx);
			}
		}
		$c=$_POST['txtCod'];
		$n=$_POST['txtNom'];
		$ds=$_POST['txtDes'];
		$vl=$_POST['txtVal'];
		insertar::nuevo($c,$n,$ds,$vl);
		print 'Producto Registrado <hr/>';
		print '<a href="../index.html">Regresar</a>';
?>