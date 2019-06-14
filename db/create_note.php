<?php
if(empty($_POST)){
  
}else{
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
  echo $date;

  $sql = "INSERT INTO `notes` (`title`, `description`, `date`, `active`) VALUES (NULL, NULL, '$date', '1')";
  $result = $conn->query($sql);

  header('Location: '."./");
}
?>

