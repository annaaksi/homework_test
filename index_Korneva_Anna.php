<?php

//Lesson 2
//Типы данных:
////1. Integer/Float
//11, 5.3;
////2. String
//'Hello';
////3. Boolean
//$isStudent = true;
////4. Null
//null;
////5. Array
//$lang = ['english', 'russian', 'french', 'german'];
////6. Object
//$store->isOpen;
////7. Callable
//class newClass;
////8. Mixed
//gettype();


//Lesson 3
//$name = 'Anna';
//$age = '30';
//$hobby = 'videogames';
//$isMarried = true;
//$pet = 'cat';
//$petName = 'Simona';
//
//echo $name . "\n";
//echo $age . "\n";
//echo $hobby . "\n";
//echo $isMarried . "\n";
//echo $pet . "\n";
//echo $petName . "\n";
//
//$name2 = 'Ilia';
//$age = '37';
//$hobby = 'hobbyhorsing';
//$isMarried = true;
//$pet = 'cat';
//$petName = 'Leo';
//
//echo $name2 . "\n";
//echo $age . "\n";
//echo $hobby . "\n";
//echo $isMarried . "\n";
//echo $pet . "\n";
//echo $petName . "\n";
//
//$name3 = 'Anastasia';
//$age = '25';
//$hobby = 'basketball';
//$isMarried = true;
//$pet = 'cat';
//$petName = 'Ciri';
//
//echo $name3 . "\n";
//echo $age . "\n";
//echo $hobby . "\n";
//echo $isMarried . "\n";
//echo $pet . "\n";
//echo $petName . "\n";


//Lesson 4
//$person = [
//    'name' =>'Anna',
//    'age' => 30,
//    'hobby' => 'videogames',
//    'is_married' => true,
//    'pet' => 'cat',
//    'pet_name' => 'Simona'
//];
//
//print_r($person);
//
//$person2 = [
//    'name' =>'Ilia',
//    'age' => 37,
//    'hobby' => 'hobbyhorsing',
//    'is_married' => true,
//    'pet' => 'cat',
//    'pet_name' => 'Leo'
//];
//
//print_r($person2);
//
//$person3 = [
//    'name' =>'Anastasia',
//    'age' => 25,
//    'hobby' => 'basketball',
//    'is_married' => true,
//    'pet' => 'cat',
//    'pet_name' => 'Ciri'
//];
//
//print_r($person3);
//
//$person4 = [
//    'name' =>'Kristina',
//    'age' => 29,
//    'hobby' => 'cook',
//    'is_married' => false,
//    'pet' => 'cat',
//    'pet_name' => 'Alisa'
//];
//
//print_r($person4);
//
//$person5 = [
//    'name' =>'Elena',
//    'age' => 28,
//    'hobby' => 'gym',
//    'is_married' => true,
//    'pet' => 'dog',
//    'pet_name' => 'Charli'
//];
//
//print_r($person5);
//
//$person6 = [
//    'name' =>'Victoria',
//    'age' => 30,
//    'hobby' => 'work',
//    'is_married' => false,
//    'pet' => 'dog',
//    'pet_name' => 'Charlik'
//];
//
//print_r($person6);
//
//$person7 = [
//    'name' =>'Julia',
//    'age' => 30,
//    'hobby' => 'dance',
//    'is_married' => false,
//    'pet' => 'dog',
//    'pet_name' => 'Naida'
//];
//
//print_r($person7);

//Lesson 5
//$person = [
//    'name' =>'Anna',
//    'age' => 30,
//    'hobby' => 'videogames',
//    'is_married' => true,
//    'pet' => 'cat',
//    'pet_name' => 'Simona'
//];
//
//foreach ($person as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//$person2 = [
//    'name' =>'Ilia',
//    'age' => 37,
//    'hobby' => 'hobbyhorsing',
//    'is_married' => true,
//    'pet' => 'cat',
//    'pet_name' => 'Leo'
//];
//
//foreach ($person2 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//$person3 = [
//    'name' =>'Anastasia',
//    'age' => 25,
//    'hobby' => 'basketball',
//    'is_married' => true,
//    'pet' => 'cat',
//    'pet_name' => 'Ciri'
//];
//
//foreach ($person3 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//$person4 = [
//    'name' =>'Kristina',
//    'age' => 29,
//    'hobby' => 'cook',
//    'is_married' => false,
//    'pet' => 'cat',
//    'pet_name' => 'Alisa'
//];
//
//foreach ($person4 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//$person5 = [
//    'name' =>'Elena',
//    'age' => 28,
//    'hobby' => 'gym',
//    'is_married' => true,
//    'pet' => 'dog',
//    'pet_name' => 'Charli'
//];
//
//foreach ($person5 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//$person6 = [
//    'name' =>'Victoria',
//    'age' => 30,
//    'hobby' => 'work',
//    'is_married' => false,
//    'pet' => 'dog',
//    'pet_name' => 'Charlik'
//];
//
//foreach ($person6 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//$person7 = [
//    'name' =>'Julia',
//    'age' => 30,
//    'hobby' => 'dance',
//    'is_married' => false,
//    'pet' => 'dog',
//    'pet_name' => 'Naida'
//];
//
//foreach ($person7 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}


//Lesson 6
//$persons = [
//    [
//        'name' => 'Anna',
//        'age' => 30,
//        'hobby' => 'videogames',
//        'is_married' => true,
//        'pet' => 'cats',
//        'pet_name' => 'Simona'
//    ],
//    [
//        'name' => "Ilia",
//        'age' => 37,
//        'hobby' => 'hobbyhorsing',
//        'is_married' => true,
//        'pet' => 'cat',
//        'pet_name' => 'Leo',
//    ],
//    [
//        'name' => 'Anastasia',
//        'age' => 25,
//        'hobby' => 'basketball',
//        'is_married' => true,
//        'pet' => 'cats',
//        'pet_name' => 'Ciri'
//    ],
//    [
//        'name' => 'Kristina',
//        'age' => 29,
//        'hobby' => 'cook',
//        'is_married' => false,
//        'pet' => 'cat',
//        'pet_name' => 'Alisa'
//    ],
//    [
//        'name' => 'Elena',
//        'age' => 28,
//        'hobby' => 'gym',
//        'is_married' => true,
//        'pet' => 'dog',
//        'pet_name' => 'Charli'
//    ],
//    [
//        'name' => 'Victoria',
//        'age' => 29,
//        'hobby' => 'work',
//        'is_married' => false,
//        'pet' => 'dog',
//        'pet_name' => 'Charlik'
//    ],
//    [
//        'name' => 'Julia',
//        'age' => 30,
//        'hobby' => 'dance',
//        'is_married' => false,
//        'pet' => 'dog',
//        'pet_name' => 'Naida'
//    ]
//];
//
//foreach ($persons as $person) {
//    print_r($person['pet']);
//}


//Lesson 7
//$persons = [
//    [
//        'name' => 'Anna',
//        'age' => 30,
//        'hobby' => 'videogames',
//        'is_married' => true,
//        'pet' => 'cats',
//        'pet_name' => 'Simona'
//    ],
//    [
//        'name' => "Ilia",
//        'age' => 37,
//        'hobby' => 'hobbyhorsing',
//        'is_married' => true,
//        'pet' => 'cat',
//        'pet_name' => 'Leo',
//    ],
//    [
//        'name' => 'Anastasia',
//        'age' => 25,
//        'hobby' => 'basketball',
//        'is_married' => true,
//        'pet' => 'cats',
//        'pet_name' => 'Ciri'
//    ],
//    [
//        'name' => 'Kristina',
//        'age' => 29,
//        'hobby' => 'cook',
//        'is_married' => false,
//        'pet' => 'cat',
//        'pet_name' => 'Alisa'
//    ],
//    [
//        'name' => 'Elena',
//        'age' => 28,
//        'hobby' => 'gym',
//        'is_married' => true,
//        'pet' => 'dog',
//        'pet_name' => 'Charli'
//    ],
//    [
//        'name' => 'Victoria',
//        'age' => 29,
//        'hobby' => 'work',
//        'is_married' => false,
//        'pet' => 'dog',
//        'pet_name' => 'Charlik'
//    ],
//    [
//        'name' => 'Julia',
//        'age' => 30,
//        'hobby' => 'dance',
//        'is_married' => false,
//        'pet' => 'dog',
//        'pet_name' => 'Naida'
//    ]
//];
//
//foreach ($persons as $person) {
//    if ($person['is_married']) {
//        print_r($person['name'] . ' is_married' . "\n");
//    } else {
//        print_r($person['name'] . ' not_married' . "\n");
//    }
//}


//Lesson 8
//$name = 'Anna';
//$age = 30;
//$hometown = 'Rostov-on-Don';
//$flat = 137;
//$job = 'targeter';
//$hobby = 'videogames';
//$is_married = true;
//$pet = 'cat';
//$pet_name = 'Simona';
//
////1
//if ($name == 'Anna' && $age == 20) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////2
//if ($age > 18) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////3
//if ($age < 30 && $name === 'Anna') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////4
//if ($is_married == false) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////5
//if ($pet != 'dog') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////6
//if ($hometown == 'Moscow' && $age > 18) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////7
//if ($flat >= 100) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////8
//if ($job == 'targeter' || $hobby == 'swimming') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////9
//if ($pet == 'cat' && $pet_name == 'Simona') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////10
//if ($pet == 'dog' || $pet == 'cat') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////11
//if ($flat < 200 && $name == 'Vladimir') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////12
//if ($age === 30 && $flat >= 10) {
//    echo 'Yes';
//} else {
//    echo "No";
//}
//
////13
//if ($hobby == 'dance' || $hobby == 'gym') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////14
//if ($job == 'targeter') {
//    echo $name;
//} else {
//    echo 'No';
//}
//
////15
//if ($pet > $pet_name) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////16
//if ($age === 30) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////17
//if ($name == 'Anna' && $age >= 30 && $pet == 'dog') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////18
//if ($pet_name < 'simona') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////19
//if ($hometown == 'Moscow' || $job == 'targeter') {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//
////20
//if ($age <= 30 && $is_married == true) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}

////Lesson 9
//function subtract() {
//    $subtract = 839 - 173;
//    echo $subtract;
//}
//
//subtract();

//function multiply() {
//    $multiply = 17 * 3;
//    echo $multiply;
//}
//
//multiply();

//function div() {
//    $div = 384 / 27;
//    echo $div;
//}
//
//div();


//Lesson 10
//function squared($a) {
//    $squared = $a ** 2;
//    echo $squared;
//}
//
//squared(5);

//function sum($a, $b) {
//    $sum = $a + $b;
//    echo $sum;
//}
//
//sum(11, 12);

//function subtract($a, $b, $c) {
//    $subtract = $a - $b - $c;
//    echo $subtract;
//}
//
//subtract(250, 121, 54);

//function div($a, $b) {
//    $div = $b / $a;
//    echo $div;
//}
//
//div(3, 132);

//function sum2($a, $b) {
//    $sum2 = $a + $b;
//    echo $sum2;
//}
//
//sum2(2.5, 6.7);

//function power21($a, $b) {
//    $power21 = $a ** $b;
//    echo $power21;
//}
//
//power21(2, 21);

//function divMod($a, $b) {
//    $divMod = $a % $b;
//    echo $divMod;
//}
//
//divMod(163, 15);

//function formula($a, $b, $c) {
//    $formula = $a + $b * $c;
//    echo $formula;
//}
//
//formula(35, 12, 4);

//Lesson 11
//function getSquared($a) {
//    $getSquared = $a ** 2;
//    return $getSquared;
//}
//
//$num = getSquared(5);
//echo $num;
//
//function getSum($a, $b) {
//    $getSum = $a + $b;
//    return $getSum;
//}
//
//$num = getSum(11, 12);
//echo $num;

//function getSubtract($a, $b, $c) {
//    $getSubtract = $a - $b - $c;
//    return $getSubtract;
//}
//
//$num = getSubtract(250, 121, 54);
//echo $num;
//
//function getDiv($a, $b) {
//    $getDiv = $b / $a;
//    return $getDiv;
//}
//
//$num = getDiv(3, 132);
//echo $num;
//
//function getSum2($a, $b) {
//    $getSum2 = $a + $b;
//    return $getSum2;
//}
//
//$num = getSum2(2.5, 6.7);
//echo $num;
//
//function getPower21($a, $b) {
//    $getPower21 = $a ** $b;
//    return $getPower21;
//}
//
//$num = getPower21(2, 21);
//echo $num;
//
//function getDivMod($a, $b) {
//    $getDivMod = $a % $b;
//    return $getDivMod;
//}
//
//$num = getDivMod(163, 15);
//echo $num;
//
function getFormula($a, $b, $c) {
    $getFormula = $a + $b * $c;
    return $getFormula;
}

$num = getFormula(35, 12, 4);
echo $num;

