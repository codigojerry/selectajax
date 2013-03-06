<?php
include 'conexion.php';

$q=$_POST['q'];
$con=conexion();

$res=mysql_query("select * from pais where cod_cont=".$q."",$con);

?>

<select id="pais" onchange="myFunction2(this.value)"><!--cuando seleccionan un pais se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->

<option value="">Seleccione</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['nombre']; ?></option>
<?php } ?>

</select>

