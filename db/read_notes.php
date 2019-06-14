<?php
require_once("db.php");

$sql = "SELECT * FROM `notes` WHERE `active` = 1";
$result = $conn->query($sql);
$cnt = $result->num_rows;

if($cnt > 0){
  while($row = $result->fetch_assoc()){
    ?>
      <div class="container2">
        <div class="btnCerrar">
          <input type="button" value="X">
        </div>
        <div class="titulo"><?php echo $row["title"]; ?></div>
        <div class="contenido"><?php echo $row["description"]; ?></div>
        <div class="fecha"><?php echo $row["date"]; ?></div>
      </div>
    <?php
  }
}
?>