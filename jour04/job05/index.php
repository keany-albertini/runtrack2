<form method="POST"  enctype="multipart/form-data">
	 <label for="login">identifiant</label>
      <input type="text" placeholder="entrer votre identifiant" id="login" name="login" required><br>

      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required><br>

      <button type="submit" name="sub">Valider mon compte</button><br><br>

</form>

<?php
$str = "John";
$str2 ="Rambo";
	if (isset($_POST['sub'])) 
	{
		if ($str == $_POST['login'] && $str2 == $_POST['password']) 
		{
		echo "C'est pas ma guerre";
		}
		else
		{
		echo "Votre pire cauchemar";
		}
	}


?>
