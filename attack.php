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
$attack =mt_rand( 1, 100 );
$nam = mt_rand( 1, 100 );
$enmyattack = mt_rand( 1, 20 );
$nam2=mt_rand( 1, 20 );
$HP = $_POST['attack'];
$myHP = $_POST['attack1'];
$cnt = $_POST['attack2'];

if($attack==$nam){
$attack=0;
echo "攻撃を外した。<br />";
$damege=$HP-$attack;
}else{
    echo $attack."ダメージ<br />";
    $damege=$HP-$attack;
}
if($enmyattack==$nam2){
    $enmyattack=0;
    echo "敵の攻撃 攻撃をかわした。<br />";
    $mydamege=$myHP-$enmyattack;
    }else{
        echo "敵の攻撃".$enmyattack."ダメージ<br />";
        $mydamege=$myHP-$enmyattack;
    }



        
?>
<form action="game1.php" method="post">
    <!-- <button type="submit" name="back" value="<?=$damege?>">🔙</button> -->
    <input type="hidden" name="attackback" value="<?=$damege?>" />
    <input type="hidden" name="attackback1" value="<?=$mydamege?>" />
    <input type="hidden" name="attackback2" value="<?=$cnt?>" />
    <input type="submit" value="🔙" />
</form>
   
</body>
</html>