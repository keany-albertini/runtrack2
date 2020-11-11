

 <form method="GET" enctype="multipart/form-data">



      <label for="nombre">écrire un nombre</label>
      <input type="text" placeholder="entrer votre identifiant" id="login" name="nombre" required><br>

     

      <button name="sub" type="submit">Valider monnombre</button><br><br>

    </form>


<?php 


if (isset($_GET['sub'])) 
      {
            if ($_GET['nombre']%2==0) 
            {
            echo "nombre pair";
            }
            else
            {
            echo "nombre impair";
            }
      }
?>


