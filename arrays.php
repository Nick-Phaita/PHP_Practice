<?php
//Indexed arrays
$cars = array("Volvo","BMW","Toyota");
print_r($cars);

echo "<br>I like ${cars[1]}s<br>";
$arrlength = count($cars);
for($i = 0; $i < $arrlength; $i++){
    echo "This is a $cars[$i]<br>";
}



/*
$cars2[0] = "Ferrari";
$cars2[1] = "Lamborghini";
$cars2[2] = "Porsche";

print_r($cars2);
echo "<br> ${cars2[0]}s are quick";*/

//Associative arrays
$games = array("GTA"=>2000,"FIFA"=>3000,"COD"=>5000);
print_r($games);
echo "<br>";
var_dump($games);
echo "<br>";

/*$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
var_dump($age);*/ //String values

$ages = [
    'Joe' => 20,
    'Dave' => 22,
    'Steve' => 19,
];
var_dump($ages);
echo "<br>";

//echo "Steve is $ages[Steve] years old"; // variable parsing
echo "Steve is ". $ages['Steve'] . " years old<br>";  //concatenation

foreach($ages as $name=>$age) {
    echo "My name is $name and I am $age years old.<br>";
}
var_dump($ages);
echo "<br>";

//Multidimensional array
$myArray = array(
    /*$names = */array("Nick","Karanja","Njeri"),
    array("Phaita","Maina","Phaita")
);
echo "<pre>"; //HTML tags that display arrays in a simplified format
print_r($myArray);
echo "</pre>";

echo "<br>My name is " . $myArray[0][0] . " ". $myArray[1][2]. ".<br>";

$data = [
    'Spiderman' => ['Tom Holland','Zendaya','Andrew Garfield'],
    'Fast and Furious' => ['Dwayne Johnson','Vin Diesel', 'Paul Walker']
];
echo "<pre>"; 
print_r($data);
echo "</pre>";
echo "<h1>Movies and actors</h1>";
foreach($data as $movie => $actors){
    echo "<h2>$movie</h2>";
    foreach($actors as $actor){
        echo "<div>$actor</div>";
    }

}


?>