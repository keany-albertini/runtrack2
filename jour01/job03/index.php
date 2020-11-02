<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			margin-top: 20px;
			display: flex;
			justify-content: center;
		}
		td{
			border:1px solid black;
			
			padding: 15px;
		}
		th{
			color: blue;
			border:1px solid black;
		}
		
	</style>
	<title></title>
</head>
<body>
<?php
$tableau = ["type","nom","valeur"];
$nombre=10;// type entiers
$booleen= true;// type booléens
$nom="marseille"; // type chaine de caractère
$virgule=1.5;// nombre a virgule flotante


echo "<table>
	<tr>
		<th> $tableau[0];</th>
		<th> $tableau[1];</th>
		<th> $tableau[2];</th>





	</tr>
	<tr>
		
		<td>  .'gettype($nombre)'.; </td> 
		<td> '$nombre';</td>
		<td> $nombre; </td> 
	</tr>
	<tr>
		
		<td>print "gettype($booleen)"; </td>
		<td>'$booleen';</td>
		<td>$booleen; </td>
	</tr>
	<tr>
		
		<td> gettype($nom); </td>
		<td>'$nom'</td>
		<td>$nom; </td>
	</tr>
	<tr>
		
		<td>  gettype($virgule);</td>
		<td> '$virgule'</td>
		<td> $virgule; </td>
	</tr>
	



</table>";





