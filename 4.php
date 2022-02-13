
<ul>
    <li>테스트</li>
    <li>테스트</li>
    <li>테스트</li>
    <li>테스트</li>
    <li>테스트</li>
    <li>테스트</li>
    <li>테스트</li>
    <li>테스트</li>
</ul>

<?php

//for(초기값;조건;증감값){
    //처리구문
//}


echo "<h2>1부터 n까지 출력하기</h2>";
for($a=0; $a<20; $a = $a + 1){
    echo $a;
}


echo "<h2>n부터 0까지 출력하기</h2>";
for($a=10; $a>=0; $a--){
    echo $a;
}

?>

<ul>
    <?php for($i=0; $i<=20; $i++){ ?>
    <li>테스트 <?=$i?> </li>
    <?php } ?>

</ul>