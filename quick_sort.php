<?php
// クイックソート
function quick_sort(&$arr) {
  if (count($arr) < 2) return $arr;
  $left = $right = array();
  // ピボットを選んで取り出す
  $pivot = array_shift($arr);
  // ピボットを基準に大小で左右を値を分ける
  foreach ($arr as $v) {
    if ($v < $pivot) {
      $left[] = $v;
    } else {
      $right[] = $v;
    }
  }

  // 左右を再帰的にソートして統合する。
  // 再帰処理で何度も処理を繰り返している。
  quick_sort($left);
  quick_sort($right);
  $arr = array_merge($left, array($pivot), $right);
}
// 利用例
$arr = array(1,100,2,34,12,4);
quick_sort($arr);
echo implode(',', $arr)."\n";

?>
