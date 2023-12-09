<?php // configuration
    require "app/include/config.php";
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Регистрация';
    	require "app/include/head.php";
    ?>
<body>
    <?php 
        require "app/include/header.php"; // header
        require "app/include/link_bar.php"; // link bar
        require "app/include/alarm.php"; // alarm
    ?>
	<div class="container">
		<div class="row">
			<div class="col">
			    <div id="reg" class="text-center">
                    <form id="form__reg" method="POST">
                        <h1 class="f28px">Регистрация</h1>
                <?php    
                    if(isset($_POST['submit'])){
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                        $password2 = $_POST['password2'];
                        $email = $_POST['email'];
                        if(!empty($login) && !empty($email) && !empty($password) && !empty($password2)){
                             $query = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login'");
                            if($password != $password2){
                                $alert = "Пароли не совпадают";

                            } else if(strlen($password) <3){
                                $alert = "Пароль не должны содержать меньше, чем 3 символов";
                            } else if(mysqli_num_rows($query) == 0 ){
                                mysqli_query($connection, "INSERT INTO `users` (login, email, password) VALUES ('$login', '$email', '$password')");
                            } else if(!(strpos($email, '@'))){
                                $alert = 'Вы не корректно ввели свой email!';
                            }
                                $alert = 'Вы зарегистрированы';

                            } else{
                                $alert = 'Такой логин уже существует';
                            }

                        } else{
                            $alert = 'Заполните все поля';
                        }
                        mysqli_close($connection); 
                 ?>
                        <input name="login" type="text" placeholder="Введите логин">
                        <br>
                        <input name="email" type="email" placeholder="Введите email">
                        <br>
                        <input name="password" type="password" placeholder="Введите пароль">
                        <br>
                        <input name="password2" type="password" placeholder="Подтвердите пароль">
                        <br>
                        <button name="submit" type="submit">Зарегистрироваться</button>
                        <p style="margin-top: 10px;"><a href="login.php">Уже зарегистрированы?</a></p>
                        <p style="color: #bb1018;"><?php echo $alert; ?></p>
                    </form>
			    </div>
			</div>
		</div>
	</div>
	<?php 
		require "app/include/footer.php"; // footer
		require "app/include/scripts.php"; // scripts
	?>
</body>
</html>