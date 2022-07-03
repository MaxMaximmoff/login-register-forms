<?php


class Controller_Logout extends Controller
{
  function action_index()
  {
    setcookie('id', "", time()-60*60*24*30, "/");
    setcookie('name', "", time()-60*60*24*30, "/");
    setcookie('hash', "", time()-60*60*24*30, "/", null, null, true);
    header("Location: /login");
    exit();
  }
}
