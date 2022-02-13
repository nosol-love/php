<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo $a;
    echo "<br>".$b;
    echo $a + $b;
    echo $c; 

    $test = $_GET["korea"];
    echo $test.$a;
    
    //GET 방식으로 변수를 받아올때는 URL에 ?변수명=값 
    //연이어 다른변수를 받을 때는 &를 붙여서 같은 형식 ! 

    ?>
</body>
</html>