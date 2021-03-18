<?php
class ShowDAO {
    function getAllTvshows() {
        require('./utilities/connection.php');
        require_once('./show/show.php');

        $sql = "SELECT id, title, writerproducer, releasedate FROM cs3620_project1.tvshows";
        $result = $con->query($sql);

        $shows;
        $index = 0;

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $show = new show();

                $show->setTvshowId($row["id"]);
                $show->setTvshowTitle($row["title"]);
                $show->setTvshowCreator($row["writerproducer"]);
                $show->setTvshowDate($row["releasedate"]);
                $shows[$index] = $show;
                $index = $index + 1;
            }
        }


        $con->close();

        return $shows;
    }

    function getTvshow($input) {
        require('./utilities/connection.php');
        require_once('./show/show.php');

        $sql = "SELECT id, title, writerproducer, releasedate FROM cs3620_project1.tvshows WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $input);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $shows;
        $index = 0;

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $show = new show();

                $show->setTvshowId($row["id"]);
                $show->setTvshowTitle($row["title"]);
                $show->setTvshowCreator($row["writerproducer"]);
                $show->setTvshowDate($row["releasedate"]);
                $shows[$index] = $show;
                $index = $index + 1;
            }
        }

        
        $con->close();

        return $shows;
    }

    function getShowsByUserId($user_id) {
        require('./utilities/connection.php');
        require_once('./show/show.php');

        $sql = "SELECT id, title, writerproducer, releasedate FROM cs3620_project1.tvshows WHERE user_id = " . $user_id;
        $result = $con->query($sql);

        $shows;
        $index = 0;

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $show = new show();

                $show->setTvshowId($row["id"]);
                $show->setTvshowTitle($row["title"]);
                $show->setTvshowCreator($row["writerproducer"]);
                $show->setTvshowDate($row["releasedate"]);
                $shows[$index] = $show;
                $index = $index + 1;
            }
        }


        $con->close();

        return $shows;
    }

    function deleteShow($uid, $sid){
        require('./utilities/connection.php');
        $sql = "DELETE FROM cs3620_project1.tvshows WHERE user_id = " . $uid . " AND show_id = " . $sid . ";";

        if($con->query($sql) === TRUE) {
            echo "user deleted";
    }   else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
}
}
?>