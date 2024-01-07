<?php
class Order{
     public $donhang_id,$sanpham_id,$soluong,
     $mahang,$khachhang_id,$ngaythang,$tinhtrang, $huydon,$name,$sanpham_name,$sanpham_gia;
     public function __construct($donhang_id,$sanpham_id,$soluong,
     $mahang,$khachhang_id,$ngaythang,$tinhtrang, $huydon, $name, $sanpham_name, $sanpham_gia)
     {
          
          $this->donhang_id = $donhang_id;
          $this->sanpham_id = $sanpham_id;
          $this->soluong = $soluong;
          $this->mahang = $mahang;
          $this->khachhang_id = $khachhang_id;
          $this->ngaythang = $ngaythang;
          $this->tinhtrang = $tinhtrang;
          $this->huydon = $huydon;
          $this->name = $name;
          $this->sanpham_name = $sanpham_name;
          $this->sanpham_gia = $sanpham_gia;
     }
     public static function all(){
          $list = [];
          $db = Db::getInstance();
          $reg = $db->query("SELECT * FROM sanpham,khachhang,donhang 
          WHERE donhang.sanpham_id=sanpham.sanpham_id AND 
          donhang.khachhang_id=khachhang.khachhang_id 
          GROUP BY mahang");
          $orders = $reg->fetchAll();

          // $req_product = $db->prepare("SELECT * FROM product WHERE product_id = :id");
          // $req_product->execute(array('id' => $orders));
          // $product = $req_product->fetch();

          foreach($orders as $order){
               $list[] = new Order($order['donhang_id'],$order['sanpham_id'],$order['soluong'],
               $order['mahang'],$order['khachhang_id'],$order['ngaythang'],$order['tinhtrang'], 
          $order['huydon'],$order['name'], $order['sanpham_name'], $order['sanpham_gia']);
          }
          return $list;
     }
     public static function uporder($id,$tinhtrang){
          $db = Db::getInstance();
          $sql = "UPDATE donhang SET tinhtrang='$tinhtrang' WHERE mahang = $id";
          $db->exec($sql);

     }
     public static function delOrder($id){
          $db = Db::getInstance();
          $id = intval($id);
          $req = $db->prepare('DELETE FROM donhang WHERE mahang = :id');
          // the query was prepared, now we replace :id with our actual $id value
          $req->execute(array('id' => $id));

     }
     public static function detailOrder($id){
          $list = [];
          $db = Db::getInstance();
          $id = intval($id);
          //$id_order = (string)$id;
          // $reg = $db->query("SELECT * FROM tbl_order,tbl_product 
          // WHERE tbl_order.product_id=tbl_product.product_id AND tbl_order.order_code='$id_order'");
          // $orders = $reg->fetchAll();

          $req = $db->prepare("SELECT * FROM donhang,sanpham,khachhang
          WHERE donhang.sanpham_id=sanpham.sanpham_id
           AND donhang.khachhang_id = khachhang.khachhang_id AND donhang.mahang= :id");
          $req->execute(array('id' => $id));
          $orders = $req->fetchAll();

          // $req = $db->query("SELECT * FROM tbl_order,tbl_product,tbl_client WHERE 
          // tbl_order.product_id = tbl_product.product_id AND 
          // tbl_client.client_id = tbl_order.client_id AND tbl_order.order_code = $id");
          // // $req->execute(array('id' => $id_order));
          // $orders = $req->fetch();


          // return new Order($order['order_id'],$order['product_id'],$order['order_quantity'],
          // $order['order_code'],$order['client_id'],$order['order_time'],$order['order_status'], 
          // $order['product_name'],$client['client_name']);

          foreach($orders as $order){
               $list[] = new Order($order['donhang_id'],$order['sanpham_id'],$order['soluong'],
               $order['mahang'],$order['khachhang_id'],$order['ngaythang'],$order['tinhtrang'], 
          $order['huydon'],$order['name'],$order['sanpham_name'],$order['sanpham_gia']);
          }
          return $list;
          // return new Order($order['order_id'],$order['product_id'],$order['order_quantity'],
          //  $order['order_code'],$order['client_id'],$order['order_time'],$order['order_status'], 
          //  $order['product_name'],$client['client_name'], $order['product_price'], $order['product_quantity']);
     }

}
?>