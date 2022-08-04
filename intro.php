<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>This is me</p>
    <?php 

        $name = "John";
        $age = 33;

        echo"My name is " . $name . ".and I am " . $age . "years old";
        echo"<br>";
        echo"My name is $name.and I am $age years old";
    ?>
<br>
<?php 
        echo "<h1>for loop</h1>";
        
        define("PI", 3.14);

        echo"The value of PI is " . PI;

        for ($i = 1; $i <= 10; $i++) {
            echo $i . "<br />";
        }
        

        $carmakes = array( "BMW", "Audi", "Mercedes");
        foreach ($carmakes as $value) {
            echo $value . "<br />";
        }

        $shoppingCart = array( "a" => "yogurt", "b" => "drink", "c" => "eggs");
        foreach ($shoppingCart as $key => $value) {
            echo $key . " => " . $value . "<br />";
        }

        echo "<h1>while loop</h1>";

        $a = 1;
        while ($a <= 10) {
            echo "a" . $a . "<br />";
            $a++;
        }

        $carmakes = array("BMW", "Audi", "Toyota");

        $j = 0;
        while ($j < count($carmakes)) {
            echo "c... " . $carmakes[$j] . "<br />";
            $j++;
        }

        echo "<h1>Functions</h1>";

        function welcomeMe(){
            echo "<p>Welcome</p>";
        }
        function login($name, $credit ){
            echo "<p>Hi $name. Welcome to my PHP test page! Your credit is $credit dollars</p>";
        }
        
        welcomeMe();
        login("Pius", "100");
        
        function sum($x, $y){
            return $x + $y;
        }
        $sum = sum(7, 5);
        echo "<p>The sum of 7 and 5 is $sum</p>";


        echo "<h1>Get and Post</h1>";

    ?>

        <h3>GET:</h3>
    <form method="get">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
        print_r($_GET);
        if ($_GET['submit']) {
            if ($_GET['username']) {
                echo "<p>Hi ". $_GET['username'] . " . Welcome to my page </p>";
            }
        }
    ?>
   
   <h3>POST:</h3>
   <form method="post">
       <label for="country">Country</label>
       <input type="text" name="country" id="country">
       <input type="submit" name="submit" value="Submit">
   </form>

   <?php
        print_r($_POST);
        if ($_POST['submit']){
            if ($_POST['country']){
                echo "<p>Your country is ". $_POST['country'] . " <p>" ;
            }
        }
   ?>

   <h1>Array Functions</h1>
   <div>
        <?php
            $shoppingBasket1 = array("bread", "milk", "eggs", "apple");
            $shoppingBasket2 = array("apple", "banana", "milk", "orange");
            $shoppingBasket = array_merge($shoppingBasket1, $shoppingBasket2);

            echo "<p>Shopping Basket: </p>";
            print_r($shoppingBasket);

            $count = array_count_values($shoppingBasket);
            echo "<p>Basket Count</p>";
            print_r($count);
            echo "<p> Number of bread items in Basket: <p>" . $count["apple"];

            if (in_array("bread", $shoppingBasket)) {
                echo "<p>There is bread in the basket</p>";
            } else {
                echo "<p>There is no bread in the basket</p>";
            }
            

        ?>
   </div>

</body>
</html>