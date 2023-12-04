
<form action="" method="get">
 <input type="text" name="id"/>
 <input type="submit" value="envoyer"/>

</form>

<?php
$servername = 'localhost';
$username= 'root'; 
$password='';
$dbname="tp_php";

$cnx = new mysqli($servername,$username,$password,$dbname);

if($cnx->connect_error){
    die("Erreur de connexion : ".$cnx->connect_error);
    }

    if(isset($_GET["id"])){
        $id= $_GET["id"];
    
        $query = "DELETE FROM utilisateurs WHERE id=$id";
    
        if($cnx->query($query)=== TRUE){
    
        echo "Bravo, utilisateurs supprimé avec brio !";
     }else{
        echo " Erreur lors de la suppression:" .$query ."<br/>" .$cnx ->error;
     }
    }
//affichage de query dans le site 

    $query = "SELECT * FROM utilisateurs";

  $result = $cnx->query($query);
if($result->num_rows >0){
     while ($row = $result->fetch_assoc()){

            echo
                "ID:" . $row["id"].
                "Nom:" . $row["nom"].
                "Prénom:" .$row["prenom"].
                "Email:".$row["email"].
                "<br />";
         }
  }else{
    echo "0résultats";
  }

    
$cnx ->close();
?>