<?php

    require 'setenv.php';
    require './utilities/connection.php';

$stmt = $con->prepare("INSERT INTO cs3620_project1.tvshows (`title`,
    `writerproducer`,
    `releasedate`) VALUES (?, ?, ?)");

    $tt = $_POST["title"];
    $fln = $_POST["writerproducer"];
    $rd = $_POST["releasedate"];

    $stmt->bind_param('sss', $tt, $fln, $rd);
    $stmt->execute();

    $stmt->close();
    $con->close();

    header('Location: profile.php');
?>
