<!DOCTYPE html>
<html>
<head><title>Practica 7: PHP</title></head>
<body>
<h1>Hola mundo desde html</h1>
<?php
	echo"<h1>Hola mundo desde PHP</h1>";
?>
<p>Suma de variables a=5, b=6</p>
<?php
$a=5;
$b=6;
$c=$a+$b;

echo $c;
?>

<?php
print "<h2>Impresion con print</h2>";
print "Hola<br>";
?>

<?php
$t=date("H");

if ($t<"18") {
  echo "Ten un buen dia!";
} else {
  echo "Buenas noches!";
}
?>

<?php 
echo "<br>ciclo while <br>";
$x=1; 

while($x<=5) {
  echo "X= $x <br><hr>";
  $x++;
} 
?>

<?php
$edad=array("Pedro"=>"35","Brenda"=>"37","Jesus"=>"43");
arsort($edad);
/*
for($i=0;$i<count($edad);$i++) {
  echo $edad[$i];
  echo "<br>";
}
*/

$carros=array("Volvo","BMW","Toyota");
rsort($carros);
for($y=0;$y<count($carros);$y++) {
  echo $carros[$y];
  echo "<br>";
}
?>

</body>
</html>

