<?php         
    echo "type a number:";
       $numOne = stream_get_line(STDIN, 100, PHP_EOL);
     
    echo "type a second number";
        $numTwo = stream_get_line(STDIN, 100, PHP_EOL);
        
    echo "type an operation";
        $opVar = stream_get_line(STDIN, 1, PHP_EOL);
        if ($opVar == '+'){   //== not = as its not assignment but if equals
            echo $numOne + $numTwo;
        }
     else if ($opVar == '*') {
         echo $numOne * $numTwo;
        }
      
        else if ($opVar == '-') {
            echo $numOne - $numTwo; 
        }
        else if (($opVar == '/') && ($numTwo != 0)) {  //!=0 if not true, so if not 0, else die
        echo $numOne / $numTwo;
        }
        else if($numTwo == 0){
            die("zero");
        }
                //
       
        
        
        

