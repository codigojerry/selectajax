<?php
include 'conexion.php';

$q=$_POST['q'];
$con=conexion();

$res=mysql_query("select * from pais where cod_cont=".$q."",$con);

?>

<select id="pais" onchange="myFunction2(this.value)">

<option value="">Seleccione</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['nombre']; ?></option>
<?php } ?>

</select>

