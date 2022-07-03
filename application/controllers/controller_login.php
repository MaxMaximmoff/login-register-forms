<?php

class Controller_Login extends Controller
{

  function __construct()
  {
    $this->model = new Model_Login();
    $this->view = new View();
  }
	
	function action_index()
	{

    $data = array();

    if (isset($_POST['submit'])) {
      $user = $this->model->login($_POST['email'], $_POST['password']);

      if ($user) {
        $user = $user[0];
        $data['success'] = $user['name']." вы авторизировались!";
        $hash = md5($this->model->generateCode(10));
        $ip = $_SERVER['REMOTE_ADDR'];
        $this->model->updateUser($user['id'], $hash, $ip);
        setcookie('id', $user['id'], time()+60*60*24*30, "/");
        setcookie('name', $user['name'], time()+60*60*24*30, "/");
        setcookie('hash', $hash, time()+60*60*24*30, "/");

        header("Location: /");
        exit();
      }
      else
      {
        $data['errors'] = "Вы неправильно ввели логин или пароль!";

      }
    }

    $this->view->generate('login_view.php', 'template_view.php', $data);

	}
	
}
