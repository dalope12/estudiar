<?php
    error_reporting(0);
	include("conexion.php");
	class frmEditarOK{
		static function existe($cod){
			$cnx=conexion::conectar();
			$r=mysql_query("select * from producto where codigo=$cod ;",$cnx);
			if(mysql_num_rows($r)==0){
				print 'Producto no encontrado';
				print '<a href="frmEliminar.html">Regresar</a>';
				}else{
				$f=mysql_fetch_array($r);
?>
							<html>
							<head/>
							<body>
								<form name="f1" method="GET" action="eliminar.php">
								Codigo<input type="text" name="txtCod" value="<?php print($f['codigo']); ?>" required   /><br/>
								Nombre<input type="text" name="txtNom" value="<?php print($f['nombre']); ?>" required   /><br/>
								Descripcion<input type="text" name="txtDes" value="<?php print($f['descripcion']); ?>" required /><br/>
								Valor<input type="text" name="txtVal" value="<?php print($f['valor']); ?>" required   /><br/>
								<input type="submit" name="OK" onclick="validar()"/>
								</form>
							</body>
						</html>
<?php
				
				//donde dice type="button"  en la linea 18, ahí le pongo submit mientras lo estoy programando, sin la validacion por el momento
								
				}
			mysql_close($cnx);
		}
	}
	$c=$_GET['txtCodigo'];
	frmEditarOK::existe($c);
	?>