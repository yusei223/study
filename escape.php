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
$escape = mt_rand( -1, 1 );
if($escape<=0){
    $HP = $_POST['escape'];
    echo "逃走失敗"; 
}else{
    $HP=1000;
    echo "逃走成功"; 
}

        
?>
<form action="game1.php" method="post">
    <button type="submit" name="back2" value="<?=$HP?>">🔙</button>
</form>
   
</body>
</html>