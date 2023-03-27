<? php 

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $login = htmlspecialchars($login);
    $pass = htmlspecialchars($pass);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login);
    $pass = urldecode($pass);
    $email = urldecode($email);
    $tel = urldecode($tel);

    $login = trim($login);
    $pass = trim($pass);
    $email = trim($email);
    $tel = trim($tel);


    // send 

    if(mail("zsokol20@gmail.com",
            "Новое письмо с сайта",
            "Логин: " .$login."\n".
            "Логин: " .$pass."\n".
            "Логин: " .$email."\n".
            "Логин: " .$tel,
            "From: no-reply@mydomain.ua \r\n")
        ){
            echo ("Письмо успешно отправленно");
        }
        else{
            echo ("Есть ошибки в форме");
        }
?>