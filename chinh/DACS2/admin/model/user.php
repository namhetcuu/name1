<?php
class Login{
     public $id;
     public $username;
     public $password;

     public function __construct($id, $username, $password)
     {
          $this->id = $id;
          $this->username = $username;
          $this->password = $password;
     }
     public static function getAccount($username, $password){
          $db = Db::getInstance();
          $login = mysqli_query($db, "SELECT * FROM admin WHERE username ='$username' AND password = '$password'");
          $row = mysqli_fetch_array($login);
          $_SESSION['username'] = $row['username'];

     }
}
?>