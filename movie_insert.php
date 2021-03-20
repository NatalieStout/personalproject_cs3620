
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<nav class="navbar is-light">
        <div class="container">
            <div class="navbar-brand">
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="profile.php" class="button is-primary">
                                <span class="icon"><i class="fas fa-list"></i></i></span>
                                <span>Return to Shows</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<?php

    require 'setenv.php';
    require './utilities/connection.php';
    require './session/session.php';

$stmt = $con->prepare("INSERT INTO cs3620_project1.tvshows (`title`,
    `writerproducer`,
    `releasedate`, `user_id`) VALUES (?, ?, ?,?)");


    $tt = $_POST["title"];
    $fln = $_POST["writerproducer"];
    $rd = $_POST["releasedate"];
    $uid = $_SESSION["user_id"];

    $stmt->bind_param('sssi', $tt, $fln, $rd, $uid);
    $stmt->execute();

    $stmt->close();
    $con->close();

?>
