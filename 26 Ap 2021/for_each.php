<?php  
$color=array("red","blue","yellow");
foreach ($color as $x ) {
	echo $x;
	echo "<br/>";
	# code...
}

$abc=array(123,789,"lmn");
foreach ($abc as $y ) {
	echo $y;
	echo "<br/>";
	# code...
}
$xyz=array("Raj"=>"45","Priya"=>"34");
foreach ($xyz as $keys => $save) {
	echo "$keys => $save";
	echo "<br/>";
	# code...
}

$random=array("A"=>"abc","X"=>"xyz","L"=>"lmn","H"=>"ijk");
foreach ($random as $variable => $def) {
	echo "$variable => $def";
	echo "<br/>";
	# code...
}


?>