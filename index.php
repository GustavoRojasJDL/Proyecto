<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Me Perdonaz?</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
  <button class="add" type="submit"><i class="fas fa-plus-circle"></i></button>
  <h1>Esto no es un sitio de posts</h1>
  <div class="container"><?php require_once("./db/read_notes.php"); ?></div>
</body>

</html>