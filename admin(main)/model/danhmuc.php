<?php
    function getall_dm(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM danhmuc");
        $stmt->execute();
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getonedm($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM danhmuc WHERE id=".$id);
        $stmt->execute();
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function deldm($id){
        $conn = connectdb();
        $sql = "DELETE FROM danhmuc WHERE id=".$id;
        $conn->exec($sql);
    }
    function themdm($tendm){
        $conn = connectdb();
        $sql = "INSERT INTO danhmuc (name)
        VALUES ('".$tendm."')";
        $conn->exec($sql);
    }
    function updatedm($id,$tendm){
        $conn = connectdb();
        $sql = "UPDATE danhmuc SET name='".$tendm."' WHERE id=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>