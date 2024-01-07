<?php
class Statis{
     public $thoigiannhap, $thoigianxuat,$soluongnhap,$soluongxuat,$danhap;

     public function __construct($thoigiannhap, $thoigianxuat,$soluongnhap,$soluongxuat,$danhap)
     {
          $this->thoigiannhap = $thoigiannhap;
          $this->thoigianxuat = $thoigianxuat;
          $this->soluongnhap = $soluongnhap;
          $this->soluongxuat = $soluongxuat;
          $this->danhap = $danhap;
          // $this->daxuat = $daxuat;
     }
     public static function search($thoigiannhap, $thoigianxuat){
          $db = Db::getInstance();
          $reg = $db->query("SELECT * FROM 
          sanpham 
          WHERE thoigiannhap = ('$thoigiannhap') AND thoigianxuat=('$thoigianxuat')");
          foreach($reg->fetchAll() as $product){
               $list[] = new Statis($product['thoigiannhap'],
               $product['thoigianxuat'],$product['sanpham_soluong']
               ,$product['sanpham_xuat'],$product['sanpham_name']);
          }
          return $list;
     }
}
?>