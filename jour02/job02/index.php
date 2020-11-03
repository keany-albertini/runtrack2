<?php
  
  $n = 0;



	while($n < 1337)
	{ 
		$n++;

		if (($n==26)||($n==37)||($n==88)||($n==1111)) 
	  	{	   	
	   		echo"<br />"; 
	   		$n = $n +1;	
	  	}
		echo  $n ;
		echo "<br />";
	}
?>