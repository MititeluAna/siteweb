<?php
session_start();

	include("connection.php");
	include("functions.php");
	
     
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//ceva a fost postat
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password) &&  !is_numeric($user_name))
		{
			// salvam in baza de date

			$user_id = random_num(20);
			$query = "insert into utilizatori (user_id, user_name, password) values ('$user_id', '$user_name','$password')";

			mysqli_query($con ,$query);
			

			header("Location:login.php");
			die;

		}
		else
		{
			echo "Vă rugăm să introduceți câteva informații valide";
		}
	}

?>

<!DOCTYPE html>
<html lang ="ro">
<head > 
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inscriere</title>
</head>

<body bgcolor = "ivory">

	<style type="text/css">
	 #text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;

		}

		#button{

		padding: 10px;
		width: 100px;
		color: black;
		background-color: #3894B2;
		border: none;
		cursor: pointer;
		border-radius: 5px;
		text-decoration: none;
		font-size: 20px;
		display:inline-block;
          text-align: center;

		}
		#button:hover{
		background-color: white;
		}

		#box{
		margin-left: 500px;
		position: relative;
		background-color: #0F52BA;
		margin-top: 200px;
		text-align: center;
		font-size: 25px;
		width: 500px;
		height:300px;
		padding: 20px;
		border-radius: 10px;

		}

	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 30px; margin: 10px; color: white;">Inscriere</div>
			<input id="text" type="text" name="user_name"> <br><br>
			<input id="text" type="password" name="password"> <br><br>
			<input id="button" type="submit" value="Inscriere"> <br><br>

			<a id="button" href="login.php">Logare</a>
		</form>
	</div>

</body>
</html>