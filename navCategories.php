<?php

include('connect.php');

$query="SELECT * FROM kategorije";

$result=mysqli_query($dbc,$query);

echo "<a href='login.php'>Log in</a>";

while($row=mysqli_fetch_array($result))
{
  echo "<a href='kategorija.php?category=".$row['naziv']."'>".$row['naziv']."</a>";
}

session_start();
if(isset($_SESSION['username']))
  if(strlen($_SESSION['username'])!=0 )
    echo " Welcome ".$_SESSION['username'];

mysqli_close($dbc);

 ?>
