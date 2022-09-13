<?php

$servername="localhost";
$username="root";
$password="root";
$dbname="registration";
$date_inscri=date("Y/m/d");
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO animal (nomAni, dateNaissAni, dateDerVax)
VALUES( '$_POST[nomAni]','$_POST[dateNaissAni]','$_POST[dateDerVax]')";

    $conn->exec($sql);
    echo"Votre animal a été ajouté avec succés";
}
catch (PDOException $e) {

    echo $sql."<br>".$e->getMessage();

}
$conn = null;
?>

