<?php
$fruits = array("Apple", "Banana", "Mango");

echo $fruits [0];
echo $fruits [1];
$student = array(
    "name" => "Lyle",
    "age" => 22,
    "course" => "IT"
);

echo "<br>Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Course: " . $student["course"] . "<br>";
$student = array(
    array("name" => "Lyle", "age" => 22, "course" => "IT"),
    array("name" => "Oguri", "age" => 20, "course" => "EE"),
    array("name" => "Belno", "age" => 20, "course" => "CE"),
);

echo $student[0]["name"], "<br>";
echo $student[1]["age"], "<br>";
echo $student[2]["course"], "<br>";

$text = "apple,banana,orange";
$fruits1 = explode(",", $text);

print_r($fruits1);
echo "<br><br>";
$fruits2 = ["apple", "banana", "orange"];

$text = implode(" - ", $fruits2);

echo $text;


?>