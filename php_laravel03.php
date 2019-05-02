<?php

//名前代入
$name = "kouki";

if($name =="kouki"){
    echo '私は'."$name".'です';
}else{
    echo "あなたの名前ではありません";
}
echo "\n";

//１から10000までの合計
$total = 0;

for ($i = 1; $i <=10000 ; $i++){
    $total += $i;
}
echo '合計は'.$total.'です';
echo "\n";

//foreachを使用して出力
$fruits =array("apple","banana","orange","grap","strobery");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//5の倍数のみ表示
$start = 1;
$end   = 100;

for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
