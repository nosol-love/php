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
//print_r($_GET); //겟방식으로 받은 변수들이 배열방식으로  모두 노출된다.

//print_r($_SERVER); //접속한 브라우저, 아이피, 현재경로, 프로토콜, 쿼리문자 확인가능

//echo phpinfo();


//get방식으로 받은 변수 조건에 따른 식
$a = $_GET['a'];

if($a>10){
    echo "10보다 큽니다. a의 값은 $a"; 
}else{
    echo "10보다 작습니다.";
}

?>
</body>
</html>