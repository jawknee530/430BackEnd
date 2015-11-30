<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","TopJamAdmin","topjam","TopJam") or die("Can't connect to DB" . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $username = $data['username'];
    $password = $data['password'];

    //fetch table rows from mysql db
    $sql = "select * from Users where username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $userarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $userarray[] = $row;
    }
    echo json_encode($userarray);
?>
