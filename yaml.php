<?php
// YAMLライブラリの取り込み
require 'vendor/autoload.php';
use Symfony\Composer\Yaml;

// データを宣言
$data = [
  'Taro' => ['age'=>30, 'hobby' => ['Guitar', 'Piano']],
  'Takashi' => ['age'=>18, 'hobby' => ['Reading']],
  'Arisa' => ['age'=>19, 'hobby' => ['Walking', 'Tea']]
];
// 保存するファイルパス
$file = "serialize-test.json";

// PHP配列をYAMLに変換
$dumper = new Yaml\Dumper();
// dump()はsymfony特有のメソッドphpデータをyaml文字列に変換
$yaml = $dumper->dump($data);
file_put_contents($file, $yaml);

// YAMLをファイルから読み込む
$yaml2 = file_get_contents($file);
$yaml_p = new Yaml\Parser();
// parse()はsymfony特有のメソッドyaml文字列をphpデータに変換
$data2 = $yaml_p->parse($yaml2);

// 結果を表示
foreach ($data2 as $name => $v) {
  $age = $v["age"];
  $hobby = $v["hobby"][0];
  if (isset($v["hobby"][1])) {
    $hobby .= " ".$v["hobby"][1];
  }
  echo "[$name] $age $hobby\n";
}


?>
