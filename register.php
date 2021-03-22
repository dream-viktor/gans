<?php
    //Запускаем сессию
    session_start();

    //Добавляем файл подключения к БД
    require_once("database.php");

    //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
    $_SESSION["error_messages"] = '';

    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';
?>
<?php
    /*
        Проверяем была ли отправлена форма, то есть была ли нажата кнопка зарегистрироваться. Если да, то идём дальше, если нет, то выведем пользователю сообщение об ошибке, о том что он зашёл на эту страницу напрямую.
    */
    if(isset($_POST["btn_submit_register"]) && !empty($_POST["btn_submit_register"])){

      //Проверяем полученную капчу
//Обрезаем пробелы с начала и с конца строки
$captcha = trim($_POST["captcha"]);

if(isset($_POST["captcha"]) && !empty($captcha)){

  //Сравниваем полученное значение с значением из сессии.
  if(($_SESSION["rand"] != $captcha) && ($_SESSION["rand"] != "")){

      // Если капча не верна, то возвращаем пользователя на страницу регистрации, и там выведем ему сообщение об ошибке что он ввёл неправильную капчу.
      $error_message = "<p class='mesage_error'><strong>Ошибка!</strong> Вы ввели неправильную капчу </p>";

      // Сохраняем в сессию сообщение об ошибке.
      $_SESSION["error_messages"] = $error_message;

      //Возвращаем пользователя на страницу регистрации
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: ".$address_site."/reg.php");

      //Останавливаем скрипт
      exit();
  }


  /* Проверяем если в глобальном массиве $_POST существуют данные отправленные из формы и заключаем переданные данные в обычные переменные.*/

if(isset($_POST["first_name"])){

    //Обрезаем пробелы с начала и с конца строки
    $first_name = trim($_POST["first_name"]);

    //Проверяем переменную на пустоту
    if(!empty($first_name)){
        // Для безопасности, преобразуем специальные символы в HTML-сущности
        $first_name = htmlspecialchars($first_name, ENT_QUOTES);
    }else{
        // Сохраняем в сессию сообщение об ошибке.
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваше имя</p>";

        //Возвращаем пользователя на страницу регистрации
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/form_register.php");

        //Останавливаем скрипт
        exit();
    }


}else{
    // Сохраняем в сессию сообщение об ошибке.
    $_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле с именем</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/form_register.php");

    //Останавливаем скрипт
    exit();
}


if(isset($_POST["last_name"])){

    //Обрезаем пробелы с начала и с конца строки
    $last_name = trim($_POST["last_name"]);

    if(!empty($last_name)){
        // Для безопасности, преобразуем специальные символы в HTML-сущности
        $last_name = htmlspecialchars($last_name, ENT_QUOTES);
    }else{

        // Сохраняем в сессию сообщение об ошибке.
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Вашу фамилию</p>";

        //Возвращаем пользователя на страницу регистрации
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/form_register.php");

        //Останавливаем  скрипт
        exit();
    }


}else{

    // Сохраняем в сессию сообщение об ошибке.
    $_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле с фамилией</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/form_register.php");

    //Останавливаем  скрипт
    exit();
}


if(isset($_POST["email"])){

    //Обрезаем пробелы с начала и с конца строки
    $email = trim($_POST["email"]);

    if(!empty($email)){

        $email = htmlspecialchars($email, ENT_QUOTES);

        // (3) Место кода для проверки формата почтового адреса и его уникальности

    }else{
        // Сохраняем в сессию сообщение об ошибке.
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваш email</p>";

        //Возвращаем пользователя на страницу регистрации
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/form_register.php");

        //Останавливаем  скрипт
        exit();
    }

}else{
    // Сохраняем в сессию сообщение об ошибке.
    $_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле для ввода Email</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/form_register.php");

    //Останавливаем  скрипт
    exit();
}


if(isset($_POST["password"])){

    //Обрезаем пробелы с начала и с конца строки
    $password = trim($_POST["password"]);

    if(!empty($password)){
        $password = htmlspecialchars($password, ENT_QUOTES);

        //Шифруем папроль
        $password = md5($password."top_secret");
    }else{
        // Сохраняем в сессию сообщение об ошибке.
        $_SESSION["error_messages"] .= "<p class='mesage_error'>Укажите Ваш пароль</p>";

        //Возвращаем пользователя на страницу регистрации
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$address_site."/form_register.php");

        //Останавливаем  скрипт
        exit();
    }

}else{
    // Сохраняем в сессию сообщение об ошибке.
    $_SESSION["error_messages"] .= "<p class='mesage_error'>Отсутствует поле для ввода пароля</p>";

    //Возвращаем пользователя на страницу регистрации
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/form_register.php");

    //Останавливаем  скрипт
    exit();
}

// (4) Место для кода добавления пользователя в БД

}else{
  //Если капча не передана либо оно является пустой
  exit("<p><strong>Ошибка!</strong> Отсутствует проверечный код, то есть код капчи. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
}

    }else{

        exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
    }
?>
