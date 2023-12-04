
 <!--dans ACTION c'EST la feuille ds la quel je travail -->
 <form action="" method="post">
 <input type="text" name="nom"/>
 <input type="text" name="prenom"/>
 <input type="text" name="email"/>
 <input type="submit" value="envoyer"/>

</form>

<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = "tp_php";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("connection failed : " .$conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];

//INSERT INTO = c'est une modification les donnés ex
    $query = "UPDATE utilisateurs SET nom='$nom', prenom='$prenom', email='$email' WHERE id=$id";

    if($conn->query($query)=== TRUE){
        echo " Bravo!, utilisateur ajouté avec succès !";
        }
        else{
        echo"  Erreur: ". $query . "<br />" .$conn->error;


    }
}

?>