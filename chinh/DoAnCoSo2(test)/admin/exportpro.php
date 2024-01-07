<?php

require_once 'connection.php';

function filterData(&$str){ 
     $str = preg_replace("/\t/", "\\t", $str); 
     $str = preg_replace("/\r?\n/", "\\n", $str); 
     if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
 } 

 $fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 

$fields = array('ID', 'NAME', 'IMAGE', 'PRICE','PROMOTIONAL PRICE', 'QUANTITY', 'CATEGORY', 'EXPORT', 'HOT'); 
 

$excelData = implode("\t", array_values($fields)) . "\n"; 
 $db = Db::getInstance();
 
$query = $db->query("SELECT * FROM sanpham,danhmuc WHERE sanpham.danhmuc_id=danhmuc.danhmuc_id"); 
if($query){ 
    foreach($query->fetchAll() as $product){ 
          $hot = ($product['sanpham_hot'] == 1)?'Hot':'Not hot'; 
        $lineData = array($product['sanpham_id'], $product['sanpham_name'], $product['sanpham_image'], 
        $product['sanpham_gia'], $product['sanpham_giakhuyenmai'],
        $product['sanpham_soluong'], $product['danhmuc_name'], $product['sanpham_xuat'], $hot); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 

header("Content-Type: application/vnd.ms-excel;charset=UTF-8"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 

echo $excelData; 
 
exit;
?>