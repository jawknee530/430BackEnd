<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","TopJamAdmin","topjam","TopJam") or die("Can't connect to DB" . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];

    $sql = "INSERT INTO Users(username, email, password)
    VALUES('$username', '$email', '$password')";

    if(!mysqli_query($connection, $sql))
    {
        die('Failed Insert' . mysqli_error());
    }

    $array = array('username' => $username, 'email' => $email, 'password' => $password);

    echo json_encode($array);
?>
