<?php 

function iset($str)

{
	$doigt = 0;
	for ($i=0; isset($str[$i]) ; $i++) { 
	$doigt++;
		
	}

	return $doigt;
}


$str = "Certaines choses changent, et d'autres ne changeront jamais.";


for ($i=0;  isset($str[$i]) ; $i++) 
{ 
	echo $str[$i+1 - iset($str)];

	

}


?>