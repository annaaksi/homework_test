<?php

//Lesson 12

class Hobby
{
    public $title = 'Gym';

    public $experience = 3;

    public $isCoach = true;

    public function gym()
    {
        echo 'I train 2-3 times a week';
    }
}

//$hobby = new Hobby ();
//echo $hobby->title;


class Hobby2
{
    public $title = 'Videogames';

    public $experience = 25;

    public $isPcGaming = true;

    public function favoriteGame()
    {
        echo 'My favorite game is Wither 3';
    }
}

//$hobby2 = new Hobby2 ();
//$hobby2->favoriteGame();

class Hobby3
{
    public $title = 'wakeboarding';

    public $experience = 5;

    public $canTricks = false;

    public function seasonStart()
    {
        $aDate = time();
        $bDate = strtotime("1.06.2024");

        $datediff = $bDate - $aDate;
        echo 'The 2024 season will start in ';
        echo floor($datediff / (60 * 60 * 24)) . ' days';
    }
}

//$hobby3 = new Hobby3();
//$hobby3->seasonStart();


class Hobby4
{
    public $title = 'travel';

    public $foreignCountries = 1;

    public $thisYear = false;

    public function wouldLikeToVisit()
    {
        echo 'Baikal, Antarctica, China, Kamchatka, Thailand, Bali';
    }
}

//$hobby4 = new Hobby4();
//echo $hobby4->title;


class Hobby5
{
    public $title = 'cook';

    public $experience = 7;

    public $cookWithRecipe = true;

    public function favoriteDish()
    {
        echo 'pasta';
    }
}

//$hobby5 = new Hobby5;
//$hobby5->favoriteDish();


//Lesson 13

class Pet
{
    public $type = 'cat';
    public $age = 4;
    public $name = 'Murka';

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Pet2
{
    public $type = 'dog';
    public $age = 5;
    public $name = 'Barbos';

    public function setName($name)
    {
        $this->namme = $name;
    }
}


class Pet3
{
    public $type = 'humster';
    public $age = 1;
    public $name = 'Kuzia';

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Pet4
{
    public $type = 'carrot';
    public $age = 10;
    public $name = 'Popka';

    public function setName($name)
    {
        $this->name = $name;
    }
}

$pet = new Pet;
$pet2 = new Pet;
$pet3 = new Pet;
$pet4 = new Pet;

//$pet->setName('Musia');
//echo $pet->name;
//
//$pet2->setNAme('Bobik');
//echo $pet2->name;
//
//$pet3->setName('Tuzik');
//echo $pet3->name;
//
//$pet4->setName('Kesha');
//echo $pet4->name;


//Lesson 14

class Burgers
{
    public $dish1 = 'hamburger';
    public $dish2 = 'cheeseburger';
    public $dish3 = 'nuggets';
    public $dish4 = 'french fries';
    public $dish5 = 'chicken wings';

    public function __construct($dish1, $dish2, $dish3, $dish4, $dish5)
    {
//        echo 'The dish of the day: ';
        $this->dish1 = $dish1;
        $this->dish2 = $dish2;
        $this->dish3 = $dish3;
        $this->dish4 = $dish4;
        $this->dish5 = $dish5;
    }
}

$burgers = new Burgers('hamburger', 'cheeseburger', 'nuggets', 'french fries', 'chicken wings');

//echo $burgers->dish1;


class Teremok
{
    public $dish1 = 'borsch';
    public $dish2 = 'meat dumplings';
    public $dish3 = 'pancakes';
    public $dish4 = 'beetroot salad';
    public $dish5 = 'solyanka';

    public function __construct($dish1, $dish2, $dish3, $dish4, $dish5)
    {
//        echo 'The dish of the day: ';
        $this->dish1 = $dish1;
        $this->dish2 = $dish2;
        $this->dish3 = $dish3;
        $this->dish4 = $dish4;
        $this->dish5 = $dish5;
    }
}

$teremok = new Teremok('borsch', 'meat dumplings', 'pancakes', 'beetroot salad', 'solyanka');

//echo $teremok->dish4;


class Sushi
{
    public $dish1 = 'California';
    public $dish2 = 'Filadelfia';
    public $dish3 = 'Canada';
    public $dish4 = 'Alaska';
    public $dish5 = 'Tempura';

    public function __construct($dish1, $dish2, $dish3, $dish4, $dish5)
    {
//        echo 'The roll of the day: ';
        $this->dish1 = $dish1;
        $this->dish2 = $dish2;
        $this->dish3 = $dish3;
        $this->dish4 = $dish4;
        $this->dish5 = $dish5;
    }
}

$sushi = new Sushi('California', 'Filadelfia', 'Canada', 'Alaska', 'Tempura');

//echo $sushi->dish4;


class Shaverma
{
    public $dish1 = 'shaverma';
    public $dish2 = 'sandwich';
    public $dish3 = 'salad Cezar';
    public $dish4 = 'giro';
    public $dish5 = 'cupcake';

    public function __construct($dish1, $dish2, $dish3, $dish4, $dish5)
    {
//        echo 'The dish of the day: ';
        $this->dish1 = $dish1;
        $this->dish2 = $dish2;
        $this->dish3 = $dish3;
        $this->dish4 = $dish4;
        $this->dish5 = $dish5;
    }
}

$shaverma = new Shaverma('shaverma', 'sandwich', 'salad Cezar', 'giro', 'cupcake');

//echo $shaverma->dish2;


class Waffles
{
    public $dish1 = 'Greece waffle';
    public $dish2 = 'waffle with Nutella';
    public $dish3 = 'Belgian waffle';
    public $dish4 = 'yogurt';
    public $dish5 = 'milkshake';

    public function __construct($dish1, $dish2, $dish3, $dish4, $dish5)
    {
//        echo 'The dish of the day: ';
        $this->dish1 = $dish1;
        $this->dish2 = $dish2;
        $this->dish3 = $dish3;
        $this->dish4 = $dish4;
        $this->dish5 = $dish5;
    }
}

$waffles = new Waffles('Greece waffle', 'waffle with Nutella', 'Belgian waffler', 'yogurt', 'milkshake');
//echo $waffles->dish5;


//Lesson 15

class Person
{
    public $name = 'Anna';
    public $age = 30;
    public $job = 'Developer';
}

class Developer extends Person
{
    public function work()
    {
        echo 'developer is working';
    }

}

class CEO extends Person
{
    public function work()
    {
        echo 'CEO is working';
    }
}

class Manager extends Person
{
    public function work()
    {
        echo 'manager is working';
    }
}

class Targeter extends Person
{
    public function work()
    {
        echo 'targeter is working';
    }
}

class Producer extends Person
{
    public function work()
    {
        echo 'producer is working';
    }
}

class Editor extends Person
{
    public function work()
    {
        echo 'editor is working';
    }
}

class Author extends Person
{
    public function work()
    {
        echo 'author is working';
    }
}

class Copywriter extends Person
{
    public function work()
    {
        echo 'copywriter is working';
    }
}

class DJ extends Person
{
    public function work()
    {
        echo 'DJ is working';
    }
}

class Actress extends Person
{
    public function work()
    {
        echo 'actress is working';
    }
}

$dj = new Dj();
//echo $dj->name;


//Lesson 16
class Tree
{
    public $name = 'name';
    public $family = 'family';
    public $genus = 'genus';

    public function __construct($name, $family, $genus)
    {
        $this->name = $name;
        $this->family = $family;
        $this->genus = $genus;
    }
}

class Spruce {
    public function textAbout() {
        echo 'Spruce is a genus of coniferous evergreen trees of the Pine family';
    }
}

$spruce = new Tree('Spruce', 'Pine', 'Coniferous evergreen');
//echo $spruce->name . ', ';
//echo $spruce->family . ', ';
//echo $spruce->genus . "\n";

class Birch {
    public function textAbout(){
        echo 'Birch is a genus of deciduous trees and shrubs of the birch family';
    }
}

$birch = new Tree('Birch', 'Betulaceae', 'Deciduous trees and shrubs');
//echo $birch->name . ', ';
//echo $birch->family . ', ';
//echo $birch->genus . "\n";

class Pine {
    public function textAbout(){
        echo 'Pine is a type genus of coniferous trees, shrubs or plantain trees of the pine family.';
    }
}

$pine = new Tree('Pine', 'Pinaceae', 'Coniferous trees, shrubs or plantain');
//echo $pine->name . ', ';
//echo $pine->family . ', ';
//echo $pine->genus . "\n";

class Willow {
    public function textAbout(){
        echo 'Willow is a genus of woody plants in the Willow family.';
    }
}

$willow= new Tree('Willow', 'Salicaceae', 'Woody plants');
//echo $willow->name . ', ';
//echo $willow->family . ', ';
//echo $willow->genus . "\n";

class Ash {
    public function textAbout() {
        echo 'Ash is a genus of woody plants from the olive family.';
    }
}

$esh = new Tree('Ash', 'Olive', 'Woody plants');
//echo $esh->name . ', ';
//echo $esh->family . ', ';
//echo $esh->genus . "\n";

class Maple {
    public function textAbout(){
        echo 'Maple is a genus of woody plants in the Sapindaceae family,';
    }
}

$maple = new Tree('Maple', 'Sapindaceae', 'Woody plants');
//echo $maple->name . ', ';
//echo $maple->family . ', ';
//echo $maple->genus . "\n";

class Oak {
    public function textAbout(){
        echo 'Oak is a genus of trees and shrubs in the Beech family,';
    }
}

$oak = new Tree('Oak', 'Beech', 'Trres and shrubs');
//echo $oak->name . ', ';
//echo $oak->family . ', ';
//echo $oak->genus . '\n';


//Lesson 17
class Worker
{
    public $name;
    public $age;
    public $job;

    public function __construct($name, $age, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }
}

class Engineer extends Worker
{
    public $salary;

    public function __construct($name, $age, $job, $salary)
    {
        parent::__construct($name, $age, $job);
        $this->salary = $salary;
    }
    public function work()
    {
        echo 'engineer is working';
    }
}

$engineer = new Engineer('Maria', '25', 'engineer', '2000$');
//echo $engineer->salary;


//Lesson 18
abstract class Build
{
    public $floors;
    public $type;
    public $street;

    public function __construct($floors, $type, $street)
    {
        $this->floors = $floors;
        $this->type = $type;
        $this->street = $street;
    }
}

class House extends Build
{
    public $howMuchFamilies;

    public function __construct($floors, $type, $street, $howMuchFamilies)
    {
        $this->howMuchFamilies = $howMuchFamilies;
        parent::__construct($floors, $type, $street);
    }
}

$house = new House(2, 'residential', 'Sadovaya', 2);
//echo $house->howMuchFamilies;

class Mall extends Build
{
    public $parking;

    public function __construct($floors, $type, $street, $parking)
    {
        $this->parking = $parking;
        parent::__construct($floors, $type, $street);
    }
}

$mall = new Mall(4, 'not residential', 'Malinovskogo', true);
//echo $mall->parking;


class Library extends Build
{
    public $openingHours;

    public function __construct($floors, $type, $street, $openingHours)
    {
        $this->openingHours = $openingHours;
        parent::__construct($floors, $type, $street);
    }
}

$library = new Library(1, 'not residential', 'Pushkinskaya', '9:00-20:00');
//echo $library->openingHours;

class School extends Build
{
    public $number;

    public function __construct($floors, $type, $street, $number)
    {
        $this->number = $number;
        parent::__construct($floors, $type, $street);
    }
}

$school = new School(3, 'not residential', 'Kommunisticheskiy', 60);
//echo $school->number;


class Dormitory extends Build
{
    public $rooms;

    public function __construct($floors, $type, $street, $rooms)
    {
        $this->rooms = $rooms;
        parent::__construct($floors, $type, $street);
    }
}

$dormitory = new Dormitory(9, 'residential', 'Orbitalnaya', 500);
//echo $dormitory->rooms;


//Lesson 19
class Calculator
{
    public static function sum($a, $b) {
        echo $a + $b;
    }
    public static function subtract($a,$b) {
        echo $a - $b;
    }
    public static function div($a,$b) {
        echo $a / $b;
    }
    public static function divMod($a,$b) {
        echo $a % $b;
    }
    public static function squared($a, $b) {
        echo $a ** $b;
    }
    public static function power15($a, $b) {
        echo $a ** $b;
    }
    public static function multiply($a, $b) {
        echo $a * $b;
    }
    public static function formula1($a, $b, $c) {
        echo $a + $b / $c;
    }
    public static function sqrt($a) {
        echo sqrt($a);
    }
    public static function formula2($a, $b, $c) {
        echo $a / ($b - $c);
    }
}

//Calculator::sum(2,10);
//echo ', ';
//Calculator::subtract(20,5);
//echo ', ';
//Calculator::div(100, 25);
//echo ', ';
//Calculator::divMod(15, 4);
//echo ', ';
//Calculator::squared(11, 2);
//echo ', ';
//Calculator::power15(2, 15);
//echo ', ';
//Calculator::multiply(6, 9);
//echo ', ';
//Calculator::formula1(7, 30, 5);
//echo ', ';
//Calculator::sqrt(121);
//echo ', ';
//Calculator::formula2(100, 15, 5);


//Lesson 20
interface Plane
{
    public function parking();
    public function boarding();
    public function refill();
    public function flight();
}

class Aeroflot implements Plane
{

    public function parking()
    {
        echo 'is parking';
    }

    public function boarding()
    {
        echo 'is boarding';
    }

    public function refill()
    {
        echo 'is refill';
    }

    public function flight()
    {
        echo 'in flight';
    }

}

echo 'Aeroflot: ';
echo "\n";

class Boeing777 extends Aeroflot
{
    public function boarding()
    {
        parent::boarding();
    }
}

$boeing777 = new Boeing777();
echo 'Boeing 777 ';
echo $boeing777->parking();
echo "\n";

class AirbusA330 extends Aeroflot
{
    public function flight()
    {
        parent::flight();
    }
}

$airbusA330 = new AirbusA330();
echo 'Airbus A330 ';
echo $airbusA330->flight();
echo "\n";

class S7 implements Plane
{
    public function parking()
    {
        echo 'is parking';
    }

    public function boarding()
    {
        echo 'is boarding';
    }


    public function refill()
    {
        echo 'is refill';
    }

    public function flight()
    {
        echo 'in flight';
    }
}

echo 'S7: ';
echo "\n";

class Embraer170 extends S7
{
    public function refill()
    {
        parent::refill();
    }
}

$embraer170 = new Embraer170();
echo 'Embraer 170 ';
echo $embraer170->refill();
echo "\n";

class Boeing737 extends S7
{
    public function boarding()
    {
        parent::boarding();
    }
}

$boeing737 = new Boeing737();
echo 'Boeing 737 ';
echo $boeing737->boarding();
echo "\n";


//Lesson 21
//Public мы используем в тех случаях, когда хотим, чтобы доступ к свойствам и методам можно было получить из любых классов.
//Private подходит для случаев, когда мы хотим запретить общаться к данному свойству или методу. К таким свойствам или методам возможно обратиться тольтко внутри класса, в котором они созданны.
//К Protected свойствам и методам можно получить доступ либо из содержащего его класса, либо из его подклассов. Для остальных классов protected будет недоступен.
