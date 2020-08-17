
    <?php   //first task function for user input1, user input2, print menu, and for each 4 operations - from below//
//function functionInput1(){
 //   echo "please type a number";
   // $numOne=stream_get_line(STDIN, 100, PHP_EOL);
   // return $numOne;
//}

//function functionInput2( ) {
  //  echo "please type a number";
    //$numTwo=stream_get_line(STDIN, 100, PHP_EOL);
   // return $numTwo;
//}

function printMenu(){
echo   "please type an operation",' \n ';
echo   "1 for addition",' \n ';
echo   "2 for subtraction",' \n ';
echo   "3 for multiplication",' \n ';
echo   "4 for division",' \n ';
echo   "5 for quit",' \n '; 
}
// .  in this approach I used 3 functions : 1 for input1, 2 for input 2, a menu, i then called on each function
    //it would be neater to produce all inputs within an array::
    
    
function userInput(){
     echo PHP.EOL. "please provide the following",' \n ';
     echo PHP.EOL. "please enter a number",' \n ';
              $numOne= stream_get_line(STDIN,100, "/n");
     echo PHP.EOL. "please provide an operation to perform",' \n ';
             $opVar = stream_get_line(STDIN,100, "/n");
     echo PHP.EOL. "please provide a second number",' \n ';
            $numTwo = stream_get_line(STDIN,100, "/n");
return array($numOne, $opVar, $numTwo);
}  

function subtraction($numOne, $numTwo){  
       //echo $numOne;
       //echo $numTwo;
       return $numOne-$numTwo;
}   

function addition($numOne, $numTwo){ 
    //echo $numOne;
   // echo $numTwo;
   return $numOne+$numTwo;
}

function multiplication($numOne, $numTwo){
    //echo $numOne;
    //echo $numTwo;
    return $numOne*$numTwo;
}

function division ($numOne, $numTwo){
    //echo $numOne; stops showing additional figures
    //echo $numTwo;
    return $numOne/$numTwo;
}      

$opVar =0;
while ($opVar !=5){    
    printMenu();
                                    //check understanding here and recall how it was when functions were separate// 
    $inputArray = userInput();
    //echo $numOne.PHP_EOL;
    list($numOne, $opVar, $numTwo) = $inputArray;
    
if ($opVar ==5) {
    die ("end of calculator");
 }
    
if ($numTwo == 0 && $opVar == "4"){
     die ("error");
} else {
switch ($opVar){
    case "1": 
        $result= addition($numOne, $numTwo);
        echo $result;
        break;
    
    case "3":
        $result2 = multiplication ($numOne, $numTwo);
        echo $result2;
        break;
    
    case "4":
        $result3 = division ($numOne, $numTwo);
        echo $result3;
        break;
    
    case "2":
        $result4 = subtraction ($numOne, $numTwo);
        echo $result4;
        break;
            
    case "5":
        die ("end of calculator");
        
    }
}
}

        


       //potentially fix with declaring variables . $numOne $numTwo $opVar
    //operation of + * - /
   //input first no. second no.
    //error checking - if division and second no. 0 returnn die with error
    //use switch-case statement decide which operation to perform

