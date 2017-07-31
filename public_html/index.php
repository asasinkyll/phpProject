<?php
/**
 * Created by PhpStorm.
 * User: Ady
 * Date: 27.07.2017
 * Time: 23:58
 */

echo "heloo world this is ";

$myArray = array("mihai", "alexandru", "stefan");

unset($myArray[1]);

foreach ($myArray as $ma){
    echo $ma . "<br>";
}

$myName = "Laurentiu Dorin";

// Imi ia un substring din stringul principal;
echo substr($myName, 1, 6);
echo "<br>";

// Transforma textul in majuscule sau minuscule;
echo strtolower($myName);echo "<br>";
echo strtoupper($myName);echo "<br>";


// Returneaza pozitia indexului substringului din string
echo strpos("Vatan Laurentiu Dorin", "Laurentiu");echo "<br>";

// imi rotunjeste un numar
echo round(M_PI, 13);echo "<br>";

// folosind functia random, aleg o litera dintr-un string;
$randomNumber = rand(1,10);
echo $randomNumber;
echo substr($myName, $randomNumber, 1); echo"<br>";

// adaugarea unui element intr-un string
$myArrayAdd = array();
array_push($myArrayAdd, "Mar");
array_push($myArrayAdd, "Para");
array_push($myArrayAdd, "pastarnac");
echo count($myArrayAdd); echo "<br>";

// Printarea ordonata a unor arrayuri
$unsortedArray = array(1, 7, 2, 8, 12, 9);

sort($unsortedArray);
echo join(", ",  $unsortedArray);

rsort($unsortedArray);
print join(": ", $unsortedArray);


// Functii in php
function helooWorld(){
    echo "Heloo world";
}

helooWorld();


define("GREETING", "HELOO WORLD");
echo GREETING;


class Person {

    private $name;

    public function __construct($name){
       $this->name = $name;
       echo $name;
   }

   public function printName(){
       echo $this->name;
   }

}

$me = new Person("mihai");

if(is_a($me, "Person")){
    echo "Is_a merge   ";
}
if (property_exists($me, "name")){
    echo "proertyexist merge";
}
if (method_exists($me, "printName")){
    echo "method exist emergee";
}

class Constanta{
    const constantaaa = true;
}
echo Constanta::constantaaa;


class Statica{
    public static  $nume = "Mihai";
    public static  function merge(){
        echo "Functia constanta merge";
    }
}


echo Statica::$nume;
Statica::merge();


$persoana = array("nume"=>"mihai", "prenume"=> "Constantin", "dataNasteri"=> 1994);
echo $persoana[prenume];




