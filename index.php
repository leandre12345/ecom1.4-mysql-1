<?php
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "ecom1";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    echo "Connected to the $db database successfully";
}else {
    echo "Error : Not connected to the $db database";
}

// récupérer une ligne dans user
$result1 = mysqli_query($conn, "SELECT * FROM user WHERE id =2");


// avec fetch row : tableau indexé
$data1 = mysqli_fetch_row($result1);

echo"</br>";
echo "Premier fetch";
echo"</br>";
echo"</br>";
var_dump($result1);
echo"</br>";
echo"</br>";
var_dump($data1);

$result2 = mysqli_query($conn, "SELECT * FROM user WHERE id = 1");
// avec fetch assoc tableau associatif
$data2 = mysqli_fetch_assoc ($result2);

echo"</br>";
echo"</br>";
echo "Second fetch";
echo"</br>";
echo"</br>";
echo"</br>";
var_dump($result2);
echo"</br>";
echo"</br>";
var_dump($data2);


// Récupéerer une seule ligne mais en choisissant l'ordre des colonnes 

$result3 = mysqli_query($conn, "SELECT user_name, email, id FROM user WHERE id = 1");

$data3 = mysqli_fetch_assoc($result3);




echo"</br>";
echo"</br>";
echo "Troisieme fetch";
echo"</br>";
echo"</br>";
echo"</br>";
var_dump($result3);
echo"</br>";
echo"</br>";
var_dump($data3);

// récupérer toutes les lignes de la table user

$result4 = mysqli_query($conn, "SELECT user_name, email, id FROM user WHERE id = 1");

//$data4 = mysqli_fetch_assoc($result4);

while($rangeeData = mysqli_fetch_assoc ($result4))
{
echo "Nom de l/'Usager :" . $rangeeData["user_name"]."</br>";
echo "Courriel :". $rangeeData["email"]."</br>";
echo"</br>";
echo"</br>";
};


echo"</br>";
echo"</br>";
echo "Quatrieme fetch";
echo"</br>";
echo"</br>";
echo"</br>";
var_dump($result4);
echo"</br>";
echo"</br>";
//var_dump($data4);