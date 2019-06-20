<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Me Perdonaz?</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
</head>

<body background="/Proyecto/images/galaxy.jpg"
  style="background-repeat: no-repeat; background-position: center; background-attachment: fixed;">
  <div class="container_add">
    <a class="add" href="db/create_note.php"><i class="fas fa-plus-circle"></i></a>
  </div>
  <h1 class="caja">Esto no es un sitio de posts</h1>
  <div class="container"><?php require_once("./db/read_notes.php"); ?></div>
  <script type="text/javascript">
    window.onload = function () {
      document.onmousemove = function (ev) {
        var x = -ev.clientX / 10;
        var y = -ev.clientY / 10;
        document.body.style.backgroundPosition = x + 'px ' + y + 'px';
      };
    };
  </script>
</body>

</html>