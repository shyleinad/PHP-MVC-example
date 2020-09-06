<?php
  require ("./model/user.php");
  class UserController{
    public function getUsers(){
      $user_object=new User();
      return $user_object->getUsers();
    }
  }
?>
