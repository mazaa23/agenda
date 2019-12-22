<?php
    include 'asignar.php';
    include 'bd.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet"Styles.css" type="text/css" />
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="navbar.js"></script>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
</head>

<body>

<nav>
      <ul>
        <button class="navbtn">X</button>
        <li>
          <a href="index.html">Menu principal</a>
        </li>
        <li>
          <a href="colegio.html">Colegio</a>
        </li>
        <li>
          <a href="casa.html">Casa</a>
        </li>
      </ul>
    </nav>

    <?php
    echo "<form method='POST' action='".enviar($conn)."'>
    <p>FECHA DE ENTREGA:</p>
        <input type='hidden' name='entrega' value='Anonymous'>
        <textarea name='entrega'></textarea><br>

     <p>DESCRIPCION:</p>
        <input type='hidden' name='tarea' value='Anonymous'>
        <textarea name='tarea'></textarea><br>

     <p>COMENTARIO:</p>
        <input type='hidden' name='memo' value='Anonymous'>
        <textarea name='memo'></textarea><br>
        <button class='enviar' type='submit' name='enviar'>Enviar</button><br>
            <h1>TAREAS:</h1>
    </form>";

    recibir($conn);
    ?>
<br><br><br><br>
</body>

</html>
