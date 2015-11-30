<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","USERNAME","PASSWORD","DBNAME") or die("Error " . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $title = $data['title'];
    $artist = $data['artist'];
    //$title = "insane";
    //$artist = "flume";
    $sql = "INSERT INTO Songs(title, artist)
    VALUES('$title', '$artist')";

    if(!mysqli_query($connection, $sql))
    {
        die('Error : ' . mysqli_error());
    }

    $array = array('title' => $title, 'artist' => $artist);

    echo json_encode($array);
?>
