<?php
include_once("config.php");

$link = mysqli_connect
($dbhost, $dbuser, $dbpass, $dbname, 8889);

mysqli_select_db($link,$dbname);
//var_dump($link);
//$sqlCommand = 'select * from employee';


$sqlCommand = <<< Sqlquery
select id,firstName,lastName,title,title,picture, 
(select count(*)from employee WHERE managerId = e.id)
as reportCount 
from employee e
Sqlquery;

$result = mysqli_query($link,$sqlCommand);
//var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Employee Details</h1>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">
    
    <?php while($row = mysqli_fetch_assoc($result)){?>
		<li>
		<a href="employeeDetails.php?id=<?=$row["id"]?>"> 
			<img src="images/<?=$row["picture"]?>">
			<h4><?= $row["firstName"]?><?=$row["lastName"]?></h4>
            <p><?= $row["title"]?> </p> 
            <span class="ui-li-count"><?=$row["reportCount"]?></span>
		</a>
        </li>
    <?php } ?>
		
		<!-- <li>
		<a href="employeeDetails.php?id=12"> 
			<img src="images/steven_wells.jpg">
			<h4>Steven Wells</h4>
			<p>Software Architect </p> <span class="ui-li-count">0</span>
		</a>
		</li> 
		</ul> -->
</div>

</div>
</body>
</html>
