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
$HP=1000;
$MYHP=100;
$level=1;
$cnt=0;

if(isset($_POST['attackback'])) {
    $HP = $_POST['attackback'];
    $MYHP = $_POST['attackback1'];
    $cnt = $_POST['attackback2'];
    if($HP<=0){
            echo "敵を倒した<br />";
    }else{
            echo "残りのHP".$HP."<br />";
    } 
    if($MYHP<=0){
            echo "GAME OVER<br />";
    }else{
            echo "残りのHP".$MYHP."<br />";
    } 

} else if(isset($_POST['back2'])) {
    $HP = $_POST['back2'];
    echo "残りのHP".$HP."<br />";
}else if(isset($_POST['sukilback'])) {
    $HP = $_POST['sukilback'];
    $MYHP = $_POST['sukilback1'];
    $cnt = $_POST['sukilback2'];
    if($HP<=0){
            echo "敵を倒した<br />";
    }else{
            echo "残りのHP".$HP."<br />";
    } 
    if($MYHP<=0){
        echo "GAME OVER<br />";
    }else{
        echo "残りのHP".$MYHP."<br />";
    } 
}else if(isset($_POST['NEXTBATOLback'])) {
    $level=$_POST['NEXTBATOLback'];
    echo "敵が現れた<br />敵のHP<br />[".$HP."]<br />";
    echo "自分のHP<br />[".$MYHP."]<br />自分のlevel<br />[".$level."]<br />";
}else{
    echo "敵が現れた<br />敵のHP<br />[".$HP."]<br />";
    echo "自分のHP<br />[".$MYHP."]<br />自分のlevel<br />[".$level."]<br />";
}
?>
<form action="attack.php" method="post">
    <!-- <button type="submit" name="attack" value="<?=$HP?>">戦う</button> -->
    <input type="hidden" name="attack" value="<?=$HP?>" />
    <input type="hidden" name="attack1" value="<?=$MYHP?>" />
    <input type="hidden" name="attack2" value="<?=$cnt?>" />
    <input type="submit" value="戦う" />
</form>

<form action="escape.php" method="post">
    <button type="submit" name="escape" value="<?=$HP?>">逃げる</button>
</form>

<form action="sukil.php" method="post">
    <!-- <button type="submit" name="sukil" value="<?=$HP?>">スキル</button> -->
    <input type="hidden" name="sukil" value="<?=$HP?>" />
    <input type="hidden" name="sukil1" value="<?=$MYHP?>" />
    <input type="hidden" name="sukil2" value="<?=$cnt?>" />
    <input type="submit" value="スキル" />
</form>

<form action="NEXTBATOL.php" method="post">
    <button type="submit" name="NEXTBATOL"value="<?=$level?>">再び戦う</button>
</form>
<form action="start.php" method="post">
    <button type="submit" name="backstart" >最初の画面に戻る</button>
</form>
   
</body>
</html>