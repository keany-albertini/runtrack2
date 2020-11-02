<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		h1{
			text-align: center;
		}
		table{
			border:2px solid black;
			width: 300px;
			margin-top: 20px;
			display: flex;
			justify-content: center;
			box-shadow: 6px 3px 3px lightgrey;
		}
		td{
			border-bottom:1px solid black;
			padding: 15px;
		}
		th{
			box-shadow: 6px 3px 3px lightgrey;
			color: blue;
			border:1px solid black;
		}
		th:hover{
			background:blue;
			color: white;
		}
	</style>
	<title>Tableau Variables</title>
</head>
	<body>
		<h1>Tableau variables</h1>
		<?php
			$tableau = ["type","nom","valeur"];
			$nombre=10;// type entiers
			$booleen= true;// type booléens
			$nom="marseille"; // type chaine de caractère
			$virgule=1.5;// nombre a virgule flotante
		?>
		<table>
			<tr>
				<th><?php echo $tableau[0];?></th>
				<th><?php echo $tableau[1];?></th>
				<th><?php echo $tableau[2];?></th>
			</tr>
			<tr>
				<td><?php echo  gettype($nombre); ?></td> <!-- afficher le type -->
				<td><?php echo '$nombre';?></td> <!-- afficher le nom -->
				<td><?php echo $nombre; ?></td> <!-- afficher la valeur -->
			</tr>
			<tr>
				<td><?php echo  gettype($booleen); ?></td>
				<td><?php echo '$booleen';?></td>
				<td><?php echo $booleen; ?></td>
			</tr>
			<tr>
				<td><?php echo  gettype($nom); ?></td>
				<td><?php echo '$nom';?></td>
				<td><?php echo $nom; ?></td>
			</tr>
			<tr>
				<td><?php echo  gettype($virgule); ?></td>
				<td><?php echo '$virgule';?></td>
				<td><?php echo $virgule; ?></td>
			</tr>
		</table>
	</body>
</html>

