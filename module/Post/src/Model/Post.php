<?php
    namespace Post\Model;

    /**
    *
    */
    class Post
    {

        protected $id;
        protected $title;
        protected $description;
        protected $category;

        public function exchangeArray($data){
          $this ->id = $data['id'];
          $this ->title = $data['title'];
          $this ->description = $data['description'];
          $this ->category = $data['category'];
        }

        public function getId(){
          return $this->id;
        }

        public function getTitle(){
          return $this->title;
        }

        public function getDescription(){
          return $this->description;
        }

        public function getCategory(){
          return $this->category;
        }
    }


 ?>
