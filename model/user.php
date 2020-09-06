<?php
  class User{
    
    public function getUsers(){
      require ("./config/connect.php");
      $array=array();
      $query_stmt="SELECT * FROM users;";
      $res=$connect->query($query_stmt);
      while($record=$res->fetch_assoc()){
        $array[]=$record;
      }
      //var_dump($array);
      return $array;
    }
  }
?>
