<?php
$allDataName = $_POST['fileNames'];
$allDataNameArray = explode(",",$allDataName);
foreach ($allDataNameArray as $filename) {
   if($filename){
      unlink('../uploads/'.$filename);
   }
}
session_start();
session_destroy();
echo "success";
?>