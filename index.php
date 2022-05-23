<?php 

$name = $_POST['name'];
$memo = $_POST['memo'];


$lat = $_POST['lat'];
$lon = $_POST['lon'];

$time = date('Y/m/d H:i:s');
$file = fopen('data/data.txt', 'a');
fwrite($file, $time . $name . $memo . "\n");
fclose($file);



?>
<html>
    <head>
        <meta charset="utf-8">
        <title>課題06</title>
    <style>
        h1 {
        /*線の種類（二重線）太さ 色*/
        border-bottom: double 5px #FFC778;
        }
        .box2 {
            padding: 0.5em 1em;
            margin: 2em 0;
            font-weight: bold;
            color: #6091d3;/*文字色*/
            background: #FFF;
            border: solid 3px #6091d3;/*線*/
            border-radius: 10px;/*角の丸み*/
        }
        .box2 p {
            margin: 0; 
            padding: 0;
        }
    </style>
    </head>
    <body>
    <h1>入力と表示を一緒にしてみました</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        お名前: <input type="text" name="name">
        メモ: <input type="text" name="memo">
        
        <button type="submit" id="send">送信</button>
    </form>
    <div class="box2">
    <p>名前：<?=$name ?></p>
    <p>メモ：<?=$memo ?></p>
    </div>
        


    </body>
</html>