<?php
  $conn = new mysqli('localhost', 'root', 'root', 'akademik');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }