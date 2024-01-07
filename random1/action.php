<?php
require_once 'database.php';
$db = Db::getInstance();
foreach($_POST['product_name'] as $key => $value){
     // $sql = 'INSERT INTO product(product_name,product_price,product_quantity) VALUES (:name,:price,:quantity)';
     // $stmt = $conn->prepare($sql);
     // $stmt->execute([
     //      'name'=>$value,
     //      'price'=>$_POST['product_price'][$key],
     //      'quantity'=>$_POST['product_quantity'][$key]
     // ]);
     $product_price = $_POST['product_price'][$key];
     $product_quantity = $_POST['product_quantity'][$key];
     $req = $db->prepare("INSERT INTO product(product_name,product_price,product_quantity) VALUES
     (:name,:price,:quantity)");
     $req->execute(array('name' => $value,'price' => $product_price,'quantity' => $product_quantity));
}
echo "Item inserted successsfully";
?>