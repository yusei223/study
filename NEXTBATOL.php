<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="SNS用のページタイトル">
</head>
<body>
<?php
$level = $_POST['NEXTBATOL'];
$MAXlevelup=20;
$levelup =mt_rand( 10, 100 );
echo "経験値を取得しました。　".$levelup."<br />";
if($levelup>=$MAXlevelup){
    while ($levelup>$MAXlevelup){
        echo "経験値が一定に達しました。<br />レベルがあがりました。";
        $level=$level+1;
        $levelup=$levelup-$MAXlevelup;
        echo "<br />レベル".$level."<br />";    
      }
    
}else{
    $MAXlevelup=$MAXlevelup-$levelup;
    echo "レベルが上がるまで残り".$MAXlevelup."経験値必要です。";
}


?>
<form action="game1.php" method="post">
    <button type="submit" name="NEXTBATOLback" value="<?=$level?>" >🔙</button>
</form>

   
</body>
</html>