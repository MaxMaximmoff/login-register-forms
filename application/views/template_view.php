<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Формы</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
                crossorigin="anonymous"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="col-6 navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                  <? if (isset($_COOKIE['id']) and isset($_COOKIE['name']) and isset($_COOKIE['hash'] )): ?>
                  <li>
                      <a class="nav-link">Привет, <? echo $_COOKIE['name']?>!</a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Выйти</a>
                    </li>

                    <? else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Войти</a>
                    </li>
                  <? endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Зарегистрироваться</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="container mt-2">
          <? if (is_array($data['errors']) && count($data['errors']) != 0): ?>
            <? foreach ($data['errors'] as $error): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <? echo $error ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            <? endforeach; ?>
          <? endif; ?>
          <? if (is_string($data['errors'])): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <? echo $data['errors'] ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
          <? endif; ?>
          <? if ($data['success'] != null): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <? echo $data['success'] ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <? endif; ?>
        </div>

        <div id="content" class=" mt-2">
              <?php include 'application/views/' . $content_view; ?>
        </div>

        <script src="/js/form_validation.js"></script>
    </body>
</html>