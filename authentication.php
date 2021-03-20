<?php
    session_start();
    require 'setenv.php';
    require './utilities/connection.php';


    if(!isset($_POST['username'], $_POST['password'])){
        exit('Please fill out both the username and password!');
    }

    if($stmt = $con->prepare('SELECT user_id, password FROM user WHERE username = ?')) {
        
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        

        if($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();

            if(hash("sha256", trim($_POST['password'])) == $password) {

                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['user_id'] = $id;
                //echo "Welcome " . $_SESSION['name'];
                header('Location: profile.php');
                
                
            }
            else {
                echo "Incorrect username or password. 1";
            }
        }
        else {
            echo "Incorrect username or password. 2";
        }
        $stmt->close();
    }
?>