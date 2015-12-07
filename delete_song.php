<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","TopJamAdmin","topjam","TopJam") or die("Error " . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $title = $data['title'];
    $lobby = $data['lobby'];

    $sql = "delete from Songs where title = '$title' AND lobby = '$lobby' ";

    if(!mysqli_query($connection, $sql))
    {
        die('Error : ' . mysqli_error());
    }

    $array = array('title' => $title, 'artist' => $artist, 'album' => $album, 'votes' => $votes, 'lobby' => $lobby);

    echo json_encode($array);
?>
