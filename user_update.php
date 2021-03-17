<?php

    require 'setenv.php';
    require './utilities/connection.php';

    $stmt = $con->prepare("UPDATE cs3620_project1.tvshows SET title=?, writerproducer=?, releasedate=? WHERE id=?");

    $tt = $_POST["title"];
    $fln = $_POST["writerproducer"];
    $rd = $_POST["releasedate"];
    $id = $_POST["id"];

    $stmt->bind_param('sssi', $tt, $fln, $rd, $id);
    $stmt->execute();

    $stmt->close();

    $con->close();

    header('Location: profile.php');
?>