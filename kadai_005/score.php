<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
<?php
$score_1='80';
$score_2='60';
$score_3='55';
$score_4='40';
$score_5='100';
$score_6='25';
$score_7='80';
$score_8='95';
$score_9='30';
$score_10='60';

$total=$score_1+$score_2+$score_3+$score_4+$score_5+$score_6+$score_7+$score_8+$score_9+$score_10;

echo "合計点は{$total}です。";
echo '<br>';

$average=$total/10;

echo "平均点は{$average}です。";
?>
</p>
</body>

</html>
