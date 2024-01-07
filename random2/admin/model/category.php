<?php
class Category{
     public $danhmuc_id, $danhmuc_name;

     public function __construct($danhmuc_id,$danhmuc_name)
     {
          $this->danhmuc_id = $danhmuc_id;
          $this->danhmuc_name = $danhmuc_name;
     }
     public static function all(){
          $list = [];
          $db = Db::getInstance();
          $reg = $db->query("SELECT * FROM danhmuc");
          foreach($reg->fetchAll() as $category){
               $list[] = new Category($category['danhmuc_id'],$category['danhmuc_name']);
          }
          return $list;
     }
     public static function addcategory($category_name){
          $db = Db::getInstance();
          $sql = "INSERT INTO danhmuc(danhmuc_name) VALUES ('$category_name')";
          $db->exec($sql);
     }
     public static function delcategory($id){
          $db = Db::getInstance();
          $id = intval($id);
          $req = $db->prepare("DELETE FROM danhmuc WHERE danhmuc_id = :id");
          $req->execute(array('id' => $id));
     }
     public static function viewup($id) {
          $db = Db::getInstance();
          $id = intval($id);
          $req = $db->prepare("SELECT * FROM danhmuc WHERE danhmuc_id = :id");
          $req->execute(array('id' => $id));
          $category = $req->fetch();

          return new Category($category['danhmuc_id'], $category['danhmuc_name']);
     }
     public static function upcate($category_id,$category_name){
          $db = Db::getInstance();
          $category_id = intval($category_id);
          $sql = "UPDATE danhmuc SET danhmuc_name = '$category_name'
           WHERE danhmuc_id = '$category_id'";
           $db->exec($sql);

     }
}
?>