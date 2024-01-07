<?php
  class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $baiviet_id,$baiviet_title,$baiviet_image	
    ,$baiviet_time,$baiviet_author,$baiviet_sumary,$baiviet_describe;	


    public function __construct($baiviet_id,$baiviet_title,$baiviet_image	
    ,$baiviet_time,$baiviet_author,$baiviet_sumary,$baiviet_describe) {
      $this->baiviet_id = $baiviet_id;
      $this->baiviet_title  = $baiviet_title;
      $this->baiviet_image = $baiviet_image;
      $this->baiviet_time = $baiviet_time;
      $this->baiviet_author = $baiviet_author;
      $this->baiviet_sumary = $baiviet_sumary;
      $this->baiviet_describe = $baiviet_describe;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM baiviet');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['baiviet_id'], $post['baiviet_title'], $post['baiviet_image'],
        $post['baiviet_time'], $post['baiviet_author'], $post['baiviet_sumary'],$post['baiviet_describe']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      // return new Post($post['id'], $post['author'], $post['content']);
    }
  }
?>