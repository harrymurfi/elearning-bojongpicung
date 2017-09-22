<?php
  $x = $_SERVER['QUERY_STRING'];
  switch($x) {
    case "Data%20Guru": $query = "select * from guru"; break;
    case "Data%20Siswa": $query = "select * from siswa"; break;
    default: $query = "none";
  }

  $mysqli = new mysqli('localhost', 'root', 'root', 'akademik');
  if ($mysqli->connect_error) {
    echo "Connection failed: " . $mysqli->connect_error;
  }
  else {
    $result = $mysqli->query($query);
  }
?>
<table class="table table-condensed">
  <thead>
    <tr>
      <?php
        while ($finfo = $result->fetch_field()) {
          echo "<th>".$finfo->name."</th>";
        }
      ?>
    </tr>  
  </thead>
  <tbody>
    <?php
      foreach($result as $row) {
        echo "<tr>";
        foreach($row as $field) {
          echo "<td>".$field."</td>";
        }
        echo "<tr>";
      }
    ?>
  </tbody>
</table>
<?php $mysqli->close();?>
  