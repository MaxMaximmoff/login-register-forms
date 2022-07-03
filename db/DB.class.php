<?php

class DB
{
  // Переменная, хранящая объект PDO
  private $db;

  public function __construct()
  {
    // Подключения к БД
    $dbinfo = require 'db/config.php';
    // Подключение
    $this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['dbname'], $dbinfo['login'], $dbinfo['password']);
  }

  public function query($sql, $params = [])
  {
    // Подготовка запроса
    $stmt = $this->db->prepare($sql);

    // Обход массива с параметрами
    // и подставление значений
    if ( !empty($params) ) {
      foreach ($params as $key => $value) {
        $stmt->bindValue(":$key", $value);
      }
    }
    // Выполнение запроса
    $stmt->execute();
    // Возвращаем ответ
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>