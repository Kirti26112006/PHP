<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$age=array("Asc"=>"45","Bjks"=>"89","Ckj"=>"67","Djk"=>"34");


print_r(array_change_key_case($age,CASE_UPPER));
echo "<br />";


print_r(array_change_key_case($age,CASE_LOWER));
echo "<br />";


$apple=array("A","B","C","D");
$price=array("300","500","240","456");


$c=array_combine($apple,$price);
print_r($c);


$a=array("ABC","ABC","B","XYZ","LMN","LMN","LMN");
print_r(array_count_values($a));


echo "<br />";


$age=array("RKL"=>"67","Asc"=>"45","Bjks"=>"89","Ckj"=>"67","Djk"=>"34");
$xyz=array("Asc"=>"45","Bjks"=>"89","Ckj"=>"67");

$results=array_diff($age,$xyz);
print_r($results);
echo"<br />";


$a1=array("red","abc","xyz");
$a2=array("lmn","opq","blue");



print_r(array_merge($a1,$a2));

$a=array("ynm","ghjb","yugy");
array_pop($a);
print_r($a);

$b=array("jhj","hh","uhui","juuju");
array_push($b,"abc","hjbhj");
print_r($b);



$a1=array("ABC","XYZ");
$a2=array("Apple","Kiwi");

$a=array_replace($a1,$a2);
print_r($a);
echo "<br />";
print_r(array_reverse($a1));


$c=array(5,46,89);
echo array_sum($c);








?>
</body>
</html>