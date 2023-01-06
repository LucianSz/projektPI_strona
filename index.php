<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: sklep_internetowy.php');
		exit();
	}

?>





<!DOCTYPE html>
<html lang="pl">
<head>
	<title>login</title>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
   <div class="box">
    <div class="container">
        <div class="top">
            <header>Login</header>
        </div>
        <form action="zaloguj.php" method="post">
        <div class="input-field">
            <input type="text" class="input" name="login" placeholder="Login" id="">
        </div>
        <div class="input-field">
            <input type="Password" class="input" name="haslo" placeholder="Password" id="">
        </div>
		
        <div class="input-field">
            <input type="submit" class="submit" value="Sign In" id="">
       
			<a href="rejestracja.php"><span>Register here!</span></a>
        </div> 
         </form>
    </div>
</div>  
</body>
</html>






	
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>