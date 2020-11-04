<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$v = "AEIOUYaeiouy";

for ($i=0; isset($str[$i]); $i++) 
{ 
	for ($j=0; isset($v[$j]) ; $j++) { 

		if ($str[$i] == $v[$j]) {
			echo $str[$i];
			
		} 
		
	}
	
}


 ?>