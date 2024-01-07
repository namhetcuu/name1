<?php
    function getallsp(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM sanpham");
        $stmt->execute();
        $kq = $stmt->fetchAll();
        return $kq; 
    }
    function insert_sanpham($tensp,$img,$gia,$iddm){
        $conn = connectdb();
        $sql = "INSERT INTO sanpham (name,price,img,iddm) 
        VALUES ('$tensp','$gia','$img','$iddm')";
        $conn->exec($sql);
    }
    function delsp($idsp){
        $conn = connectdb();
        $sql = "DELETE FROM sanpham WHERE id=".$idsp;
        $conn->exec($sql);
    }
?>