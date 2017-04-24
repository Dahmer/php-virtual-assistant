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
        border-radius: 30px;
        background-color: rgba(255, 255, 255, 0.53);
        color: black;
        width: 80%;
        padding: 30px;
        margin: 10px;
      }
    </style>
  </head>
  <body><div>
    <h1>you can ask me anything</h1>
    <form action="" method="post">
       <input type="text" name="question" placeholder="ask anything...">
       <input type="submit" name="s" value="ask">
    </form></div>
  </body>
</html>

<?php
$submit = $_POST['s'];
$quest = $_POST['question'];

  if (isset($submit)) {



    //what parent node
    if (preg_match('/what |What |WHAT /', $quest)) {
      if (preg_match('/ is | Is | IS /', $quest)) {
        if (preg_match('/ your | Your /', $quest)) {
          if (preg_match('/ name | Name /', $quest)) {
            echo "<div>My name is candy</div>";
          }
        }//what is [your] node
      }//what [is] node
    }//where node
    elseif (preg_match('/where |Where |WHERE /', $quest)) {

    }//when parent node
    elseif (preg_match('/when |When |WHEN /', $quest)) {

    }//who parent node
    elseif (preg_match('/who |Who |WHO /', $quest)) {

    }//how parent node
    elseif (preg_match('/how |How |HOW /', $quest)) {
      if (preg_match('/are |Are |ARE /', $quest)) {
          if (preg_match('/you |You |YOU /')) {
            echo "I am fine, What about you?";
          }
        }//how are [you] node
      }//how [are] node



  }//........isset($_POST['s']) curly clossing bracket.

 ?>
