<?php

$link = mysqli_connect("localhost","site","etis","site");

mysqli_set_charset($link, "utf8");

if(mysqli_connect_errno())
{
	echo mysqli_connect_error;
}

$sqlQuery="select * from films";
$sqlResult=mysqli_query($link, $sqlQuery);
$filmRows=mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);
//$filmRow=$filmRows [0];

?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Главная</title>
</head>

<body>
	<main>
		<?php
		for ($i = 0; $i < count($filmRows); $i++) {
			
//			echo $filmRows[$i]["name"];
		?>
		<div class="main-film-wrapper">
			<h3><?php echo $filmRows[$i]["name"];?></h3>
			<p>
				<?php echo $filmRows[$i]["description"];?>
			</p>
			<div class="main-film-link-wrapper">
				<form action="film.php" method="post">
					<input type="hidden" name="filmId" value=<?php echo $filmRows[$i]["id"]; ?>>
					<input type="submit" value="Подробнее">
				</form>
			</div>
		</div>

		<?php
		}s
		?>
	</main>
</body>

</html>
