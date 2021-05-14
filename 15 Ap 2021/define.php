<!DOCTYPE html>
<html>
<head>
	<title>Define</title>
</head>
<body>
<?php 
$CAR="BUS";
echo $CAR;
echo "<br />";

define("BUS", "CAR");
echo BUS;
echo "<br />";

define("e", 123456789);
echo e;
echo "<br />";


define("xyz", ["abc","efg","hij",7,78]);
echo xyz[2];
echo "<br />";
echo xyz[0];
echo "<br />";


define("Y", 15);
function myfun(){
  echo "<br />";
  echo xyz[1];
  echo "<br />";
  echo Y;
}
 ?>

</body>
</html>