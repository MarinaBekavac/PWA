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
					$query_articles="SELECT * from articles WHERE id='".$id."'";
					$result_articles=mysqli_query($dbc,$query_articles);
					$row=mysqli_fetch_array($result_articles);

				 ?>

			</nav>
		</div>

	</header>

	<section class="sectionInput">
		 <form action="skripta.php" method="POST"  enctype="multipart/form-data">
			 <input type="hidden" name="id" class="form-field-textual" value="<?php echo $row['id'];?>">
				 <div class="form-item">
				 		<label for="title">Naslov vijesti</label>
						<span id="porukaTitle" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<input type="text" name="title" id="title" value="<?php echo $row['naslov']; ?>"class="form-field-textual">
				 </div>
			 	</div>


				 <div class="form-item">
				 		<label for="about">Kratki sadržaj vijesti (od 10 do 100 znakova)</label>
	 					 <span id="porukaAbout" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<textarea name="about" id="about" cols="30" rows="10" class="form-field-textual">
							  <?php
									echo $row['sazetak'];
								 ?>
						</textarea>
				 </div>
			 	</div>


				 <div class="form-item">
				 		<label for="content">Sadržaj vijesti</label>
	 					 <span id="porukaContent" class="bojaPoruke"></span>
				 <div class="form-field">
				 		<textarea name="content" id="content" cols="30" rows="10" class="form-field-textual">
							<?php
								echo $row['tekst'];
							 ?>
						</textarea>
				 </div>
			 	</div>


				 <div class="form-item">
				 		<label for="photo">Slika: </label>
				 <div class="form-field">
				 		<input type="file" accept="image/jpg,image/gif"	class="input-text" name="photo" />
				 </div>
				 <br><img <?php echo "src='img/".$row['slika']."'"  ?> width=100px/>


				 </div>


				 <div class="form-item">
				 		<label for="category">Kategorija vijesti:</label>
				 <div class="form-field">
				 		<select name="category" id="" class="form-field-textual" >
							<?php

							$selectQuery = "SELECT * FROM kategorije";
							$result_query=mysqli_query($dbc,$selectQuery);

							while($rowQuery=mysqli_fetch_array($result_query))
							{
								if($row['kategorija']==$rowQuery['naziv'])
									echo "<option value='".$rowQuery['naziv']."' selected>".$rowQuery['naziv']."</option>";
								else
									echo "<option value='".$rowQuery['naziv']."' >".$rowQuery['naziv']."</option>";
							}

							 ?>

				 </select>
				 </div>
				 </div>


				 <div class="form-item">
				 		<label>Spremiti u arhivu:
				 <div class="form-field">
					 <?php

					 if($row['arhiva']==0)
					 	echo '<input type="checkbox" name="archive">';
					else
						echo '<input type="checkbox" name="archive" checked>';

					 ?>
				 </div>
				 		</label>
				 </div>


				 <div class="form-item">
				 		<button type="reset" value="Poništi">Poništi</button>
			 			<button type="submit" name="updateArticle" value="Prihvati" id="send">Prihvati</button>
						<button type="submit" name="deleteArticle" value="Izbrisi" >Izbriši</button>
			 	</div>

		 </form>
	</section>

	<script src="inputCheckAdmin.js"></script>

</body>
</html>
