<?php
  function connect_db() {
    $mysqli = new mysqli('localhost', 'root', 'root', 'akademik');
    if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }
    return $mysqli;
  }  

  function id_check($mysqli, $id, $password) {
    /*
    echo gettype($mysqli);
    echo gettype($id);
    echo gettype($password);
    */
    $query = "select username from admin where username=? or username=?";
    if($stmt = $mysqli->prepare($query)) {
      echo "prepare completed <br>";
      if($stmt->bind_param("ss", $id, $password)) {
        echo "bind param completed <br>";
        if($stmt->execute()) {
          echo "execute completed <br>";
          if($stmt->bind_result($fusername)) {
            echo "bind result completed <br>";
            while ($stmt->fetch()) {
              printf ("%s <br>", $fusername);
            }
          }
        }
      }
    }
  }

  $conn = connect_db();
  id_check($conn, "admin", "cipher");
?>
