<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>assistant</title>
  </head>
  <body>
    <form action="" method="post">
       <input type="text" name="" placeholder="ask anything...">
       <input type="sbmit" name="s" value="ask">
    </form>
  </body>
</html>

<?php
$ask = $_POST['s'];
  if (preg_match('/what is your name?/',$ask)) {
    echo "my name is candy..";
  }

 ?>
