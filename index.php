<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Opgave: fidipus</title>
    </head>
    <body>
<?php 
$list = explode("/", "Fidi/Pus/Fidipus");
$x = 3;
$y = 5;
for($i=1; $i<100; $i++)
{
    if($i % $x == 0)
    {
        if($i % $y == 0){
            //echo $i;
            echo "<li>{$list[2]}</li>";
        }
        //echo $i;
        echo "<li>{$list[0]}</li>";
    }
    else if($i % $y == 0)
    {
        //echo $i;
        echo "<li>{$list[1]}</li>";
    }
}

?>
    </body>
</html>
