<?php
  $data = json_decode(file_get_contents('php://input'), true);
  echo $data["name"];
 ?>
