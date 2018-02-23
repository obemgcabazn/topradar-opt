<?php

// Получение переменных
$email = htmlspecialchars($_POST['email']);
if(isset($_POST['pavilion'])){$pavilion = htmlspecialchars($_POST['pavilion']);}
if(isset($_POST['name'])){$name = htmlspecialchars($_POST['name']);}
if(isset($_POST['phone'])){$phone = htmlspecialchars($_POST['phone']);}

// ОТПРАВКА ЗАЯВОК НА ПОЧТУ 

// if ( isset($email) || isset($pavilion) || isset($name) || isset($phone) ) {
//   $to = 'office@spaceweb.studio';
//   $subject = 'Заявка Лендинг Опт от ' . $name;
//   $message = "<h1>Оставлена заявка от " . $name . "</h1>";
//   $message .= "<p>телефон: " . $phone . "</p>";
//   $message .= "<p>почта: " . $email . "</p>";
//   $message .= "<p>павильон: " . $pavilion . "</p>";

//   mail($to, $subject, $message, "From: landing@spaceweb.studio\r\n" . 'Content-type: text/html; charset="utf-8"');
// }

  /*
   * SendPulse REST API Usage Example
   *
   * Documentation
   * https://login.sendpulse.com/manual/rest-api/
   * https://sendpulse.com/api
   *
   * Settings
   * https://login.sendpulse.com/settings/#api
   */

  require("src/ApiInterface.php");
  require("src/ApiClient.php");
  require("src/Storage/TokenStorageInterface.php");
  require("src/Storage/FileStorage.php");
  require("src/Storage/SessionStorage.php");
  require("src/Storage/MemcachedStorage.php");
  require("src/Storage/MemcacheStorage.php");

  use Sendpulse\RestApi\ApiClient;
  use Sendpulse\RestApi\Storage\FileStorage;

  define('API_USER_ID', '32ebced38d3431c6c92d8a955edac5fd');
  define('API_SECRET', 'e92c49ad7f1841e8ce67aef9e95098f4');
  define('PATH_TO_ATTACH_FILE', __FILE__);

  $SPApiClient = new ApiClient(API_USER_ID, API_SECRET, new FileStorage());

  $bookID = 1570533;
   $emails = array(
      array(
          'email' => $email,
          'variables' => array(
              'name' => $name,
              'Телефон' => $phone,
              'pavilion' => $pavilion,
          )
      )
  );
  //var_dump($SPApiClient->addEmails($bookID, $emails));
 ?>