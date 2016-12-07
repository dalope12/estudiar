<?php
    error_reporting(0);
	include("conexion.php");
	class eliminar{
			static function nuevo($cod){
				$cnx=conexion::conectar();
				print $cod;
				$q="delete from producto where codigo = ".$cod .";";
				print $q;
				mysql_query($q,$cnx);
				mysql_close($cnx);
			}
		}
		$c = $_GET['txtCod'];
		eliminar::nuevo($c);
		print 'Producto Eliminado <hr/>';
		print '<a href="../inicio.html">Regresar</a>';
?>