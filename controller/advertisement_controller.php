<?php
  require ("./model/advertisement.php");
  class AdvertisementController{
    public function getAdvertisements(){
      $advertisement_object=new Advertisement;
      return $advertisement_object->getAdvertisements();
    }
  }
?>
