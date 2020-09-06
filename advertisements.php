<?php
  require ("controller/advertisement_controller.php");
  echo file_get_contents("view/top.html");
  $advert_cont_object=new AdvertisementController();
  echo '<table><tr><th>Id</th><th>Name</th><th>Title</th></tr>';
  foreach ($advert_cont_object->getAdvertisements() as $item){
    echo '<tr>
            <td>'.$item["id"].'</td>
            <td>'.$item["name"].'</td>
            <td>'.$item["title"].'</td>
          </tr>';
  }
  echo '</table>';
  echo file_get_contents("view/bottom.html");
?>
