<?php
  function include_title() {
    require_once '/shared/resources.html';
  }

  function connect_db() {
    include_once('/includes/connectDB.php');
    return $conn;
  }

  function session_check() {
    
  }