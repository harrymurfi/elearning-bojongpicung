<?php
  $mysqli = new mysqli('localhost', 'root', 'root', 'akademik');
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }