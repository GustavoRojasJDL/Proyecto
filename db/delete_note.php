<?php
  require_once("db.php");
  $time = getdate();
  $day = $time["mday"];
  $month = $time["mon"];
  $year = $time["year"];
  $hour = $time["hours"];
  $hour = $hour - 5;
  $min = $time["minutes"];
  $sec = $time["seconds"];
  $date = $year."-".$month."-".$day." ".$hour.":".$min.":".$sec;
  $id = $_GET["id"];

  $sql = "UPDATE `Proyecto`.`notes` SET `active` = 0, `date` = '$date' WHERE `notes`.`id` = $id";
  $result = $conn->query($sql);

  header('Location: '."../");
?>