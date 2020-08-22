
<?php
//1---------------------------------------------------
function double($number){
    $doubledNumber = $number*2;
    return $doubledNumber;
}

//2---------------------------------------------------
function f($a,$b){
    return $a + $b;
}
//3---------------------------------------------------
$arr = array(1,3,5,7,9);

function multiply($arr){
 $result = 1;
 foreach($arr as $a){
    $result *= $a;
 }
 return $result;
}
echo multiply($arr);
//4-----------------------------------------------------
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
//もし入ってきた配列の要素$aがすでに代入されてる要素$max_numberより大きかったら、その要素を代入（更新）する
 if($a>$max_number){
     $max_number = $a ;
 }
 
 }
 return $max_number;
 }

//5-----------------------------------------------------
$str = "<h1>strip_tagsの使い方の練習</h1>";
echo strip_tags($str);
//文字列から HTML および PHP タグを取り除く(使いどころがいまいちわからない。。。8/22)

$sports = array("soccer","tennis","basketball");
//ビルトイン関数array_pushで要素を追加
array_push($sports,"baseball");
print_r($sports);//print_rは配列の要素を全て取り出す

//array_merge 配列の結合
//配列を二つ用意
$class1 = array("tanaka","takahashi");
$class2 = array("okada","sato");
//array_mergeの引数に用意した配列を指定
$classes = array_merge($class1,$class2);
print_r($classes);
//time関数
echo time();//UNIX TIMESTAMPを取得 　※UNIX TIMESTAMP = 時間を秒数、つまり数値として表わしたもの
echo "\n";
echo mktime(0,0,0,1,0,2010);//日付を指定できる
echo "\n";
echo time(2020,8,22);


?>











