<?php  

function occurrences($str, $char)
{
	$compte = 0;
// isset = mon $i se balade sur $str tant que $str[$i] a une valeur
	for ($i=0;  isset($str[$i]) ; $i++)
	{ 
		if ($char == $str[$i]) {
			$compte++;
		}
	}
	return $compte;
}

// echo occurrences("alibaba", "a");



?>