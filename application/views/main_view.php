<div class="container">

  <? if (isset($_COOKIE['name'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <? echo $_COOKIE['name'] ?>, вы успешно авторизировались!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <h1>Добро пожаловать, <? echo $_COOKIE['name']?>!</h1>
  <? else: ?>
      <h1>Добро пожаловать!</h1>
  <? endif; ?>
</div>



