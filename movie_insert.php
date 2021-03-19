<?php

    session_start();
    
    require 'setenv.php';
    require './utilities/connection.php';

$stmt = $con->prepare("INSERT INTO cs3620_project1.tvshows (`title`,
    `writerproducer`,
    `releasedate`, `user_id`) VALUES (?, ?, ?,?)");

    $tt = $_POST["title"];
    $fln = $_POST["writerproducer"];
    $rd = $_POST["releasedate"];
    $userid = $_SESSION["user_id"];

    $stmt->bind_param('sssi', $tt, $fln, $rd, $userid);
    $stmt->execute();

    $stmt->close();
    $con->close();

    header('Location: profile.php');
?>
