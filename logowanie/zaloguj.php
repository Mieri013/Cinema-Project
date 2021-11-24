<?php 

session_start();

require_once "conncet.php";

$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0)
{
	echo "Error ".$polaczenie->connect_errno;
}else{
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];

	$mysql="SELECT * FROM uzytkownicy WHERE user='$login' AND password='$haslo'";

	if ($rezultat= @$polaczenie->query($mysql)) 
	{

		$ilu_userow = mysqli_num_rows($rezultat);
		if($ilu_userow==1)
		{
			$wiersz = $rezultat->fetch_assoc();
			$user = $wiersz['user'];

			$rezultat->free_result();
			header('Location: glowna/index.html');
		}else{

		}

	}
	$polaczenie->close();
}




?>