<?php
// バブルソート
function bubble_sort(&$arr) {
  $size = count($arr);
  for ($i=0; $i < $size; $i++) {
    for ($j=0; $j < ($size - 1 - $i); $j++) {
      if ($arr[$j + 1] < $arr[$j]) {
        $tmp = $arr[$j + 1];
        // $tmpはswap用
        $arr[$j + 1] = $arr[$j];
        $arr[$j] = $tmp;
      }
    }
  }
}

$arr = array(100,2,30,21,33,54);
bubble_sort($arr);
echo implode(',', $arr)."\n";

?>
