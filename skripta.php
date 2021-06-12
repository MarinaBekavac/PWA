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

				 ?>

			</nav>
		</div>

	</header>

	<?php

	if(isset($_POST['insertArticle']))
	{
		include('connect.php');

		$picture = $_FILES['photo']['name'];
		$title=$_POST['title'];
		$about=$_POST['about'];
		$content=$_POST['content'];
		$category=$_POST['category'];
		$date=date('d.m.Y.');
		if(isset($_POST['archive'])){
		 $archive=1;
		}else{
		 $archive=0;
		}
		$target_dir = 'img/'.$picture;
		move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);

		$query = "INSERT INTO articles (datum, naslov, sazetak, tekst, slika, kategorija,
		arhiva ) VALUES ('$date', '$title', '$about', '$content', '$picture',
		'$category', '$archive')";

		$result = mysqli_query($dbc, $query) or die('Error querying databese on insert.');

		mysqli_close($dbc);

		include('displayArticle.php');
	}

	if(isset($_POST['deleteArticle']))
	{
		include('connect.php');
		$id = $_POST['id'];

		$query="DELETE FROM articles WHERE id=$id";
		$result = mysqli_query($dbc, $query) or die('Error querying databese on delete.');

	}


	if(isset($_POST['updateArticle']))
	{
		include('connect.php');

		$title=$_POST['title'];
		$about=$_POST['about'];
		$content=$_POST['content'];
		$category=$_POST['category'];
		$date=date('d.m.Y.');
		if(isset($_POST['archive'])){
		 $archive=1;
		}else{
		 $archive=0;
		}
		$id = $_POST['id'];
		$picture = $_FILES['photo']['name'];
		if($picture==null)
		{
			$query="SELECT slika FROM articles WHERE id=$id";
			$result = mysqli_query($dbc, $query) or die('Error querying databese on slika fetch.');
			$row=mysqli_fetch_array($result);
			$picture=$row['slika'];
		}
		else{
			$target_dir = 'img/'.$picture;
			move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);
		}

		$query = "UPDATE articles
		SET naslov='$title',sazetak='$about',
		tekst='$content',slika='$picture',kategorija='$category',arhiva='$archive'
		WHERE id=$id";

		$result = mysqli_query($dbc, $query) or die('Error querying databese on update');

		mysqli_close($dbc);

		include('displayArticle.php');
	}


	 ?>




</body>
</html>
