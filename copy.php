<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","TopJamAdmin","topjam","TopJam") or die("Error " . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $title = $data['title'];
    $lobby_name = $data['lobby_name'];
    //$title = "insane";
    //$artist = "flume";
    $sql = "UPDATE Songs SET votes = votes+1 WHERE title = $title AND lobby = $lobby_name ";

    if(!mysqli_query($connection, $sql))
    {
        die('Error : ' . mysqli_error());
    }

    $array = array('title' => $title, 'artist' => $artist);

    echo json_encode($array);
?>
