<?php
require './utilities/connection.php';
require 'setenv.php';

session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
    exit;
} ?>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('./show/show.php');

    $show = new show();
    $shows = $show->getTvshow($_GET["id"]);




        echo '<div class="card">
                <div class="card-content">
                <form method="POST" action="./user_update.php" >
                Title:<input class="input is-normal" type="text" name="title" placeholder="Title" value="' . $shows[0]->getTvshowTitle() . '" /><br />
                Creator:<input class="input is-normal" type="text" name="writerproducer" placeholder="John Doe" value="' . $shows[0]->getTvshowCreator() . '"/><br />
                Release Date:<input class="input is-normal" type="text" name="releasedate" placeholder="01-01-2021" value="' . $shows[0]->getTvshowDate() . '"/><br />
                <input type="hidden" name="id" placeholder="01-01-2021" value="' . $shows[0]->getTvshowId() . '"/>
                <input class="button" type="submit" value="Save" />
                </form>
                </div>
            </div>';
    
?>
