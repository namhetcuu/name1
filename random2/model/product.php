<?php
class Product{
     public $sanpham_id ,$danhmuc_id ,$sanpham_name,
     $sanpham_chitiet ,$sanpham_mota, 
     $sanpham_giakhuyenmai ,$sanpham_gia ,
     $sanpham_active ,$sanpham_image ,$sanpham_hot,$sanpham_soluong;
    public function __construct($sanpham_id ,$danhmuc_id ,$sanpham_name,
    $sanpham_chitiet ,$sanpham_mota, 
    $sanpham_giakhuyenmai ,$sanpham_gia ,
    $sanpham_active ,$sanpham_image ,$sanpham_hot,$sanpham_soluong)
    {
      $this->sanpham_id = $sanpham_id;
      $this->danhmuc_id = $danhmuc_id;
      $this->sanpham_name = $sanpham_name;
      $this->sanpham_chitiet = $sanpham_chitiet;
      $this->sanpham_mota = $sanpham_mota;
      $this->sanpham_giakhuyenmai = $sanpham_giakhuyenmai;
      $this->sanpham_gia = $sanpham_gia;
      $this->sanpham_active = $sanpham_active;
      $this->sanpham_image = $sanpham_image;
      $this->sanpham_hot = $sanpham_hot;
      $this->sanpham_soluong = $sanpham_soluong;
    }
    public static function all($p) {
     $db = Db::getInstance();
     $soluong = 4;
     $start = ($p-1)*$soluong;
     $select_product = $db->query("SELECT * FROM sanpham LIMIT $start,$soluong");
     $list = [];
     foreach($select_product->fetchAll() as $product){
          $list[] = new Product($product['sanpham_id'], $product['danhmuc_id'], $product['sanpham_name'],
          $product['sanpham_chitiet'], $product['sanpham_mota'], $product['sanpham_giakhuyenmai'],
          $product['sanpham_gia'], $product['sanpham_active'], $product['sanpham_image'], 
          $product['sanpham_hot'], $product['sanpham_soluong']);
     }
     return $list;
    }
}
?>