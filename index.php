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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body background="images/galaxy.jpg"
  style="background-repeat: no-repeat; background-position: center; background-attachment: fixed;">
  <div class="container_add">
    <a class="add" href="db/create_note.php"><i class="fas fa-plus-circle"></i></a>
  </div>
  <h1 class="caja">Esto no es un sitio de posts</h1>
  <div class="container"><?php require_once("./db/read_notes.php"); ?></div>
  <script type="text/javascript">
    window.onload = function () {
      document.onmousemove = function (ev) {
        var x = -ev.clientX / 30;
        var y = -ev.clientY / 30;
        document.body.style.backgroundPosition = x + 'px ' + y + 'px';
      };
    };
  </script>
  <!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
  <html>

  <head>
    <title>Horario Escolar Extendido</title>
  </head>

  <body>
    <h1 align="center">Horario escolar</h1>

    <table align="center" border="4" bordercolor="purple" cellpadding="10" cellspacing="20">
      <tr>
        <th bgcolor="yellow">Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Mi&eacute;rcoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
      </tr>
      <tr>
        <td>8-10</td>
        <td>Mate</td>
        <td></td>
        <td>Mate</td>
        <td>Mate</td>
        <td>Mate</td>
      </tr>
      <tr>
        <td>10-12</td>
        <td>Geograf&iacute;a</td>
        <td>Historia</td>
        <td>Geografía</td>
        <td>Historia</td>
        <td>Geograf&iacute;a</td>
      </tr>
      <tr>
        <td>12-14</td>
        <td>Física</td>
        <td>Ingl&eacute;s</td>
        <td>F&iacute;sica</td>
        <td>Inglés y Computaci&oacute;n</td>
        <td>Inglés y Computaci&oacute;n</td>
      </tr>
      <tr>
        <td>15-17</td>
        <td>Anatom&iacute;a</td>
        <td>Karate</td>
        <td>Karate</td>
        <td>Karate</td>
        <td>F&iacute;sica</td>
      </tr>
    </table>
  </body>
  </html> -->
</body>
</html>