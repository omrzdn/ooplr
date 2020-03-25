<?php

try {

  $pdo = new PDO('mysql:host=localhost;dbname=lrApp','root','');

} catch (PDOException $e) {

  die($e->getmessage());
}

$GLOBALS['config'] = array(

    'remember' => array(
        'cookie_name'   => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' =>  array(
      'session_name' => 'user'
    )
  );

spl_autoload_register(function($class){

  require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';
