 <form method="GET" enctype="multipart/form-data">

      <label for="str">écrire un nombre</label>
      <input type="text" placeholder="entrer votre identifiant" id="str" name="str" required><br>
      <label id="fonction">Quel est votre niveau d'étude?</label><br>
      <select  name="fonction" required>
        <option><?php gras ?> gras</option>
        <option>cesar</option>
        <option>plateforme</option>
      </select><br><br>

     

      <button name="sub" type="submit">Valider monnombre</button><br><br>

    </form>


    <?php 
    function gras($str){
    	
    }

function cesar($str){

}

function plateforme($str)


if (isset($_GET['sub'])) 
      {

      }
?>