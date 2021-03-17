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

        public function getMyTvshows() {
            $showDAO = new showDAO();
            return $showDAO->getAllTvshows();
        }

        public function getTvshow($input) {
          $showDAO = new showDAO();
          return $showDAO->getTvshow($input);
      }
      
        public function jsonSerialize(){
            $vars = get_object_vars($this);
            return $vars;
        }
    }
?>