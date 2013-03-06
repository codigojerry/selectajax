<?php
include 'conexion.php';

$r=$_POST['r'];
$con=conexion();

$res=mysql_query("select * from estados where cod_pais=".$r."",$con);

?>

<select id="estado">

<option value="">Seleccione</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['codigo_estado']; ?>"><?php echo $fila['nombre_estado']; ?></option>
<?php } ?>

</select>

