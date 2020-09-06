<?php
  require ("controller/user_controller.php");
  echo file_get_contents("view/top.html");
  $user_cont_object=new UserController();
  echo '<table><tr><th>Id</th><th>Name</th></tr>';
  foreach($user_cont_object->getUsers() as $item){
    echo '<tr>
            <td>'.$item["id"].'</td>
            <td>'.$item["name"].'</td>
          </tr>';
  }
  echo '</table>';
  echo file_get_contents("view/bottom.html");
?>
