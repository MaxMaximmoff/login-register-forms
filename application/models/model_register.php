<?php

require_once 'db/DB.class.php';

class Model_Register extends Model
{

  public function isEmailExist($email)
  {
    $query = "SELECT id FROM users WHERE email='" . $email . "'";
    $db = new DB;
    $result = $db->query($query);
    if (count($result) === 0) return false;
    return true;
  }

  public function isPasswordsEqual($password, $password_confirmation)
  {
    if ($password === $password_confirmation) {
      return true;
    }
    return false;
  }

  public function recordUser($name, $email, $password)
  {
    $password = md5(md5(trim($password)));
    $name = trim($name);

    $db = new DB;
    $params = [
      'name' => $name,
      'email' => $email,
      'password' => $password,
    ];
    return $db->query('INSERT INTO `users` (name, email, password) VALUES (:name, :email, :password)', $params);
  }

  public function getErrors()
  {
    $err = [];
    $err_count = 0;
    if (isset($_POST['submit'])) {
      if (strlen($_POST['name']) < 3 or strlen($_POST['name']) > 30) {
        $err[] = "Имя должно быть не меньше трех и не больше 30-ти символов";
        $err_count++;
      }
      if (strlen($_POST['password']) < 4 or strlen($_POST['password']) > 30) {
        $err[] = "Пароль должен быть не меньше 4х и не больше 30-ти символов";
        $err_count++;
      }
      if (!$this->isPasswordsEqual($_POST['password'], $_POST['password_confirmation'])) {
        $err[] = "Пароль и подтверждение пароля не совпадают";
        $err_count++;
      }
      if ($this->isEmailExist($_POST['email']) && $err_count == 0) {
        $err[] = "Пользователь с таким email уже зарегистрирован";
      }
    }
    return $err;
  }

  public function createUser($err)
  {
    if (isset($_POST['submit'])) {
      if (count($err) === 0) {
        $this->recordUser($_POST['name'], $_POST['email'], $_POST['password']);
//        header('Location: /login');
        return "Пользователь " . $_POST['name'] . " успешно зарегестрирован!";
      }
    }
  }

}



