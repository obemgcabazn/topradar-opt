<?php

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
          'email' => 'subscriber@example.com',
          'variables' => array(
              'name' => 'User Name',
              'pavilion' => '',
          )
      )
  );
  // var_dump($SPApiClient->addEmails($bookID, $emails));
 ?>