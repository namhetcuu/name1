<?php

function login($email,$pass){
     $conn = connectdb();
     $sql_select_admin = mysqli_query($conn,"SELECT * FROM khachhang 
     WHERE email='$email' AND password='$pass' LIMIT 1");
     $count = mysqli_num_rows($sql_select_admin);
     $row_dangnhap = mysqli_fetch_array($sql_select_admin);
     if($count>0){
          $_SESSION['dangnhap_home'] = $row_dangnhap['1'];
          $_SESSION['khachhang_id'] = $row_dangnhap['0'];
          $_SESSION['address'] = $row_dangnhap['3'];
          
          $_SESSION['phone'] = $row_dangnhap['2'];
          $_SESSION['email'] = $row_dangnhap['5'];
          $_SESSION['pass'] = $row_dangnhap['6'];

     }else{
          echo '<script>alert("Tai khoan chua ton tai Cick dang ky")</script>';
          include './view/reg.php';
     }
}
function reg($name,$email,$pass,$phone,$note,$address){
     $conn = connectdb();
     $sql_insert_admin = mysqli_query($conn,"INSERT INTO khachhang
     (name,phone,address,note,email,password) VALUES 
     ('$name','$phone','$address','$note','$email','$pass')");
     if($sql_insert_admin){
          $sql_select_admin = mysqli_query($conn, "SELECT * FROM khachhang 
          WHERE email='$email' AND password='$pass' LIMIT 1");
          $row_dangnhap = mysqli_fetch_array($sql_select_admin);
          $_SESSION['dangnhap_home'] = $row_dangnhap['name'];
          $_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];
     }
     // $sql_select_admin = mysqli_query($conn,"SELECT * FROM khachhang 
     // WHERE email='$email' AND password='$pass' LIMIT 1");
     // $count = mysqli_num_rows($sql_select_admin);
     // $row_dangnhap = mysqli_fetch_array($sql_select_admin);
     // if($count>0){
     //      echo '<script>alert("Tai khoan chua ton tai Cick dang ky")</script>';
          
     // }else{
     //      $_SESSION['dangnhap_home'] = $row_dangnhap['name'];
     //      $_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];

     // }
}
function logout($dangxuat){
     if($dangxuat==1){
          unset($_SESSION['dangnhap_home']);
          include './view/home.php';
     }
}

?>
