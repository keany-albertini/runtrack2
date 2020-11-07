<?php  


function calcule($a, $operation, $b)
{	
	if ($operation == "+") 
	{
		return $a + $b;
	}
	elseif($operation == "-")
	{
		return $a - $b;
	}
	elseif($operation == "*")
	{
		return $a * $b;
	}
	elseif($operation == "/")
	{
		return $a / $b;
	}
	else
	{
		return $a % $b;
	}	
}

$resultat = calcule(56, "*", 2);
echo $resultat;

?>


