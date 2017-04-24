# php-virtual-assistant
NOTE:COMPLETE CODE WILL BE AVAILABLE FROM 1ST MAY 2017....

AN ALGORITHM THAT IS SMART AND TAUGHT SELF AWARE....

only used for question and its answer not for conversation yet....

php assistant to ask basic questions and to search on google can be used for websites basic operations


gi
This will include if else conditional algorithm for answering programmed defined questions.
Its an artificial intelligent technique used in siri and cortana ,
to add more and more commands easily and fool other by thoughtful decision making process the more the commands the more it become a being.

you can easily add and edit its commands just download it first and start using.



1:MECHANISM......>

Add always questionnaire word like what, who, when, in the parent node along with if in between its curly braces and others in child nodes of it, one parent node and the other are brothers..


EXAMPLE...
if(preg_match('/#what, who, when etc/', $quest)){//parent node
  if(preg_match('/is am are etc/', $quest)){//second bet of sentence in child node
    //other bets and child notes goes here    
  }else if brother parent node
}else if brother parent node






2:
Be careful do not repeat the same chain node if get a messy code find for it first and than add a parent node.
EXAMPLE...

X.....wrong one.

if(preg_match('/what /', $quest)){
  if(preg_match('/is /', $quest)){
    if(preg_match('/your /', $quest)){
      if(preg_match('/name /', $quest)){
        echo "my name is your defined";
      }
    }
  }
}
elseif(preg_match('/is /', $quest)){
  elseif(preg_match('/time /', $quest)){
    echo $date;
  }
}

...................................................................
./RIGHT ONE...

if(preg_match('/what /', $quest)){
  if(preg_match('/is /', $quest)){
    if(preg_match('/your /', $quest)){
      if(preg_match('/name /', $quest)){
        echo "my name is your defined";
      }
    }  elseif(preg_match('/time /', $quest)){
        echo $date;
      }
  }
}



3:
tree nodes and
How to read the comments for existing and non
existing commands and how to
add a new command if tree node don't exist
SQUARE BRACKETS DEFINE EDITABLE BET TO ADD A SUB TREE NODE


EXAMPLE a
command to add = "who is bill" who's tree node:( who is )exists

algorithm...
if(preg_match('/who /', $quest)){
  if(preg_match('/is /', $quest)){
    if(preg_match('/ Smith/', $quest)){
      echo "Smith is CEO of example company";
    }//who is [Smith] node //your commands tree node is here so add your command here
    elseif(preg_match('/ Bill/', $quest)){
      echo "Bill is production manager";
    }
  }
}

EXAMPLE b
command to add = "who is bill" who's tree node:( who is ) don't exists

if(preg_match('/who /', $quest)){
  if(preg_match('/are /', $quest)){
    if(preg_match('/you /', $quest)){
      echo "I am your virtual assistant..";
    }who are [you] node
  }//who [are] node   //we are going to add is here ..
  elseif(preg_match('/is /', $quest)){
    if(preg_match('/Bill /', $quest)){
      echo "Bill is production manager";
    }//who is [bill] node
  }//who [is] node
}//who parent node closing




one revision more..
SIMPLE STEPS TO ADD A COMMAND.

STEP ONE:
GO FIND TREE NODE OF YOUR COMMAND VIA SEARCH FEATURE.

STEP TWO:
ADD COMMAND IF ITS TREE NODE EXISTS SOMEWHERE
OR
ADD NEW PARENT NODE IF IT DON'T EXIST














GOOD LUCK ......
