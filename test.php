<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'\include.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <title>Test</title>
  <?php
    include_title();
  ?>
</head>
<body>
<script>
  function testfunc(user)
  {
    $(function ()
    {
      if (user != null)
      {
        window.location.replace("/test2.php?" + user);
      }
    });
  }
</script>
<button onclick="testfunc('asdas')">Send me away</button>    
</body>
</html>