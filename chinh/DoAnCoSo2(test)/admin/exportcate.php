<?php

require_once 'connection.php';

function filterData(&$str){ 
     $str = preg_replace("/\t/", "\\t", $str); 
     $str = preg_replace("/\r?\n/", "\\n", $str); 
     if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
 } 

 $fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 

$fields = array('ID', 'NAME', 'IMAGE'); 
 

$excelData = implode("\t", array_values($fields)) . "\n"; 
 $db = Db::getInstance();

$query = $db->query("SELECT * FROM danhmuc ORDER BY danhmuc_id DESC"); 
if($query){ 

    foreach($query->fetchAll() as $category){ 
          
        $lineData = array($category['danhmuc_id'], $category['danhmuc_name'], $category['danhmuc_image']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 

header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 

echo $excelData; 
 
exit;
?>