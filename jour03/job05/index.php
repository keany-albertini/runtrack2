<?php

$str= "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic=array ('consonnes'=>0, 'voyelles'=>0 );

$voyelles=array('a','e','i','o','u','y','A','E','I','O','U','Y');

for ($i = 0; isset($str[$i]); $i+=1)
{
    if (in_array ($str[$i],$voyelles))
    {
        $dic['voyelles']++;
    }
    else 
    {
        $dic ['consonnes']++;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
	<title>Tableau voyelles et consonnes</title>
	</head>
	<body>
		<table>
            <thead>
                <tr>
                    <th>Voyelles</th>
                    <th>Consonnes</th>
                </tr>
            </thead>
                <tr>
                    <td><?php echo $dic['voyelles']?></td>
                    <td><?php echo $dic['consonnes']?></td>
                </tr>

		</table>
	</body>
</html>