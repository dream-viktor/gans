<?php
    //Запускаем сессию
    session_start();
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <title>ХИЩНИК</title>
  <script type="text/javascript">
    $(document).ready(function(){
        "use strict";
        //================ Проверка email ==================

        //регулярное выражение для проверки email
        var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
        var mail = $('input[name=email]');

        mail.blur(function(){
            if(mail.val() != ''){

                // Проверяем, если введенный email соответствует регулярному выражению
                if(mail.val().search(pattern) == 0){
                    // Убираем сообщение об ошибке
                    $('#valid_email_message').text('');

                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }else{
                    //Выводим сообщение об ошибке
                    $('#valid_email_message').text('Не правильный Email');

                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);
                }
            }else{
                $('#valid_email_message').text('Введите Ваш email');
            }
        });

        //================ Проверка длины пароля ==================
        var password = $('input[name=password]');

        password.blur(function(){
            if(password.val() != ''){

                //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                if(password.val().length < 6){
                    //Выводим сообщение об ошибке
                    $('#valid_password_message').text('Минимальная длина пароля 6 символов');

                    // Дезактивируем кнопку отправки
                    $('input[type=submit]').attr('disabled', true);

                }else{
                    // Убираем сообщение об ошибке
                    $('#valid_password_message').text('');

                    //Активируем кнопку отправки
                    $('input[type=submit]').attr('disabled', false);
                }
            }else{
                $('#valid_password_message').text('Введите пароль');
            }
        });
    });
</script>
  </head>
  <body>

 <section id="header_top">
   <div class="container">
    <div class="row " >
                 <div class="header-logo  ">
                           <a href="#" >
                             <img src="C:\xampp\htdocs\wp-content\themes\mai\img\logo.jpeg"  alt="" >
                           </a>

                 </div>
                 <div class="header-centr ">
                           <div class="row">
                             <p class="col ">КУПИ ПРОДАЙ</p>

                           </div>
                           <div class="row">
                             <p class="col">Coding on steroid</p>
                           <p class="col">Stop hiring engineers</p>
                           </div>

                 </div>
                 <div class="header-user  ">
                   <p>Здравствуйте, Гость</p>
                   <div class="">

                     <a href="index.php">Вход</a> или <a href="reg.php">Регистрация</a>
                   </div>
                 </div>
    </div>
    <div class="row zakon">
      <p>Внимание! Все обьявления поданные сотвествуют закону  ФЗ-150 "Об оружии" от 13.12.1996 <a href="">подробнее</a></p>

    </div>
   </div>
 </section>

<section id=navbar>
  <div class="container  ">
          <div class="row ">

                <span class="icon"  href="#" style="color:white;font-weight: bold;" >МЕНЮ</span>
                <a class="header_menu" href="#">ОРУЖИЕ</a>
                <a class="header_menu" href="#">ПАТРОНЫ</a>
                <a class="header_menu" href="#">ЭКИПИРОВКА</a>
                <a class="header_menu" href="#">ОПТИКА</a>
                <a class="header_menu" href="#">НОЖИ</a>
                <a class="header_menu" href="#">ПНЕВМАТИКА</a>
                <a class="header_menu" href="#">ОРУЖИЕ САМООБОРОНЫ</a>
                <a class="header_menu" href="#">КУПЛЮ</a>
            </nav>



    </div>
</section>

     <section id=poisk>
       <div class="container">
                    <div class="row">Быстрый поиск:
                        <input class="" type="text"  placeholder="Найти например МЦ 2112"  >
                        <button class="button " type="button" >Найти</button>
                        <span class="">
                        <a>По калибрам:</a>
                        <input class="multiple" href="#"></input>
                        <a class="narez" href="#">12</a>
                        <a class="narez" href="#">12</a>
                        <a class="narez"href="#">12</a>
                        </span>
                        <button class="button btn-toggle " type="button" data-toggle="collapse" data-target="#poisk-filter" aria-expanded="false" aria-controls="poisk-filter">расширенный поиск</button>
                    </div>
       </div>
    </section>


              <script type="text/javascript">
                      $(function () {
                           $(".btn-toggle").click(function () {
                                  if($(".btn-toggle").text()=="расширенный поиск"){
                                      $(".btn-toggle").text("скрыть поиск");
                                  }
                                  else {
                                      $(".btn-toggle").text("расширенный поиск");
                                  }
                              });
                        });
                  $(document).ready(function(){
                  	$(".icon").click(function(){
                  		$(".header_menu").toggleClass("click");
                      return false;
                  	});
                  });

              </script>











     <section id="poisk-filter" class="collapse">
       <div class="container">
         <div class="row ">

                  <div class="col-md-6">
                      <div class="row mb-4">
                        <input class="col m-2"type="text" name="dfdfd" placeholder="Введите название например: ИЖ-27е" value="">
                        <button class="col-auto m-2" type="button " name="button">sdsd</button>
                        <div class="w-100"></div>
                        <input class="col-3 m-2" type="number" name="цена" placeholder="цена от" value="">
                        <input class="col-3 m-2" type="number" name="ring" placeholder="цена до" value="">
                        <select class="col-auto m-2"placeholder="Введите название например: ИЖ-27е" >
                           <option >Состояние</option>
                           <option >Пункт 2</option>
                        </select>

                      </div>




                  </div>
                  <div class="col-md-6">
                       <select class="" >
                          <option >Пункт 1</option>
                          <option >Пункт 2</option>
                       </select>
                       <input class="" type="password" name="ring" value="ring">

                       <input type="range" name="ring" value="ring">
                       <input type="multiple" name="ring" value="ring">

                       <input type="datetime-local" name="ring" value="ring">
                       <input type="password" name="ring" value="ring">
                  </div>
               </div>
         </div>
     </section>
