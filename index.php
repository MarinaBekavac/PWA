<!DOCTYPE html>
<head>
	<title>PWA vježba</title>

    <meta charset="UTF-8" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
		rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


	<header>

		<img src="img/logo.png" alt="Logo" />
		<div class="nav-div">
			<nav>

								<a href="unos.php">Unos clanka</a>
								<a href="index.php">Main Page</a>
								<a href="administrator.php">Admin</a>

				<?php

					include('navCategories.php');

				 ?>

			</nav>
		</div>

	</header>


		  <?php

			include('connect.php');

			$query="SELECT * FROM kategorije";

			$result=mysqli_query($dbc,$query);


			while($row=mysqli_fetch_array($result))

			{

				echo "<section class='mainPageSection'>";

				echo "<h3>".$row['naziv']."</h3>";

						echo "<div class='container'>";

										echo "<div class='row' >";

											$query_articles="SELECT * from articles WHERE kategorija='".$row['naziv']."' AND arhiva=0 ORDER BY datum DESC LIMIT 4";
											$result_articles=mysqli_query($dbc,$query_articles);
											while($row=mysqli_fetch_array($result_articles))
											{
												echo "<div class='col-3'>";
												echo "<a href='clanak.php?id=".$row['id']."'>";
												echo "<article class='mainPageArticle' >";
												echo "<img src='img/".$row['slika']."'/>";
												echo "<h5>".$row['naslov']."</h5>";
												echo $row['sazetak'];
												echo "</article>";
												echo "</a>";
												echo "</div>";
											}
											echo "</div>";

						echo "</div>";

					echo "</section>";

			}

				mysqli_close($dbc);

			 ?>


</body>
</html>
