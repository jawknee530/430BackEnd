<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","TopJamAdmin","topjam","TopJam") or die("Error " . mysqli_error($connection));

    $jsondata = file_get_contents('php://input');
    $data = json_decode($jsondata, true);

    $owner = $data['owner'];
    $lobby_name = $data['lobby_name'];
    $lobby_password = $data['lobby_password'];
    
    $sql = "INSERT INTO Lobby(owner, lobby_name, lobby_password)
    VALUES('$owner', '$lobby_name', '$lobby_password')";

    if(!mysqli_query($connection, $sql))
    {
        die('Error : ' . mysqli_error());
    }

$array = array('owner' => $owner, 'lobby_name' => $lobby_name, 'lobby_password' => $lobby_password);
echo json_encode($array);

?>
