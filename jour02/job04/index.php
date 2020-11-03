<?php

$n = 0;
$f = "Fizz";
$b = "Buzz";




for ($n=1; $n <= 100; $n++) 
{ 
	
	if (($n %3==0)&&($n %5==0)) 
	{
		echo $f . $b;
		echo "<br/>";
	}

	elseif ($n %3==0) {
		echo $f . "<br/>";


	}

	elseif ($n %5==0) 
		{
		echo $b . "<br/>";
	}


	


	else{
		echo $n;
		echo "<br/>";
	}
	
}















?>