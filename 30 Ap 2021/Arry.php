<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
<?php
$apple=array("A","B","C","D");

print_r($apple);

echo "<br />";
for($x=0;$x<count($apple);$x++){
	echo $apple[$x];
	echo "<br />";
} 
	# code...
$age=array("A"=>"45","B"=>"89","C"=>"67","D"=>"34");

foreach ($age as $x =>$y) {
	# code...
	echo $x. "  ".$y;
	echo" <br />";
}
$abc=array(

array("AFH","GERN","SF"),
array("DFVS","SD","sdd"),
array("SDdc","Ddf","sdds")


);

echo $abc[0][0];
echo "<br />";
echo $abc[0][1];


echo "<br />";
echo $abc[0][2];


echo "<br />";
echo $abc[2][0];


echo "<br />";
echo $abc[1][0];

echo "<br />";
echo $abc[1][2];

echo "<br />";
echo $abc[2][1];

echo "<br />";
echo $abc[1][1];

?>
</body>
</html>