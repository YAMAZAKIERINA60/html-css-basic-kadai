<?php
function sort_2way($array, $order) {
  if ($order) {
      // 昇順
      echo "昇順にソートします。<br>";
      sort($array);
      foreach ($array as $num) {
          echo "{$num}<br>";
      }
  } else {
      // 降順
      echo "降順にソートします。<br>";
      rsort($array);
      foreach ($array as $num) {
          echo "{$num}<br>";
      }
  }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10];

sort_2way($nums, true);
sort_2way($nums, false);
?>