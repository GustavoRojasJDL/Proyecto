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
  $tl = $_POST["title"];
  $dc = $_POST["desc"];

  $sql = "INSERT INTO `notes` (`title`, `description`, `date`, `active`) VALUES ('$tl', '$dc', '$date', '1')";
  $result = $conn->query($sql);

  header('Location: '."./");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <div class="form_note">
      <input type="text" name="title">
      <textarea name="desc" cols="30" rows="10"></textarea>
    </div>
    <div class="form_btn">
      <button type="submit">Guardar</button>
    </div>
  </form>
</body>
</html>
