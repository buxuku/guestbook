<?php
$f = fopen("data.txt", "r");
$gid = $_GET['tid'];
	$tid = 1;
while (($row = fgetcsv($f)) != false) {
		if($tid == $gid || !$gid){
		echo "<a href='?tid=".$tid."'>标题:".$row[0]."</a><br/>";
		echo "内容:".$row[1]."<br/>";
		}
		$tid++;
	}
