<?php
//$aに３を代入　$bに7を代入し合計を算出
$a = 3;
$b = 7;
echo $a+$b;

//1月〜１２月を配列で作成
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

//変数連結
$hello ="Hello,";
$name  ="Kouki";
$world ="'s World!";

echo $hello.$name.$world;

//複合演算
$tech_boost ='tech';
$tech_boost.=' boost';
echo $tech_boost;

//連想配列
$calender = [
    "January" => "1月",
    "Febuary" => "2月",
    "March"   => "3月",
    "April"   => "4月",
    "May"     => "5月",
    "June"    => "6月",
    "July"    => "7月",
    "August"  => "8月",
    "September"=>"9月",
    "Octorber"=> "10月",
    "November"=> "11月",
    "December"=> "12月",
];

echo $calender['December'];
?>
