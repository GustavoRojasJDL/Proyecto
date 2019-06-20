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

$sql = "SELECT * FROM `notes` WHERE `active` = 1 AND `date` <= '$date' ORDER BY date DESC";
$result = $conn->query($sql);
$cnt = $result->num_rows;

if($cnt > 0){
  while($row = $result->fetch_assoc()){
    ?>
      <div class="container2">
        <div class="btnCerrar">
          <a href="./db/delete_note.php?id=<?php echo $row["id"];?>">X</a>
        </div>
        <div class="titulo"><?php echo $row["title"]; ?></div>
        <div class="contenido"><?php echo $row["description"]; ?></div>
        <div class="fecha"><?php echo $row["date"]; ?></div>
        <div class="btnEditar">
          <a href="./db/update_note.php?id=<?php echo $row["id"];?>">Editar</a>
        </div>
      </div>
    <?php
  }
}
?>