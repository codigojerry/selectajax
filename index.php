<?php
include 'conexion.php';
?>
<!DOCTYPE html>

<html>

<head>

<script src="ajax.js"></script>

<script>

function myFunction(str)
{
loadDoc("q="+str,"proc.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  });
}

function myFunction2(str)
{
loadDoc("r="+str,"proc2.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
    }
  });
}

</script>

</head>

<body>

<h2>HTML - PHP - AJAX - MySQL</h2>

<?php

$con=conexion();
$res=mysql_query("select * from continente",$con);

?>

<select id="cont" onchange="myFunction(this.value)">

<option value="">Seleccione</option>

<?php

while($fila=mysql_fetch_array($res)){

?>

 <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['nombre']; ?></option>

<?php } ?>

</select>


<div id="myDiv"></div>

<div id="myDiv2"></div>

</body>

</html>