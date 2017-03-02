<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Filtrado</title>
  </head>
  <body>

    <?php
    //incluimos la conexion a la base de datos.
      include 'dbnba.php';
      //comprobacion de %_POST["conferencia"].
      if (isset($_POST["local"]) &&! empty($_POST["local"]) && isset($_POST["visitante"]) &&! empty($_POST["visitante"]) && isset($_POST["temporada"]) &&! empty($_POST["temporada"])) {
        $nba=new dbnba();
        $partidos=$nba->devolverPartidos($_POST["local"], $_POST["visitante"], $_POST["temporada"]);
        ?>

        <table border="1px">
          <thead>
           <tr>
             <th>Equipo local</th>
             <th>Equipo visitante</th>
             <th>Puntos local</th>
             <th>Puntos visitante</th>
             <th>Temporada</th>
           </tr>
          </thead>

        <?php
        while ($fila=$partidos->fetch_assoc()) {
          echo "<tr><td>" .$fila["equipo_local"] ."</td><td>" .$fila["equipo_visitante"] ."</td><td>" .$fila["puntos_local"] ."</td><td>" .$fila["puntos_visitante"] ."</td><td>" .$fila["temporada"] ."</td></tr>";
          }
      }else {
        ?>

          <a href="index.php">Te falta algo por enviarme</a>

        <?php
      }
     ?>

      </table>
  </body>
</html>
