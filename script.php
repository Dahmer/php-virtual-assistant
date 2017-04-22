<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>assistant</title>
    <style media="screen">
      body{
        background-color: rgb(0, 0, 0);
        color: white;
      }
      div{
        border: 30px;
        background-color: rgba(255, 255, 255, 0.53)
      }
    </style>
  </head>
  <body>
    <h1>you can ask me anything</h1>
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
