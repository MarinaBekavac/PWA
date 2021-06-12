<!DOCTYPE html>

<head>
	<title>PWA vježba</title>

    <meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style.css">

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
					include('connect.php');
					$id=$_GET['id'];
					$query_articles="SELECT * from articles WHERE id='".$id."' AND arhiva=0";
					$result_articles=mysqli_query($dbc,$query_articles);
					$row=mysqli_fetch_array($result_articles);

				 ?>

			</nav>
		</div>

	</header>


		  <section class="newArticle" role="main">
				 <div class="row">
						 <p class="category">
							 <?php
						 			echo $row['kategorija'];
						 		?>
					 		</p>
						 	<h1 class="title">
								<?php
						 			echo $row['naslov'];
						 		?>
					 		</h1>
						 <!--	<p>AUTOR:</p>-->
						 	<p>OBJAVLJENO:
							<?php
								echo $row['datum'];
							?>
							</p>
				 </div>

					 <section class="slika">
							 <?php
								$photo=$row['slika'];
								echo "<img src='img/".$photo."'/>";
							 ?>
					 </section>


					 <section class="about">
						 <p>
							 <?php
							 		echo $row['sazetak'];
							 ?>
						 </p>
			 		</section>

					 <section class="sadrzaj">
						 <p>
							 <?php
									echo $row['tekst'];
							 ?>
						 </p>
					 </section>

		 </section>


</body>
</html>
