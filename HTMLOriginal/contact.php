<?php

/*
 * Script for sending E-Mail messages.
 * 
 * Note: Please edit $sendTo variable value to your email address.
 * 
 */

// please change this to your E-Mail address
$sendTo = "khomutov86@gmail.com";

$action = $_POST['action'];
if ($action == 'contact') {
    $inquiry = $_POST['form_data'][0]['inquiry'];
    $name = $_POST['form_data'][0]['name'];
    $lastname = $_POST['form_data'][0]['last_name'];
    $email = $_POST['form_data'][0]['email'];   
    $contact_message = $_POST['form_data'][0]['message'];

    if ($name == "" || $email == "" || $contact_message == "") {
        echo "Проблема при отправке E-Mail. Проверьте все поля на форме и попробуйте еще раз!";
        exit();
    }
    
    $message = 'Тема сообщения: ' . $inquiry . "\r\n"
                        . "Имя: " . $name . "\r\n"
                        . "Фамилия: " . $lastname . "\r\n"
                        . "Почта: " . $email . "\r\n"
                        . "Сообщение: " . $contact_message . "\r\n";
} else if ($action == 'newsletter') {
    $email = $_POST['form_data'][0]['Email'];
    $name = $email;

    if ($email == "") {
        echo "Проблема при отправке E-Mail. Проверьте все поля на форме и попробуйте еще раз!";
        exit();
    }
    $subject = 'Newsletter Subscribe!';
    $message = 'Newsletter Subscribe for User: ' . $email;
} else if ($action == 'negabarit') {
    $modalName = $_POST['form_data'][0]['modalName'];
    $modalEmail = $_POST['form_data'][0]['modalEmail'];
    $modalPhone = $_POST['form_data'][0]['modalPhone'];
    $modalMessage = $_POST['form_data'][0]['modalMessage'];
    $date = $_POST['form_data'][0]['date'];
    $type = $_POST['form_data'][0]['type'];

    $inputWedth = $_POST['form_data'][0]['inputWedth'];
    $inputLanding = $_POST['form_data'][0]['inputLanding'];
    // you can change default Subject for comment form here
    $subject = 'New comment!';
    
    if ($modalName == "" || $modalEmail == "" || $modalMessage == ""  || $type == ""  || $date == "") {
        echo "Проблема при отправке E-Mail. Проверьте все поля на форме и попробуйте еще раз!";
        exit();
    }
    
    $message =   "Адрес погрузки/выгрузки: " . $modalName . "\r\n"
                . "Электронная почта: " . $modalEmail . "\r\n"
                . "Телефон: " . $modalPhone . "\r\n"
                . "Ориентировачная дата перевозки: " . $date . "\r\n"
                . "Тип груза: " . $type . "\r\n"
                . "Необходима погрузка/выгрузка: " . $inputLanding . "\r\n"
                . "Груз весит более 38 тонн   : " . $inputWedth . "\r\n"
                . "Подробности с формы: " . $modalMessage . "\r\n";
} else if ($action == 'formCustomInfo') {
      $modalEmail = $_POST['form_data'][0]['modalEmail'];
      $modalPhone = $_POST['form_data'][0]['modalPhone'];
      $modalAddress = $_POST['form_data'][0]['modalAddress'];
      $modalMessage = $_POST['form_data'][0]['modalMessage'];

      $inputDesc = $_POST['form_data'][0]['inputDesc'];
      $inputWeight = $_POST['form_data'][0]['inputWeight'];
      $inputCost = $_POST['form_data'][0]['inputCost'];

      $inputContractCheckbox = $_POST['form_data'][0]['inputContractCheckbox'];
      $inputCostTransferCheckbox = $_POST['form_data'][0]['inputCostTransferCheckbox'];
      // you can change default Subject for comment form here
      $subject = 'New comment!';

      if ($modalEmail == "" || $modalPhone == "" || $modalAddress == ""  || $inputWeight == ""  || $inputCost == "" || $inputDesc == "") {
          echo "Проблема при отправке E-Mail. Проверьте все поля на форме и попробуйте еще раз!";
          exit();
      }

      $message =
                    "Место отгрузки/доставки : " . $modalAddress . "\r\n"
                  . "Электронная почта: " . $modalEmail . "\r\n"
                  . "Телефон: " . $modalPhone . "\r\n"
                  . "Дополнительная информация: " . $modalMessage . "\r\n"


                  . "Описание товара: " . $inputDesc . "\r\n"
                  . "Вес груза нетто: " . $inputWeight . "\r\n"
                  . "Стоимость груза: " . $inputCost . "\r\n"

                  . "Поставка на Ваш контракт   : " . $inputContractCheckbox . "\r\n"
                  . "Стоимость международной транспортировки включена в стоимость товара: " . $inputCostTransferCheckbox . "\r\n";
  } else if ($action == 'comment') {
    $name = $_POST['form_data'][0]['Name'];
    $email = $_POST['form_data'][0]['Email'];
    $message = $_POST['form_data'][0]['Message'];
    // you can change default Subject for comment form here
    $subject = 'New comment!';

    if ($name == "" || $email == "" || $message == "") {
        echo "Проблема при отправке E-Mail. Проверьте все поля на форме и попробуйте еще раз!";
        exit();
    }

    $message = "Name: " . $name . "\r\n"
        . "Email: " . $email . "\r\n"
        . "Message: " . $message . "\r\n";
} else if ($action == 'driverApp'){
    $driver_name = $_POST['form_data'][0]['driver_name'];
    $driver_last_name = $_POST['form_data'][0]['driver_last_name'];
    $driver_birth_date = $_POST['form_data'][0]['date_of_birth'];
    $driver_type = $_POST['form_data'][0]['driver_type'];
    $phone_number = $_POST['form_data'][0]['phone_number'];
    $driver_experience = $_POST['form_data'][0]['driver_experience'];

    if ($driver_name == "" || $driver_last_name == "" || $driver_experience == "") {
        echo "Проблема при отправке E-Mail. Проверьте все поля на форме и попробуйте еще раз!";
        exit();
    }
    
    $message = "Имя: " . $driver_name . "\r\n"
            . "Фамилия: " . $driver_last_name . "\r\n"
            . "Дата рождения: " . $driver_birth_date . "\r\n"
            . "Должность: " . $driver_type . "\r\n"
            . "Телефон: " . $phone_number . "\r\n"
            . "Опыт работы: " . $driver_experience . "\r\n";
} else if ($action == 'shipping') {
    $tracking_origin = $_POST['form_data'][0]['origin_zip'];
    $tracking_destination = $_POST['form_data'][0]['destination_zip'];
    $tracking_weight = $_POST['form_data'][0]['total_weight'];
    $tracking_packages = $_POST['form_data'][0]['number_of_packages'];
    $tracking_email = $_POST['form_data'][0]['email'];
    
    if ($tracking_origin == "" || $tracking_destination == "" || $tracking_email == "") {
        echo "Проблема при отправке E-Mail. Проверьте все поля на форме и попробуйте еще раз!";
        exit();
    }
    
    $message = "Origin ZIP: " . $tracking_origin . "\r\n"
            . "Destination ZIP: " . $tracking_destination . "\r\n"
            . "Total weight: " . $tracking_weight . "\r\n"
            . "Number of packages: " . $tracking_packages . "\r\n"
            . "Email: " . $tracking_email . "\r\n"; 
} else if ($action == 'callForm'){
       $pnone = $_POST['form_data'][0]['phone'];
       $comment = $_POST['form_data'][0]['message'];


       $message = "pnone: " . $pnone . "\r\n"
               . "comment: " . $comment . "\r\n";
 }

$headers = 'From: ' . $name . '<' . $email . ">\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

if (mail($sendTo, $subject, $message, $headers)) {
    echo "Сообщение успешно отправлено.";
} else {
    echo "There was problem while sending E-Mail.";
}
?>
