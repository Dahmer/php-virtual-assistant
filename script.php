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
        font-size: 40px;
      }
    </style>
  </head>
  <body>
    <div>
    <h1>you can ask me anything</h1>
    <form action="script.php" method="post">
       <input type="text" name="question" placeholder="ask anything...">
       <input type="submit" name="s" value="ask">
    </form>
  </div>
  </body>
</html>

<?php


  if (isset($_POST['s'])) {



    //what PARENT NODE...
    if (preg_match('/what |What |WHAT /', $_POST['question'])) {
      if (preg_match('/ is | Is | IS /', $_POST['question'])) {
        if (preg_match('/ your | Your /', $_POST['question'])) {
          if (preg_match('/ name | Name /', $_POST['question'])) {
            echo "<div>My name is candy</div>";
          }//what is your [name] node
        }//what is [your] node
      }//what [is] node
    }//[what] node
    elseif(preg_match('/which |Which /', $_POST['question'])){
    
    }
    //where PARENT NODE...
    elseif (preg_match('/where |Where |WHERE /', $_POST['question'])) {

    }//[where] node
    //when PARENT NODE...
    elseif (preg_match('/when |When |WHEN /', $_POST['question'])) {

    }//[when] node
    //who PARENT NODE...
    elseif (preg_match('/who |Who |WHO /', $_POST['question'])) {
      if (preg_match('/are |Are /', $_POST['question'])) {
        if (preg_match('/ you| You/', $_POST['question'])) {
          echo "<div>I am virtual assistat designed by unas ishtiaq, How can I help you ?</div>";
        }//who are [you] node
      }//who [are] node
      elseif (preg_match('/is /', $_POST['question'])) {
          if (preg_match('/ your/', $_POST['question'])) {
            if (preg_match('/ Father?| father?/', $_POST['question'])) {
              echo "<div>paul dahmer is my father...</div>";
            }
          }//who is [your] node
      }//who [is] node
     }//[who] node
    //how PARENT NODE...
    elseif (preg_match('/how |How |HOW /', $_POST['question'])) {
      if (preg_match('/are |Are |ARE /', $_POST['question'])) {
          if (preg_match('/you |You |YOU /', $_POST['question'])) {
            echo "<div>I am fine, What about you?</div>";
          }//how are [you] node
        }//how [are] node
      }//[how] node



  }//........isset($_POST['s']) curly clossing bracket.

 ?>
