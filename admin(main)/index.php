<?php

    session_start();
    ob_start();
    include './model/connectdb.php';
    include './model/danhmuc.php';
    include './model/sanpham.php';

    include 'view/header.php';
    if(isset($_GET['act'])){
        $action=$_GET['act'];
        switch($action)
        {
            case "danhmuc":
                $kq = getall_dm();
                include 'view/danhmuc.php';
                break;
            case 'deldm':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    deldm($id);
                }
                $kq = getall_dm();
                include 'view/danhmuc.php';
                break;
            case 'themdm':
                if((isset($_POST['themdm']))&&($_POST['themdm'])){
                    $tendm = $_POST['tendm'];
                    themdm($tendm);
                }
                $kq = getall_dm();
                include 'view/danhmuc.php';
                break;
            case 'updateformdm':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $kqone = getonedm($id);
                    $kq = getall_dm();
                    include 'view/updateformdm.php';
                }
                if(isset($_POST['id'])){
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    updatedm($id,$tendm);
                    $kq = getall_dm();
                    include 'view/danhmuc.php';
                }
                break;

            case "sanpham":
                $dsdm = getall_dm();
                $dssp = getallsp();
                include 'view/sanpham.php';
                break;
            case "sanpham_add":
                include 'view/sanpham_add.php';
                break;
            case "xoasp":
                if(isset($_GET['id'])){
                    $idsp = $_GET['id'];
                    delsp($idsp);
                }
                $dsdm = getall_dm();
                $kq = getallsp();
                include 'view/sanpham.php';
                break;
            case "updateformsp":
                
            case "taikhoan":
                include 'view/sanpham.php';
                break;
            case "donhang":
                include 'view/sanpham.php';
                break;
            // case "login":
            //     if(isset($_POST['btn_submit']))
            //     {
            //         $email=$_POST['username'];
            //         $pass=$_POST['password'];
            //         if(CheckLogin($email,$pass)==true)
            //         {
            //             $_SESSION['admin']=$email;
            //             header("location: index.php");
            //         }
            //         else
            //         {
            //             include 'view/login.php';
            //         }
            //     }
            //     else
            //     {
            //         include 'view/login.php';
            //     }
            //     break;
            // case "logout":
            //     unset($_SESSION['admin']);
            //     header("location: index.php");
            //     break;
            default:
                include 'view/home.php';
        }  
    }else{
        include 'view/home.php';
    }

include 'view/footer.php';

?>