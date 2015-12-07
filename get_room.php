<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","TopJamAdmin","topjam","TopJam") or die("Can't connect to DB" . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $name = $data['lobby_name'];
    //$password = $data['lobby_password'];

    //fetch table rows from mysql db
    $sql = "select * from Lobby where lobby_name = '$name'";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $userarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $userarray[] = $row;
    }
    echo json_encode($userarray);
?>

