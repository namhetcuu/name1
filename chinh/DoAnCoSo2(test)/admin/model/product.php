<?php
class Product{
     public $sanpham_id ,$danhmuc_id ,$sanpham_name,
     $sanpham_chitiet ,$sanpham_mota, 
     $sanpham_giakhuyenmai ,$sanpham_gia ,
     $sanpham_active ,$sanpham_image ,$sanpham_hot,$sanpham_soluong,$danhmuc_name,$sanpham_xuat;
    public function __construct($sanpham_id ,$danhmuc_id ,$sanpham_name,
    $sanpham_chitiet ,$sanpham_mota, 
    $sanpham_giakhuyenmai ,$sanpham_gia ,
    $sanpham_active ,$sanpham_image ,$sanpham_hot,$sanpham_soluong,$danhmuc_name,$sanpham_xuat)
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
      $this->danhmuc_name = $danhmuc_name;
      $this->sanpham_xuat = $sanpham_xuat;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM sanpham,danhmuc 
      WHERE sanpham.danhmuc_id=danhmuc.danhmuc_id');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $product) {
        $list[] = new Product($product['sanpham_id'], $product['danhmuc_id'], $product['sanpham_name'],
        $product['sanpham_chitiet'], $product['sanpham_mota'], $product['sanpham_giakhuyenmai'],
        $product['sanpham_gia'], $product['sanpham_active'], $product['sanpham_image'], 
        $product['sanpham_hot'], $product['sanpham_soluong'],$product['danhmuc_name'],$product['sanpham_xuat']);
      }

      return $list;
    }

    public static function viewup($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM sanpham WHERE sanpham_id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $product = $req->fetch();

      $sql = $db->prepare('SELECT * FROM danhmuc WHERE danhmuc_id = :id');
      $sql->execute(array('id' => $product['danhmuc_id']));
      $category = $sql->fetch();

      return new Product($product['sanpham_id'], $product['danhmuc_id'], $product['sanpham_name'],
      $product['sanpham_chitiet'], $product['sanpham_mota'], $product['sanpham_giakhuyenmai'],
      $product['sanpham_gia'], $product['sanpham_active'], $product['sanpham_image'], 
      $product['sanpham_hot'], $product['sanpham_soluong'],$product['danhmuc_name'],$product['sanpham_xuat']);
    }
    public static function delpro($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('DELETE FROM sanpham WHERE sanpham_id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));

    }

    public static function uppro($product_id,$product_name,$product_image,$product_image_tmp,$product_quantity,$product_price
    ,$product_outstan,$product_describe,$product_detail,$product_promotion,$category_id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $product_id = intval($product_id);

      if($product_image == ''){

        $sql = "UPDATE product SET category_id ='$category_id', product_name='$product_name',
        product_price='$product_price', product_quantity='$product_quantity'
        ,product_promotion='$product_promotion', product_detail='$product_detail'
        ,product_outstan='$product_outstan',product_describe='$product_describe' 
        WHERE product_id= '$product_id'";
        $db->exec($sql);

      }else{

        $sql = "UPDATE product SET category_id ='$category_id', product_name='$product_name',
        product_price='$product_price', product_quantity='$product_quantity'
        ,product_promotion='$product_promotion', product_detail='$product_detail'
        ,product_outstan='$product_outstan', product_image='$product_image'
        ,product_describe='$product_describe' WHERE product_id= '$product_id'";

        move_uploaded_file($product_image_tmp,'theme/images/'.$product_image);
        $db->exec($sql);
      }
      
      // the query was prepared, now we replace :id with our actual $id value
      //$req->execute(array('id' => $id));

      

    }
    public static function addsp($product_name,$product_image,$product_image_tmp,$product_quantity,$product_price
    ,$product_outstan,$product_describe,$product_detail,$product_promotion,$category_id){

      // $productquantity = intval($product_quantity);
      // $productprice = intval($product_price);
      // $productoutstan = intval($product_outstan);
      // $productpromotion = intval($product_promotion);

      $db = Db::getInstance();
      // $reg = $db->prepare("INSERT INTO product(category_id,product_name,product_price
      // ,product_promotion,product_detail,product_outstan,product_quantity,product_image,product_describe) 
      // VALUES (?,?,?,?,?,?,?,?)");

      // $reg->execute(array(':category_id'=> $category_id,'product_name'=>$product_name,
      // 'product_price'=>$productprice
      // ,'product_promotion'=>$productpromotion,'product_detail'=>$product_detail,
      // 'product_outstan'=>$productoutstan,
      // 'product_quantity'=>$productquantity,'product_image'=>$product_image,'product_describe'=>$product_describe));
      // $sql = "INSERT INTO product(category_id,product_name,product_price
      // ,product_promotion,product_detail,product_outstan,product_quantity,product_image) 
      // VALUES (1,'$tensanpham','$gia',0,'$chitiet','$giakhuyenmai','$soluong','$image')";
      // $reg = $db->prepare("INSERT INTO product(category_id,product_name,product_price
      // ,product_promotion,product_detail,product_outstan,product_quantity,product_image) VALUES
      // (1,'$tensanpham','$gia',0,'$chitiet','$giakhuyenmai','$soluong','$image')");
      //move_uploaded_file($image_tmp,'theme/images/'.$image);
      //'$product_name','$product_image','$product_quantity',$product_price'
     // ,'$product_outstan','$product_describe','$product_detail,'$product_promotion','$category_id'
      // $stmt = $db->prepare("INSERT INTO product(category_id,product_name,product_price
      // ,product_promotion,product_detail,product_outstan,product_quantity,product_image) 
      // VALUES (?,?,?,?,?,?,?,?)"); 
      // $stmt->bindParam("sss",$product_name,$product_image,$product_quantity,$product_price
      // ,$product_outstan,$product_describe,$product_detail,$product_promotion,$category_id);
      // return $stmt->execute();
      // $stmt = $db->prepare("INSERT INTO product(category_id,product_name,product_price
      // ,product_promotion,product_detail,product_outstan,product_quantity,product_image) 
      // VALUES (:category_id,:product_name,:product_price
      // ,:product_promotion,:product_detail,:product_outstan,:product_quantity,:product_image)"); 
      // $stmt->bindParam(':category_id',$category_id);
      // $stmt->bindParam(':product_name',$product_name);
      // $stmt->bindParam(':product_price',$category_id);
      // $stmt->bindParam(':product_promotion',$product_promotion);
      // $stmt->bindParam(':product_detail',$product_detail);
      // $stmt->bindParam(':product_outstan',$product_outstan);
      // $stmt->bindParam(':product_quantity',$product_quantity);
      // $stmt->bindParam(':product_image',$product_image);

      $sql = "INSERT INTO product(category_id,product_name,product_price,product_quantity
       ,product_promotion,product_detail,product_outstan,product_image,product_describe) 
       VALUES ('$category_id','$product_name','$product_price','$product_quantity',
       '$product_promotion','$product_detail','$product_outstan','$product_image','$product_describe')";

      move_uploaded_file($product_image_tmp,'theme/images/'.$product_image);
       $db->exec($sql);
    }
  }

?>