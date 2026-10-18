<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
       max-width: 80%;
       background-color: rgb(228, 195, 195);
       margin: auto; 
       padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your Party status is here:</p>
        <?php
        $age = 6;
        if($age>18){
            echo "You can go to party";
        }
        else if($age==6){
            echo "You are 6 years old";
        }
        else{
            echo"You cannot go to party";
        }
        // Arrays in php
        $languages = array("Pyhton", "C++", "PHP", "Node.js");
        // echo count($languages);
        // echo $languages[0];

        // Loops in PHP
       $a = 0; 
        while ($a <= 10){
            echo "<br>The value of a is:";
            echo $a;
            $a++;
        }

         // Iterating arrays in PHP using while loop
       $a = 0; 
        while ($a < count($languages)){
            echo "<br>The value of a language is:";
            echo $languages[$a];
            $a++;
        }

         // Do while loop
       $a = 20; 
        do {
            echo "<br>The value of a is:";
            echo $a;
            $a++;
        }while ($a < 10);

        // For loop
        for ($a=0 ; $a < 10; $a++){
            echo "<br>The value of a from the for loop is:";
            echo $a;
        }

        // foreach loop
        foreach ($languages as $value){
            echo "<br>The value from for each loop is ";
            echo $value;
        }

        function print5(){
            echo "<br>Five";
        }
        print5();
       function print_number($number){
        echo "<br> Your number is ";
        echo $number;
       } 
       print_number(45);
        ?>
    </div>
</body>
</html>