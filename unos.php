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

				 ?>

			</nav>
		</div>

	</header>

	<section class="sectionInput">
		 <form action="skripta.php" method="POST"  enctype="multipart/form-data">
				 <div class="form-item">
				 		<label for="title">Naslov vijesti</label>
	 					 <span id="porukaTitle" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<input type="text" name="title" id="title" class="form-field-textual">
				 </div>
			 	</div>


				 <div class="form-item">
				 		<label for="about">Kratki sadržaj vijesti (od 10 do 100 znakova)</label>
	 					 <span id="porukaAbout" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<textarea name="about" id="about" cols="30" rows="10" class="form-field-textual"></textarea>
				 </div>
			 	</div>


				 <div class="form-item">
				 		<label for="content">Sadržaj vijesti</label>
	 					 <span id="porukaContent" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"></textarea>
				 </div>
			 	</div>


				 <div class="form-item">
				 		<label for="photo">Slika: </label>
	 					 <span id="porukaPhoto" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<input type="file" accept="image/jpg,image/gif"	class="input-text" name="photo" id="photo"/>
				 </div>

				 </div>


				 <div class="form-item">
				 		<label for="category">Kategorija vijesti:</label>
	 					 <span id="porukaCategory" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<select name="category" id="category" class="form-field-textual">
							<?php

							$selectQuery = "SELECT * FROM kategorije";
							$result_query=mysqli_query($dbc,$selectQuery);

							while($rowQuery=mysqli_fetch_array($result_query))
							{
									echo "<option value='".$rowQuery['naziv']."' >".$rowQuery['naziv']."</option>";
							}

							 ?>
				 </select>
				 </div>
				 </div>


				 <div class="form-item">
				 		<label>Spremiti u arhivu:
				 <div class="form-field">
				 		<input type="checkbox" name="archive">
				 </div>
				 		</label>
				 </div>


				 <div class="form-item">
				 		<button type="reset" value="Poništi">Poništi</button>
			 			<button type="submit" name="insertArticle" value="Prihvati" id="send">Prihvati</button>
			 	</div>

		 </form>
	</section>


	  <script src="inputCheck.js"></script>



</body>
</html>
