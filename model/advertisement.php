<?php
  class Advertisement{

    public function getAdvertisements(){
      require ("config\connect.php");
      $array=array();
      $query_stmt="SELECT a.id, u.name, a.title FROM advertisements AS a, users AS u WHERE u.id=a.userid ORDER BY a.id DESC";
      $res=$connect->query($query_stmt);
      while($record=$res->fetch_assoc()){
        $array[]=$record;
      }
      //var_dump($array);
      return $array;
    }
  }
?>
