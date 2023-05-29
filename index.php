<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
<?php
//  function 的宣告沒有執行順序,也可以在 </html> 最下面宣告,
function sum($a,$b){
    $sum = $a + $b ;
    return $sum;
}
// 函式的參數為陣列
function sumArr(...$Arr){
    // echo "<pre>";
    // print_r($Arr);
    // echo "</pre>";   
    $sum = 0;
    for ($i=0 ;$i<count($Arr) ; $i++){
        $sum = $sum+$Arr[$i];
    }
    return $sum;
}
// 使用參數預設值

function circle($r,$pi = 3.1415){
    
    return $r*$r*$pi;

}

echo '不定參數函式_sumArr ='.sumArr(1,2,3,5,7,10,2);


// $sum = sum(100,50);

// echo $sum;

// 可以直接 echo function 
echo "<br>";
echo '自訂參數函式_sum = '.sum(100,50) ;
echo "<br>";
echo '自訂參數的變數值 circle = '.circle(10);


?>



</body>
</html>