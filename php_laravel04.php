<?php
//引数$numberを二倍にして返す関数
function twice($number){
    $answer = $number * 2 ;
    return $answer;
    echo $answer;
}
echo twice(100)."\n";

//$a $bを足した結果を返す関数

function plus($a,$b){
    $answer = $a + $b;
    return $answer;
    echo $answer;
}
echo plus(2,10)."\n";


//配列の引数を全てかけた値を出力
function multiplication($arr){
    echo array_product($arr);
}
$arr = array(1,3,5,7,9);
echo multiplication($arr);
echo "\n";

//パターン２
function test2($arr){
    $result = $arr[0];
    for($i = 1;$i <count($arr);$i++){
        $result *=$arr[$i];
    }
    echo $result;
}
$arr = array(1,3,5,7,9);
echo test2($arr);
echo "\n";

//配列の中で一番大きい値を返す関数
function max_array($arr){
    //配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];

    foreach($arr as $a){
        for($i=1 ;$i <count($arr);$i++){
            if($max_number < $arr[$i]){
                $max_number = $arr[$i];
            }
        }
    }
    return $max_number;
}
$arr = array(1,1400,3,5100,10000);
echo max_array($arr)."\n";


//strip_tags
$str = <<<END
<h1>こんにちは</h1>
<p>Hello World</p>
END;

echo strip_tags($str)."\n";
//echo $str."\n";

//array_push
$array = array('A','B','C');
array_push($array,'D','E');
var_dump($array);

//array_merge
$array = array('A','B','C','D');
$arr = array_merge($array,array(2,3,8));
var_dump($arr);

//time,mktime
echo time();
echo "\n";
$timestamp = mktime(15,30,30,5,8,2018);

echo $timestamp."\n";

//date
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s")."\n";

?>
