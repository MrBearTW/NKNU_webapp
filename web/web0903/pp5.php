<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
function show()
{
	echo "我是show fn";
}
?>

<?php
function exMoney($money, $rate)
{

	$ex = $money * $rate;
	
	//echo "您的換匯金額為新台幣".$money."元，目前美金匯率為".$rate."，最後換得".$ex."美元。";

	return $ex;
}
?>

<?php
//show();
//exMoney(100,0.035);
$lex = exMoney(100, 0.035);
echo $lex
?>
</body>
</html>