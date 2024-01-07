<?php
class Customer{
     public $khachhang_id,$name,$phone,$address,
     $email,$note;
     public function __construct($khachhang_id,$name,$phone,$address,
     $email,$note)
     {
          $this->khachhang_id=$khachhang_id;
          $this->name=$name;
          $this->phone=$phone;
          $this->address=$address;
          $this->email=$email;
          $this->note=$note;
          
     }
     public static function all(){
          $list = [];
          $db = Db::getInstance();

          $reg = $db->query("SELECT * FROM khachhang");
          foreach($reg->fetchAll() as $client){
               $list[] = new Customer($client['khachhang_id'],$client['name'],
               $client['phone'],$client['address'],$client['email'],
               $client['note']);
          }
          return $list;
     }
}
?>