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
        define("PI", 3.14);

        echo"The value of PI is " . PI;
    ?>
    
</body>
</html>