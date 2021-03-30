<?php
    session_start();
    // Генерируем случайное число.
<<<<<<< HEAD
    $rand = mt_rand(1000, 9999);


=======
    $rand = mt_rand(1000, 99999);
 
>>>>>>> dc8eafd6d90f83003bf76c0611699d9701f5f401
    // Сохраняем значение переменной  $rand ( капчи ) в сессию
    $_SESSION["rand"] = $rand;

    //создаём новое черно-белое изображение
<<<<<<< HEAD
    $im = imageCreateTrueColor(90,50);

=======
    $im = imageCreateTrueColor(100,50);
 
>>>>>>> dc8eafd6d90f83003bf76c0611699d9701f5f401
    // Указываем белый цвет для текста
    $c = imageColorAllocate($im, 255, 255, 255);

    // Записываем полученное случайное число на изображение
<<<<<<< HEAD
    imageTtfText($im, 20, -10, 10, 30, $c, __DIR__."/verdana.ttf", $rand);

=======
    imageTtfText($im, 20, -1, 10, 30, $c, __DIR__."/verdana.ttf", $rand);
 
>>>>>>> dc8eafd6d90f83003bf76c0611699d9701f5f401
    header("Content-type: image/png");

    // Выводим изображение
    imagePng($im);

    //Освобождаем ресурсы
    imageDestroy($im);
?>
