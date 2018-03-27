<?php
// データを宣言
$data = [
  'Taro' => ['age'=>30, 'hobby' => ['Guitar', 'Piano']],
  'Takashi' => ['age'=>18, 'hobby' => ['Reading']],
  'Arisa' => ['age'=>19, 'hobby' => ['Walking', 'Tea']]
];
// 保存するファイルパス
$file = "serialize-test.json";
// シリアライズ
// シリアライズはphpの内部データを文字列に変換する
// アンシリアライズは文字列をphpのデータに変換する
// json_encodeはphpデータをjson文字列に変換している。つまりシリアライズ。
$str = json_encode($data, JSON_PRETTY_PRINT);
// ファイルに保存
// file_put_contentsで文字列をファイルに書き込みます。ファイルがない場合は新規に作成します。
file_put_contents($file, $str);
// ファイルからデータを復元
// file_get_contentsでファイルの内容を全て文字列に読み込む
$str2 = file_get_contents($file);
// json_decodeはjson文字列にphpデータに変換している。つまりアンシリアライズ。
$data2 = json_decode($str2, true);
// Arisaのhobbyを表示
print_r($data2['Arisa']['hobby']);
// catでserialize-test.jsonを確認。ちゃんとjsonの形になっていた。

?>
