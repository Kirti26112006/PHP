<?php
for ($i=0;$i<10;$i=$i+1) { 
	if ($i==4) {
		continue;
		# code...
	}
	echo $i;
	echo "<br/>";
	# code...
}

for ($c=50; $c<60 ; $c=$c+1) { 
	if ($c==55) {
		continue;
		# code...
	}
	echo "$c";
	# code...
	echo "<br/>";
}

  ?>