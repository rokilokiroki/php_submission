<?php
// 配列を初期化
$a = [1,2,3];

// 追加
// 配列の末尾に値を追加(1)
$a[] = 4;
// 配列の末尾に値を追加(2)
array_push($a, 5);
// 配列の先頭に値を追加
array_unshift($a, 0);
print_r($a);

// 削除
// 配列の先頭の値を削除
$v1 = array_shift($a);
echo $v1 . "\n";
$v2 = array_pop($a);
echo $v2 . "\n";
print_r($a);

// 任意の場所の要素を取り出す
// array_splice($b, 2, 3); では [2]配列の番号から3つ切り取る
$b = [0,1,6,3,4,5];
$sub = array_splice($b, 2, 3);
print_r($b);
print_r($sub);

// 配列の内容のフィルタリング
$d = [1,2,3,4,5,6,7,8];
// $result = array_filter($d, function($v){
//   return ($v % 2 == 1);
// });
$callback = function ($v) {
  return ($v % 2 == 1);
};
// 呼び出し
$result = array_filter($d, $callback);
print_r($result);

// 配列の各要素に対して処理を行う
$e = [1,11,111,1111];
$res = array_map(function($v){
  return ($v * 2);
}, $e);

print_r($res);

?>
