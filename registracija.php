<!DOCTYPE html>
<head>
	<title>PWA vježba</title>

    <meta charset="UTF-8" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
		rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="loginFormStyle.css">

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


		$registriranKorisnik = '';

		if(isset($_POST['gumb']))
		{
			session_start();
			$ime = $_POST['ime'];
			$prezime = $_POST['prezime'];
			$user = $_POST['user'];
			$lozinka = $_POST['lozinka'];
			$hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
			$razina = 0;
			$admin = "";

			include('connect.php');

			$sql = "SELECT username FROM users WHERE username = ?";
			$stmt = mysqli_stmt_init($dbc);

			if (mysqli_stmt_prepare($stmt, $sql))
			{
				 mysqli_stmt_bind_param($stmt, 's', $user);
				 mysqli_stmt_execute($stmt);
				 mysqli_stmt_store_result($stmt);
			 }

			if(mysqli_stmt_num_rows($stmt) > 0)
			{
					 echo 'Korisničko ime već postoji!<br/>';
					 $sql = "SELECT username, password,razina FROM users WHERE username = ?";
			 		 $stmt = mysqli_stmt_init($dbc);

			 		 if (mysqli_stmt_prepare($stmt, $sql))
			 		 {
			 			 mysqli_stmt_bind_param($stmt, 's', $user);
			 			 mysqli_stmt_execute($stmt);
			 			 mysqli_stmt_store_result($stmt);
			 		 }
			 		 mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, $levelKorisnika);
			  	 	mysqli_stmt_fetch($stmt);
						if (password_verify($lozinka, $lozinkaKorisnika) && mysqli_stmt_num_rows($stmt) > 0)
						{
							echo "Uspjesna prijava<br/>";
									$uspjesnaPrijava = true;

									if($levelKorisnika == 1)
								 {
									 $admin = true;
									}
									else
									{
									 $admin = false;
									}

									$_SESSION['$uspjesnaPrijava'] = true;
						 			$_SESSION['$admin'] = $admin;
									header("Location: https://localhost/predavanjeTestZadatci/projekt/administrator.php");
									echo "Prijava".$uspjesnaPrijava."<br/>admin".$admin."<br/>";
				 		}
						else
						{
				 		 			$_SESSION['$uspjesnaPrijava'] = false;
									$_SESSION['$admin'] = false;
									echo "Neuspjesna prijava";
						}

						$_SESSION['username'] = $imeKorisnika;
						$_SESSION['razina'] = $levelKorisnika;

			}
			else
			{
				$sql = "INSERT INTO users(ime, prezime,username, password, razina)VALUES (?, ?, ?, ?, ?)";
				 $stmt = mysqli_stmt_init($dbc);
				 if (mysqli_stmt_prepare($stmt, $sql))
				 {
					 mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $user, $hashed_password, $razina);
					 mysqli_stmt_execute($stmt);
					 $registriranKorisnik = true;
					 $_SESSION['$uspjesnaPrijava'] = true;
					 $_SESSION['$admin'] = false;
					 $_SESSION['username'] = $user;
					 $_SESSION['razina'] = 0;
					 header("Location: https://localhost/predavanjeTestZadatci/projekt/administrator.php");

				 }
			}


			mysqli_close($dbc);



		}

			if($registriranKorisnik == true)
			{
	 			echo '<p>Korisnik je uspješno registriran!</p>';
				$_SESSION['username'] = $user;
				$_SESSION['razina'] = $razina;
				$_SESSION['password'] = $lozinka;
				header('Location:administrator.php');
	 		}
			else {

	 ?>

	 			<p style="text-align:center"><a href="login.php">Login</a> or register:</p>
				<form action="registracija.php" name="prijava" method="post">



					<label for="ime">Ime</label>
					<input type="text" name="ime" id="ime"/><br/>
					<span id="porukaIme" class="error"></span><br/>

					<label for="prezime">Prezime</label>
					<input type="text" name="prezime" id="prezime"/><br/>
					<span id="porukaPrezime" class="error"></span><br/>

					<label for="user">Username</label>
					<input type="text" name="user" id="user"/><br/>
					<span id="porukaUsername" class="error"></span><br/>

					<label for="lozinka">Lozinka</label>
					<input type="password" name="lozinka" id="password"/>
					<span id="porukaPassword" class="error"></span><br/>

					<label for="password1">Ponovite lozinku</label>
					<input type="password" name="password1" id="password1"/>
					<span id="porukaPassword1" class="error"></span><br/>

					<button type="submit" name="gumb" id="gumb">Prijava</button>



			</form>

			<script src="loginCheck.js"></script>

		<?php
				}

		 ?>

</body>
</html>
