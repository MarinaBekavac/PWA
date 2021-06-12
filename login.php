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


				<form action="login.php" name="prijava" method="post">


					<label for="user">Username</label>
					<input type="text" name="user" id="user"/><br/>
					<span id="porukaUsername" class="error"></span><br/>

					<label for="lozinka">Lozinka</label>
					<input type="password" name="lozinka" id="password"/>
					<span id="porukaPassword" class="error"></span><br/>


					<button type="submit" name="gumb" id="gumb">Prijava</button>

<?php

	if(isset($_POST['gumb']))
	{

		include("connect.php");

		$user = $_POST['user'];
		$lozinka = $_POST['lozinka'];
		$hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);

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

		if (password_verify($lozinka, $lozinkaKorisnika) /*&& mysqli_stmt_num_rows($stmt) > 0*/)
		{
			if($levelKorisnika == 1)
		 {
			 $admin = true;
			}
			else
			{
			 $admin = false;
			}

			$_SESSION['username'] = $imeKorisnika;
			$_SESSION['razina'] = $levelKorisnika;
			$_SESSION['$uspjesnaPrijava'] = true;
			$_SESSION['$admin'] = $admin;
			header("Location: https://localhost/predavanjeTestZadatci/projekt/administrator.php");
		}
		else {
			//header("Location: https://localhost/predavanjeTestZadatci/projekt/registracija.php");
			echo "<p style='text-align:center'>Neuspjesna prijava(krivi username ili lozinka)</p>";
		}


	}

 ?>

			</form>
<script src="loginCheck2.js"></script>


</body>
</html>
