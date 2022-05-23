<?php
// ファイルを開く r読むだけ　
$openfile = fopen('data/data.txt', 'a');

// ファイル内容を1行ずつ読み込んで出力

while($str = fgets($openfile)){
    echo nl2br($str);
}

// ファイルを閉じる
fclose($openfile);
?>
