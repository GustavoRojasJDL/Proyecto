<?php
require_once("db.php");
$id = $_GET["id"];
if(empty($_POST)){
  $sql = "SELECT * FROM `notes` WHERE `active` = 1 AND `id` = $id";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
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
            Titulo: <input type="text" name="title" value="<?php echo $row["title"]; ?>">
            Descripcion: <textarea name="desc" cols="30" rows="10"><?php echo $row["description"]; ?></textarea>
          </div>
          <div class="form_btn">
            <button type="submit">Guardar</button>
            <a href="../">Regresar</a>
          </div>
        </form>
      </body>
      </html>
    <?php
  }
}else{
  $time = getdate();
  $day = $time["mday"];
  $month = $time["mon"];
  $year = $time["year"];
  $hour = $time["hours"];
  $hour = $hour - 5;
  $min = $time["minutes"];
  $sec = $time["seconds"];
  $date = $year."-".$month."-".$day." ".$hour.":".$min.":".$sec;
  $tl = $_POST["title"];
  $dc = $_POST["desc"];

  $sql = "UPDATE `Proyecto`.`notes` SET `title` = '$tl', `description` = '$dc', `date` = '$date' WHERE `notes`.`id` = $id";
  $result = $conn->query($sql);

  header('Location: '."../");
}
?>

