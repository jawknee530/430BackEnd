<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","TopJamAdmin","topjam","TopJam") or die("Error " . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $lobby_name = $data['lobby_name'];

    //fetch table rows from mysql db
    $sql = "select * from Songs where lobby = '$lobby_name' order by votes";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $songarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $songarray[] = $row;
    }
    echo json_encode($songarray);
?>
