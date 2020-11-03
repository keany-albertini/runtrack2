
<?php  

	$m = 100;
	$n = 0;

	for ($n = 0; $n <=$m; $n++)
	{             
		if ($n<=20)
		{
			echo "<i>$n</i></br>";
		}  
		elseif(($n>=25) && ($n<=50))
		{
		echo "<u>$n</u></br>";
			if($n==41)
			{                         
				echo 'La Plateforme_<br/>';        
				$n=$n+1;
			}             
	}    
			else 
				echo  $n . '<br>';         }

?>









