



<form method="POST"  enctype="multipart/form-data">

    

      <label for="login">identifiant</label>
      <input type="text" placeholder="entrer votre identifiant" id="login" name="login" required><br>

      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required><br>


	  <label for="mail">entrez votre adresse mail</label><br>
      <input type="email" id="mail" name="mail" required><br>

      <label for="lname">Nom</label>
      <input type="text" id="lname"  name="lname"><br>


      <label for="fname">Prénom</label>
      <input type="text" id="fname" name="fname"><br>


      <label for="date">Date de naissance</label><br>
      <input type="date" id="date"  name="date"><br>

      <label for="num">Numero de téléphone</label>
      <input type="text" id="num" name="num"><br>

      <button type="submit">Valider mon compte</button><br><br>

    </form>

    <?php 
 $i =0;
 foreach ($_POST as $key => $value) {
 	$i++;
 
 }

echo $i . "<br/>";


?>
