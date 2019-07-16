<?php
function greet($n)
{
	
	if ($n<=0) {
	
}else{
echo "$n+";
	$n--;
	greet($n);
}

}

greet(5);

?>
