<?php

$email = htmlspecialchars($_POST['email']);
if(isset($_POST['pavilion'])){$pavilion = htmlspecialchars($_POST['pavilion']);}
if(isset($_POST['name'])){$name = htmlspecialchars($_POST['name']);}
if(isset($_POST['phone'])){$phone = htmlspecialchars($_POST['phone']);}


if (isset($email) || isset($pavilion) || isset($name) || isset($phone)) {
  $f = fopen('test.txt', 'a');
     fwrite($f, "\n Новый клиент: " . $name . "\t почта: " . $email . "\t телефон:" . $phone .  "\tпавильон: " . $pavilion . PHP_EOL);
     fclose($f);
}