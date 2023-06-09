<?php 
/*This file mainly contains string variables*/ 
$fName = "Nick";     //global scope
$lName = "Phaita";
$fullName = "";

/*Echo                                  |                   Print
  No return value                       |   return value of 1 (can be used in expressions)
  can take multiple parameters          |   can take 1 argument
  marginally faster                     |
                                        |
*/


function myName(){
    $sName = "Maina";  //local scope
    global $fName, $lName; // global keyword used to access global variables from within a function
    echo $fName . " " . $lName;
}

function globalArray(){
    echo $GLOBALS['fName'] . " " . $GLOBALS['lName'] ."<br>";
    $GLOBALS['fullName'] = "My name is $GLOBALS[fName] $GLOBALS[lName]" ; //notice, no quotation mark encapsulating the variable name within []
    echo $GLOBALS['fullName'];
}

function variableParsing(){
    $language = "PHP";
    global $lName;
    echo "I am learning $language. <br>";
    echo "This is ${lName}'s work."; //This is Phaita's work
}

function concatenationAssignment(){
    global $lName;
    $intro =  "My name is $lName";
    //echo "$intro. <br>"; 
    $intro .= " and I want to grow.";
    echo $intro;
}

function referenceAssignment(){ // alias - multiple names for the same memory location
    $interest = "pentester";
    $profession = $interest;
    echo "I am working as a $profession";
    $interest = "programmer";
    echo "<br>I am still a $profession"; //value of $profession doesn't change despite change in $interest. The two are different memory locations

    $favouriteTeam = "Brighton";
    $currentTeam =& $favouriteTeam;
    echo "<br>I have been following $currentTeam";
    $favouriteTeam = "Newcastle";
    echo "<br>However, I've been watching $currentTeam lately."; //$currentTeam is an alias of $favouriteTeam. They both point to the same memory location

}



echo "<h1>Strings</h1><br>";

// myName(); // Outputs Nick Phaita
globalArray();
echo "<br>";
variableParsing();
echo "<br>";
concatenationAssignment();
echo "<br>";
referenceAssignment();

// numerical values testing

function testStatic1(){
    $num = 4;
    echo ",$num";
    $num++;
    //4 is repeated over and over whenever the function is called
}
function testStatic2(){
    static $num = 4;
    echo ",$num";
    $num++;
    //each function call increments the value of the number
}

function mathematicalAssignment(){
$my_num = 7;
$answer = $my_num; // = 7
$answer += 2; // 7 + 2 = 9
$answer *= 2; // 9 x 2 = 18
$answer -= 2; // 18 - 2 = 16
$answer /= 2; // 16 / 2 = 8
$answer -= $my_num; // 8 - 7 = 1
echo $answer; // Prints 1
}



echo "<br><h1>Numbers</h1><br>";
testStatic1();
testStatic1();
testStatic1();
echo "<br>";
testStatic2();
testStatic2();
testStatic2();
echo "<br>";
echo 2 ** 6; //exponentiation. result = 64
echo "<br>";
echo 10 % 4; //modulo. result = 2
echo "<br>";
mathematicalAssignment();


?>