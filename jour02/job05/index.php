<?php





for ($np=2; $np <= 1000; $np++) 
{ 
	$nd=0;

	for ($i=1; $i <= $np; $i++) 
	{ 
		if ( $np%$i==0 ) 
		{
			
			$nd++;
		}
	
}
		if ($nd==2) 
			{
			echo  $np;
			echo "<br/>";

			
		}
	}





?>


