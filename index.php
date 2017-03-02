<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index.</title>
  </head>
  <body>
    <form action="filtrado.php" method="post">
      Equipo local: <br>
      <select name="local">
        <?php
        include 'dbnba.php';
        $nba=new dbnba();
        $local=$nba->SelectLocal();
        while ($fila=$local->fetch_assoc()) {
          echo "<option value='" .$fila["equipo_local"] ."'> " .$fila["equipo_local"] ."</option>";
          }
         ?>
      </select>
      <br>
      <br>
      Equipo visitante: <br>
      <select name="visitante">
        <?php
        $visitante=$nba->SelectVisitante();
        while ($fila=$visitante->fetch_assoc()) {
          echo "<option value='" .$fila["equipo_visitante"] ."'> " .$fila["equipo_visitante"] ."</option>";
          }
         ?>
      </select>
      <br>
      <br>
      Temporada: <br>
      <select name="temporada">
        <?php
        $temporada=$nba->SelectTemporada();
        while ($fila=$temporada->fetch_assoc()) {
          echo "<option value='" .$fila["temporada"] ."'> " .$fila["temporada"] ."</option>";
          }
         ?>
      </select>
      <br>
      <br>
      <input type="submit" value="Filtrar">
    </form>
  </body>
</html>
