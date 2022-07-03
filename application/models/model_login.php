<?php
require_once 'db/DB.class.php';

class Model_Login extends Model
{

  function login($email, $password) {
    $password = md5(md5(trim($password)));
    $email = trim($email);
    $query = "SELECT id, name FROM users WHERE email='".$email."' AND password='".$password."'";
    $db = new DB;
    $result = $db->query($query);
    if ( count($result) != 0 ) return $result;
    return false;
  }

  function generateCode($length = 7) {
    $chars="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM1723456789";
    $code = "";
    $clen = strlen($chars)-1;
    while(strlen($code) < $length) {
      $code .= $chars[mt_rand(0, $clen)];
    }
    return $code;
  }

  function updateUser($id, $hash, $ip) {
    if (is_null($ip)) {
      $query = "UPDATE users SET hash='".$hash."' WHERE id=".$id;
    }
    else {
      $query = "UPDATE users SET hash='".$hash."', ip=INET_ATON('".$ip."') WHERE id=".$id;
    }
    $db = new DB;
    return $db->query($query);
  }

}