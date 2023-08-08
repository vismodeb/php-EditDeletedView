<?php

  require_once('confige.php');

  $id = $_REQUEST['id'];
  echo $id;

  $stmt=$connection->prepare('DELETE from st_data WHERE id=?');
  $delete = $stmt->execute(array($id));
  if($delete == true){
    header('location:index.php?success=Delete Successfully!');
  }

?>