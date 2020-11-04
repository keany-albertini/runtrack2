<?php 


$arrayName = array( 200, 204, 172, 98, 171, 404, 459 );

print_r($arrayName);
for ($i=0; $i < count($arrayName) ; $i++)
{

	if ($arrayName[$i]%2 == 0) 
	{
	echo "$arrayName[$i] est paire<br/>";
	}

	else{
	echo "$arrayName[$i] est impaire<br/>";
	}
	
}
?>