<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php


$str1 = "這幾年 SPA（Single Page App）當道，造就一個現象就是 Server-side 及 Client-side 壁壘分明。如果你是 Client-side 的開發者，可能沒什麼機會自己架一個 web server，所以也不會實作到 session。自己本身也因為這樣，雖然開發 Web 應用已經有幾年的時間，汗顏的是，一直沒有好好了解 session 及 cookie。";
$str2 = "The two cities, the region’s biggest private banking hubs, probably have fewer than 10,000 licensed relationship managers, according to Credit Suisse Group AG, the region’s third-largest private bank. Last year, almost 2,000 new millionaires were minted every day in the region, according to data from Capgemini SE.";

//echo $str1;
//echo "<br>==============================================<br>";
//echo chunk_split($str1,1);

$too = strtok($str2, " ");

while ($too) {
	
	//echo "$too <br>";

	$too = strtok(" ");

}

$loc1 = "高雄市苓雅區和平2路1387號";
$loc2 = "A small village on the southern coast";

$snum = strpos($loc2, "on");

//echo $snum;

//------------------------------------------


$fname = array("photo.jpg", "note.txt", "web3.html", "sqo.mp4");
$ptname = array(".jpg" => "影像檔", ".txt" => "文字檔", "html" => "網頁檔", "mg4" => "視訊檔");

foreach ($fname as $val) {
	$ft = strstr($val, ".");
//echo $ft;
	foreach ($ptname as $na => $desc) {


		if ($na == $ft) {

			echo $val . "類型是" . $desc . "<br>";

		}

	}
}






?>



</body>
</html>