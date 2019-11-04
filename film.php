<?php

$link = mysqli_connect("localhost","site","etis","site");

mysqli_set_charset($link, "utf8");

if(mysqli_connect_errno())
{
	echo mysqli_connect_error;
}
$filmId = $_POST["filmId"];
$sqlQuery="select * from films where id=".$filmId;
$sqlResult=mysqli_query($link, $sqlQuery);
$filmRows=mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);
$filmRow=$filmRows [0];
 

?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>
		<?php
			echo $filmRow["name"];
		?>
	</title>
</head>

<body>
	<h1>
		<?php
			echo $filmRow["name"];
		?>
	</h1>
	<h3>
		<?php
			echo $filmRow["description"];
		?>
	</h3>
</body>

</html>
