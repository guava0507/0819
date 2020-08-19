<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器         @:停用錯誤
 $link = @mysqli_connect("localhost", "root", "root",) or die(mysqli_connect_error());
//var_dump($link);
 $result = mysqli_query($link, "set names utf8");
 mysqli_select_db($link, "class");

// 2. 執行 SQL 敘述
 $commandText = "select * from students";
 $result = mysqli_query($link, $commandText);
 //var_dump($result);
//echo $result->num_rows;
// $row = mysqli_fetch_assoc($result);
// var_dump($row);
//3. 處理查詢結果
 while ($row = mysqli_fetch_assoc($result))
 {
   echo "ID：{$row['cID']}<br>"; //陣列所以需要用{}包住
   echo "Name：{$row['cName']}<br>";
   echo "sex:$row[cSex]<br>";
   echo "Email:".$row['cEmail'];
   echo "<HR>";
 }

// 4. 結束連線
// mysqli_close($link);

echo "<br />-- Done --";
?>
