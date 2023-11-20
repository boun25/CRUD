<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="ajouter.php" method="post">
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



    $conn = new mysqli($servername, $username, $password, $dbname );
    if ($conn->connect_error){
        die("connection failed : " .$conn->connect_error);
    }
// methode d'envoie vers le serveur 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];

        $query = "INSERT INTO utilisateurs (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

        if($conn->query($query)=== TRUE){
        echo " Bravo!, utilisateur ajouté avec succès !";
        }
        else{
        echo"  Erreur: ". $query . "<br />" .$conn->error;
    
    
        }
    }
    $conn->close();
     
    ?>
</html>