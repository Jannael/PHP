<?php
echo "hello world \n";
$var = "str";
echo gettype($var) . "\n"; // to get the data type

const constant = "constant";
echo constant . "\n";

// array
$array = [1, 2, 3, 4];
echo $array[0] . "\n";
array_push($array, 5);
array_push($array, 5);
print_r($array);

// dictionary
$myDict = array("str" => constant);
print_r($myDict);
echo $myDict['str'] . "\n";

// set

$mySet = array_unique($array);
print_r($mySet);

// for
for ($i = 0; $i <= 10; $i++) {
  echo "for ", $i . "\n";
}

//foreach
foreach ($mySet as $item) {
  echo "foreach ", $item . "\n";
}

// while
$a = 0;
while ($a <= 10) {
  echo "while ", $a++ . "\n";
}

// length
echo "length ", sizeof($mySet) . "\n";

// if

// logic operators && => and, || => or, ! => not
if ($a == 10) {
  $a = 11;
  echo "if ", $a . "\n";
}

// function 
// the parameter can be $myNumber as well
function print_number(int $myNumber)
{
  echo "function ", $myNumber . "\n";
}

print_number(10);
print_number(11);
print_number(12);

// class
class MyClass
{
  public $name;
  public $age;
  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

$myClass = new MyClass("Janna", 19);
print_r($myClass);
echo $myClass->name . "\n";
$myClass->name = "secondName";
echo $myClass->name . "\n";
