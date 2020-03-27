<?php

require_once 'core/init.php';

$user = DB::getInstance()->get('users', array('username', '=', 'zidan'));

if (!$user->count()) {

  echo "no user";

}else {

  echo "ok!";
}
