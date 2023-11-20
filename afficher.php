<?php
$servername = 'localhost';
$username= 'root'; 
$password='';
 $dbname="tp_php";

$conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn ->connect_error){
     die("Connection failed:" .$conn ->connect_error);
  }  


$query = "SELECT * FROM utilisateurs";
 $result = $conn->query($query);

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

$conn->close();


?>