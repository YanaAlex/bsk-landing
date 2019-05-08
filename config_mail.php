<?php 

// Укажите адрес, на который Вы хотите получать письма 
$mymail = 'Aleksandrovayana@mail.ru';

// Укажите тему письма 
$topic = 'Письмо из контактной формы';


// Сообщение о том, что должны быть заполнены все поля
$warning = '<div style = "width: 400px; margin: 0 auto; font-family: Verdana, Arial, Helvetica, sans-serif; border-radius: 9px; -moz-border-radius: 9px; background: #FFFFFF;padding-left:12px; padding-right:12px; border: 1px solid #DFDFDF; color: #000000; text-align:center"><h2 style = "font-size: 16px; color: #000000">Для отправки сообщения нужно заполнить все поля.</h2><p style = "font-size:14px"><a href = "javascript:history.back();">Вернуться назад</a></p></div>';


// Сообщение о том, что некорректно введен E-mail адрес
$email_warning = '<div style = "width: 400px; margin: 0 auto; font-family: Verdana, Arial, Helvetica, sans-serif; border-radius: 9px; -moz-border-radius: 9px; background: #FFFFFF;padding-left:12px; padding-right:12px; border: 1px solid #DFDFDF; color: #000000; text-align:center"><h2 style = "font-size: 16px; color: #000000">Проверьте правильность ввода Email-адреса!</h2><p style = "font-size:14px"><a href = "javascript:history.back();">Вернуться назад</a></p></div>';


// Сообщение об успешной отправке письма
$success = '<div style = "width: 400px; margin: 0 auto; font-family: Verdana, Arial, Helvetica, sans-serif; border-radius: 9px; -moz-border-radius: 9px; background: #FFFFFF;padding-left:12px; padding-right:12px; border: 1px solid #DFDFDF; color: #000000; text-align:center"><h2 style = "font-size: 16px; color: #00BF00">Письмо успешно отправлено!</h2><p style = "font-size:14px">Я отвечу на него в течение 24 часов.</p></div>';


// Сообщение об ошибке при отправке письма
$fail = '<div style = "width: 400px; margin: 0 auto; font-family: Verdana, Arial, Helvetica, sans-serif; border-radius: 9px; -moz-border-radius: 9px; background: #FFFFFF;padding-left:12px; padding-right:12px; border: 1px solid #DFDFDF; color: #000000; text-align:center"><h2 style = "font-size: 16px; color: #000000">Сообщение не было отправлено. Пожалуйста, сообщите об этом администратору</h2></div>';


// Сообщение о попытке получить доступ к файлу-обработчику напрямую
$direct_access = '<div style = "width: 400px; margin: 0 auto; font-family: Verdana, Arial, Helvetica, sans-serif; border-radius: 9px; -moz-border-radius: 9px; background: #FFFFFF;padding-left:12px; padding-right:12px; border: 1px solid #DFDFDF; color: #000000; text-align:center"><h2 style = "font-size: 16px; color: #000000">Вы обратились к файлу напрямую, не предав нужных параметров.</h2></div>'; 


// Адрес, на который произойдет переадресация после успешной отправки письма
$url = 'http://vashsite.ru';

?>