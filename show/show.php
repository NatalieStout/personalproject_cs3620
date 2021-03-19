<?php
    require('./utilities/connection.php');
    require_once('./showDAO.php');

    class Show implements \JsonSerializable {
        private $id;
        private $title;
        private $writerproducer;
        private $releasedate;

        // methods
        function __construct() {
        }
        function getTvshowId(){
          return $this->id;
        }
        function setTvshowId($id){
          $this->id = $id;
        }

        function getTvshowTitle() {
          return $this->title;
        }
        function setTvshowTitle($title){
          $this->title = $title;
        }

        function getTvshowCreator() {
          return $this->writerproducer;
        }
        function setTvshowCreator($writerproducer){
          $this->writerproducer = $writerproducer;
        }

        function getTvshowDate() {
          return $this->releasedate;
        }
        function setTvshowDate($releasedate){
          $this->releasedate = $releasedate;
        }

        public function getMyTvshows($user_id) {
            $showDAO = new showDAO();
            return $showDAO->getShowsByUserId($user_id);
        }

        public function deleteShow($user_id, $id) {
          $showDAO = new showDAO();
          return $showDAO->deleteShow($user_id, $id);
      }

        public function getTvshow($input) {
          $showDAO = new showDAO();
          return $showDAO->getTvshow($input);
      }

      //   public function insertTvshow($user_id){
      //     $showDAO = new showDAO();
      //     $showDAO->insertTvshow($this, $user_id);
      // }
      
        public function jsonSerialize(){
            $vars = get_object_vars($this);
            return $vars;
        }
    }
?>