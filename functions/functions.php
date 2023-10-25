<?php

function showData($title, $data)
{
    echo "</br></br><h2>" . $title . "</h2>";
    var_dump($data);
}

function selectUserByIdIndex($id)
{
    // récupérer une ligne dans user
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = " . $id);
    
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_row($result);

    return $data;
}

function selectUserByIdAssoc($id)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = " . $id);

    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);

    return $data;
}

function getAllUsersAssoc()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user");

    $data = [];
    $i = 0;
    while ($rangeeData = mysqli_fetch_assoc($result)) {
        $data[$i] = $rangeeData;
        $i++;
    };

    /* $imax = mysqli_num_rows($result);

    for ($i = 0; $i < $imax; $i++) {
        $rangeeData = mysqli_fetch_assoc($result);
        $data[$i] = $rangeeData;
    } */

    return $data;
}


function getAllUsersIndex()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user");

    $data = [];
    $i = 0;
    while ($rangeeData = mysqli_fetch_row($result)) {
        $data[$i] = $rangeeData;
        $i++;
    };

    /* $imax = mysqli_num_rows($result);

    for ($i = 0; $i < $imax; $i++) {
        $rangeeData = mysqli_fetch_row($result);
        $data[$i] = $rangeeData;
    } */

    return $data;
}

function createUser($data) {
    global $conn;
    $query = "INSERT INTO user VALUES (NULL, ?, ?, ?)";
    

    /* $stmt = mysqli_prepare($link, "INSERT INTO table VALUES (?, ?, 100)"); // Query 1 
    mysqli_stmt_bind_param($stmt, "si", $string, $integer);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); */ // CLOSE $stmt


    if ($stmt = mysqli_prepare($conn, $query)) {

        /* Lecture des marqueurs */
        mysqli_stmt_bind_param($stmt, "sss",
         $data['user_name'], $data['email'], $data['pwd']);

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
        echo "</br></br>";
        echo "Coucou je suis la";
        echo "</br></br>";
        var_dump($result);
        echo "</br></br>";

        /* Récupération des valeurs */
        //mysqli_stmt_fetch($stmt);
    
    
        /* Fermeture du traitement */
        //mysqli_stmt_close($stmt);
    }





}
