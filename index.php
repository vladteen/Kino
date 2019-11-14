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
	<link rel="stylesheet" href="style.css">
</head>


<body>
	<div class="container">
		<div class="logo"><img src="pic/4nppbggouzejh.png" alt="logo"></div>
		<!--				<div class="logo"><a href="">Kino</a></div>-->
		<nav>
			<div class="nav-link"><a class="nav-link" href="index.php">Главная</a></div>
			<div class="nav-link"><a class="nav-link" href="https://google.com">Goooooogle</a></div>
			<div class="nav-link"><a class="nav-link" href="index.php">Сайт Костика</a></div>
		</nav>
		
		<main>
			<article>

				<?php
		for ($i = 0; $i < count($filmRows); $i++) {
			
//			echo $filmRows[$i]["name"];
		?>
				<div class="main-film-wrapper">
					<!--					<img src="pic/1%20(1).png" alt="Логотип1">-->
					<!--					<img src="pic/3little.jpg" alt="Постер1">-->
					<!--					<img <?php echo $filmRows[$i]["logo"];?>>-->
					<h3><?php echo $filmRows[$i]["name"];?></h3>
					<p>
						<?php echo $filmRows[$i]["description"];?>
					</p>
					<div class="main-film-link-wrapper">
						<a href="<?php echo "film.php?filmId=".$filmRows[$i]["id"] ?>">Подробнее</a>
					</div>
				</div>

				<?php
		}
		?>
			</article>
		</main>
	</div>
</body>

</html>
