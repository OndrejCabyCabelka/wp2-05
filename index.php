<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php

define ("symbol", "X");
define ("symbol2", "O");
       for ($i=0; $i < 10 ; $i++) { 
              for ($y=0; $y < 10 ; $y++) { 

                if(($i+$y) % 2  == 0 ){
                    echo constant ("symbol");
                }
               else {
                   echo constant("symbol2");
               }
            
            
           }
           echo "<br>";
       } 
       
    ?>
    
</body>
</html>