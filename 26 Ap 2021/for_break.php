<?php  
//we can exit for loop using break

for ($i=0; $i<10;$i=$i+1) {
if ($i==4) {
	break;
 	# code...
 } 
	
	echo $i;
	echo "<br/>";# code...
}

for ($a=25; $a<45;$a=$a+1) {
if ($a==30) {
	break;
 	# code...
 } 
	# code...
 echo $a;
 echo "<br/>";
}

for ($b=2; $b<16;$b=$b+2) {
if ($b>12) {
	break;
 	# code...
 } 
	# code...
 echo $b;
 echo "<br/>";
}
?>