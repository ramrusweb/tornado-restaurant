<?php // configuration
	require "app/include/config.php";
		if(isset($_POST['submit'])){
			$login = $_POST['login'];
			$password = $_POST['password'];
			if(!empty($login) && !empty($password)){
				$user = mysqli_query($connection,"SELECT * FROM `users` WHERE `login` = '$login' AND `password`= '$password'");
				if (mysqli_num_rows($user) == 1 ){
					$row = mysqli_fetch_assoc($user);
					setcookie('id', $row['id']);
					setcookie('login', $row['login']);
					header('Location:' . 'http://tornado/cabinet.php');
				} else{
					$alert = 'Такого аккаунта не существует!';
				}
			} else{
				 $alert = 'Заполните все поля!';
			}
			mysqli_close($connection);
		}
 ?>
<!DOCTYPE html>
<html>
    <?php
        $title = 'Авторизация';
    	require "app/include/head.php";
    ?>
<body>
	<?php 
		require "app/include/header.php"; //header
        require "app/include/link_bar.php"; //link bar
        require "app/include/alarm.php"; //alarm
    ?>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php  
		          if(empty($_COOKIE['login']))
                  {
		          ?>
                <div id="auth">
                    <form method="POST" class="form__auth" class="text-center">
                        <h1 class="f28px">Авторизация</h1>
                        <input type="text" name="login" id="login" placeholder="Введите логин"><br>
                        <input type="password" name="password" id="password" placeholder="Введите пароль"><br>
                        <button name="submit" type="submit">Войти!</button><br>
                        <p class="auth__alert"><a href="signup.php">Зарегистрироваться</a> &#124; <a href="restore.php">Забыли пароль?</a></p>
                        <p class="f16px"><?php echo $alert; ?></p>
                    </form>
                </div>
			 </div>
			<?php 
			     }
			else
            {
			echo 'Вы уже авторизованны!';
			?>
			 <a href="http://tornado/logout.php" id="exit">Выйти?</a> 
			 <?php
            }
		      ?>
        </div>
    </div>
    <?php 
        require "app/include/footer.php"; //footer
		require "app/include/scripts.php"; // scripts
	?>
</body>
</html>