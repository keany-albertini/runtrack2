<!DOCTYPE html>
<html lang="fr">
<head>
  <title>formulaire</title>
</head>
<body>

<?php 
// ne fais rien tant que la $_Get['login'] n'a pas de valeur
if (isset($_GET['login'])) {
// récupère les données
$login = $_GET['login'];
$password = $_GET['password'];
$mail = $_GET['mail'];
$lname = $_GET['lname'];
$fname = $_GET['fname'];
$date = $_GET['date'];
$num = $_GET['num'];
}




// afficher ce qui est rentrer dans le champ
 // echo $login . "<br/>" . $password . "<br/>" . $mail . "<br/>" . $lname . "<br/>" . $fname . "<br/>" . $date . "<br/>" . $num . "<br/>";








?>

  <form method="GET"  enctype="multipart/form-data">
    <?php  // création variable
$i =0;
// cré une boucle qui prend le récupérateur de donnée et donne lui une valeur
foreach ($_GET as $key => $value) {
  // fais parcourir ma viarable $i sur cette boucle 
  $i++;

}
// affiche moi le nombre de valeur une fois qui $i a fait toutes ses boucle
echo $i . "<br/>";
?>

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




</body>
</html>



