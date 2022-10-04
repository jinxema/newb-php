<?php   
        echo "Good Morning Madafakar";
        //just a normal comment (single line comment)
        echo "Yaaaaaas";
        /* (multi line comment)
        Surprise mada fakar
        i can speak more than you thought
        JK LOL
        */
        echo "Tee Hee";

        //variable
    $name = 'Hachama';
    $Favourite = 'Cooking';
    echo $name;

    //constants
    define("Pineapple", "Spongebob squarepant!");
    echo Pineapple;

  //Most data type can be use in combination, exp:string and integer
  $str = "23";
  $int = "46";
  $sum = $str + $int;
  echo ($sum);

  //datatype = float
  $Shaaaaark = "9000";
  $A = "55";
  echo $Shaaaaark+$A;

  //variable scope
  $name = 'Houshou Marine';
    function getName() {
        global $name;
        echo $name;
    }
    getName();

    //variable scope example 2
  $num1 = 9999900123;
  function my_func() {
      $num1 = 69;
      echo $num1;
  }
  my_func();

  //variable variable
  $Yamete = 'Kudasai';
  $Kudasai = "Ah!";
  echo $$Yamete;

  //Arithmetic Operators
  $num1 = 8;
  $num2 = 6;
  //Arithmetic Operators Addition
  echo $num1 + $num2; 
  //Arithmetic Operators Subtraction
  echo $num1 - $num2; 
  //Arithmetic Operators Multiplication
  echo $num1 * $num2; 
  //Arithmetic Operators Division
  echo $num1 / $num2; 

  //modulus
  $x = 14;
  $y = 3;
  echo $x%$y;

  //Increment & Decrement
  $num = 18;
  $num--;
  echo $num;

  //Assignment Operators
  $x = 50;
    $x += 100;
    echo $x;

    //Assignment Operators exp 2
    $a=7; $b=3;
    $a+$b;
    echo$a;


    //array
    $names = array("memechi", "waifu momozuzu nene", "seal nenechi");
    echo $names[1];

    //numeric array
    $myArray[0] = "Polka";
    $myArray[1] = "PO PO PO";
    $myArray[2] = "saiso";
   echo "$myArray[0] is $myArray[2] and knows $myArray[1]";

   //Associative Arrays
   $sake = array("houshou marine"=>"171717", "nekomata okayu"=>"26", "Rbocco"=>"17");
    echo $sake['houshou marine']; 

    //Multi-Dimensional Arrays
    $action = array(
      'shopping cart'=>array('shishiro botan', 'gun'),
      '50kg'=>array('kanata', 'gorila', 'tenshi'),
      'drawing'=>array('ina', 'wah')
);
  echo $action['shopping cart'][0];
  echo "<br />";
  echo $action['drawing'][1];

  //array
  $array[0] = "Hot pot";
  $array[1] = "Watame";
  $array[2] = "bakudan";
  $array[3] = "The real girl Yagoo";
  $array[4] = "Ookami Mio";
  echo "$array[4] cook $array[1] flavor ramen";

  //if else
  $x = 10;
    $y = 20;
    if ($x >= $y) {
        echo $x;
    } else {
        echo $y;
    }

    //elseif
    $age = 9000;
    if ($age<=9000) {
        echo "gawr gura.";
    } elseif ($age>9000 && $age<90001) {
        echo "hachama";
    } else {
        echo "hou shou marine";
}

//while loop
$i = 1;
    while ($i < 7) {
        echo "The value is $i <br />";
        $i++;
    }

    //to do while loop
    $i = 1;
do {  echo "yaaaaa"; }
while($i < 0);

//to do while loop exp2
$i = 5;
    do {
        echo "The number is " . $i . "<br/>";
        $i++;
    } while($i <= 7);

    //the for loop
    for ($a = 0; $a < 6; $a++) {
      echo "Value of a : ". $a . "<br />";
  }

  //the foreach loop
  $items = array("one", "two", "three");
foreach ($items as $item)   {
echo $item."<br />";
}

//switch statement
$food = 'Ugh';
    switch ($food) {
        case "Miko":
            echo "food is Taiyaki.";
            break;
        case "Sora":
            echo "food is sweet or chinese food.";
            break;
        case "AZKi ":
            echo "food is Spaghetti.";
            break;
        case "Pekora ":
            echo "food is Creampuffs.";
            break;
        case "Botan ":
             echo "food is Curry .";
             break;
        case "Moona ":
             echo "food is Borgar.";
             break;
        case "Noel":
             echo "food is Beef Bowl.";
             break;
        default:
             echo "Hachama Cooking.";
    }

    //switch statement exp2
    $i = 1;
switch($i) {
case "1":
echo 'One';
break;
case "2":
echo 'Two';
break;
}

//default statement
$x=392112;
    switch ($x) {
        case 392112:
            echo "Boku Doraemon";
            break;
        case 2491962:
            echo "Osomatsu san";
            break;
        default:
            echo "KO NO DIO DA!!!";
    }

    //switch statement
    $day = 'Wed';
    switch ($day) {
        case 'Mon':
            echo 'First day of the week';
            break;
        case 'Tue':
        case 'Wed':
        case 'Thu':
            echo 'Working day';
            break;
        case 'Fri':
            echo 'Friday!';
            break;
        default:
            echo 'Weekend!';
    }

    //break statement
    $x=1;
    switch ($x) {
        case 1:
            echo "One";
        case 2:
            echo "Two";
        case 3:
            echo "Three";
        default:
            echo "No match";
    }

    //continue staement
    for ($i=0; $i<10; $i++) {
      if ($i%2==0) {
          continue;
      }
      echo $i . ' ';
  }

  //function
  function sayHello() {
    echo "Hello!";
}
sayHello(); 

//function parameters
function multiplyByTwo($number) {
  $answer = $number * 2;
  echo $answer;
}
multiplyByTwo(3);

//funtion parameters exp2
function multiply($num1, $num2) {
  echo $num1 * $num2;
}
multiply(3, 6);

//default argument
function setCounter($num=10) {
  echo "Counter is ".$num."<br />";
}
setCounter(42); 
setCounter();  

//return statement
function mult($num1, $num2) {
  $res = $num1 * $num2;
  return $res;
}
echo mult(8, 3);


?>

  
   