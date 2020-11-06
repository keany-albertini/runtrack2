<!DOCTYPE html>
<html lang="fr">
<head>
  <title>formulaire</title>
</head>
<body>









  <form method="GET"  enctype="multipart/form-data">

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
      <input type="date" id="datee"  name="date"><br>

      <label for="num">Numero de téléphone</label>
      <input type="text" id="num" name="num"><br>

      <button type="submit">Valider mon compte</button><br><br>

    </form>




    <table>
      <tr>
        <th>Arguments</th>
        <th>Valeurs</th>
      </tr>
      <tr>
        <td><?php
          $i =0;
          foreach ($_GET as $key => $value) 
            {$i++;
              echo $key . "<br/>";
            }
            
          ?>
    
        </td>
         

        <td>
           <?php
            $i =0;
            foreach ($_GET as $key => $value) 
            {$i++;
              echo $value . "<br/>";
            }
            
          ?>
        </td>
      
      

    </table>




</body>
</html>



