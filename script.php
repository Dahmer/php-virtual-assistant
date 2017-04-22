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
        background-color: rgba(255, 255, 255, 0.53);
        color: black;
        width: 80%;
        padding: 30px;
      }
    </style>
  </head>
  <body><div>
    <h1>you can ask me anything</h1>
    <form action="" method="post">
       <input type="text" name="question" placeholder="ask anything...">
       <input type="sbmit" name="s" value="ask">
    </form></div>
  </body>
</html>

<?php
$submit = $_POST['s'];
$quest = $_POST['question'];
  if (isset($submit)) {



    //what list
    if (preg_match('/what |What |WHAT /', $quest)) {
      if (preg_match('/ is | Is | IS /')) {
        if (preg_match('/ your | Your /')) {
          if (preg_match('/ name | Name /')) {
            echo "<div>My name is candy</div>";
          }
        }
      }
    }//where list
    elseif (preg_match('/where |Where |WHERE /', $quest)) {

    }//when list
    elseif (preg_match('/when |When |WHEN /', $quest)) {

    }//who list



  }//........isset curly braces clossing

 ?>
