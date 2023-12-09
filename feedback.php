<?php
    require "app/include/config.php"; // configuration
?>
<!DOCTYPE html>
<html>
    <?php // head
        $title = 'Обратная связь';
        require "app/include/head.php";
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
    <script>
        $(document).ready (function () { 
            $("#done").click (function () { 
                $('#messageshow').hide ();
                var name = $("#name").val ();
                var email = $("#email").val ();
                var subject = $("#subject").val ();
                var message = $("#message").val ();
                var fail = ""; if (name.length < 3) fail = "Имя не меньше 3 символов";
                else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) fail = "Вы ввели некорректный адрес эл. почты";
                else if (subject.length < 5) fail = "Слишком маленькая тема";
                else if (message.length < 25) fail = "Слишком маленькое сообщение";
                if (fail != "") {
                    $('#messageShow').html (fail + "<div class='clear'><br></div>");
                    $('#messageshow').show ();
                    return false; 
                    }
                $.ajax ({
                    url: 'ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name': name, 'email': email, 'subject': subject, 'message': message},
                    dataType: 'html',
                    success: function (data) {
                        $('#messageshow').html (data + "<div class='clear'><br></div>");
                        $('#messageShow').show (); 
                    }
                });
            });
        });
    </script>
   <?php 
        require "app/include/header.php"; // header
        require "app/include/link_bar.php"; // link_bar
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="feedback" class="text-center">
                    <h1 class="f28px">Напишите нам</h1>
                    <input type="text" name="name" id="name" placeholder="Имя"><br>
                    <input type="email" name="email" id="email" placeholder="Email"><br>
                    <input type="text" name="subject" id="subject" placeholder="Тема сообщения"><br>
                    <textarea name="message" id="message" placeholder="Введите ваше сообщение"></textarea><br>
                    <div id="messageshow"></div>
                    <button type="submit" name="done" id="done" class="f18px" value="Отправить">Отправить</button>
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