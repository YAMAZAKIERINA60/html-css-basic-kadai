<?php
$vege_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

// 連想配列$vege_dataの値を1つずつ順番に出力する
foreach ($vege_data as $key => $value) {
  echo "{$key}:{$value}<br>";
}
?>