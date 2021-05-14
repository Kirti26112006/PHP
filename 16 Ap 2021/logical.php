<?php 


$x=true;
$y=true;
$z=false;
echo var_dump($x && $y);//&& means both are true
echo "<br />";
// in || one must be true to get result true
echo var_dump($x || $z);//|| means  true||false then  it is true

echo "<br />";
// in "or" operator one must be ture to get true
echo var_dump($x or $z);// means true||false then  it is true
echo "<br />";





 ?>