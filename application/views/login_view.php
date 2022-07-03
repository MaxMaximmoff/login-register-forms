
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Войти</div>

                <div class="card-body">
                    <form method="POST" action="login" class="needs-validation" novalidate>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value=""
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required
                                       autocomplete="email">
                                <div class="invalid-feedback feedback-pos">
                                    Пожалуйста введите валидный email
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required
                                       autocomplete="password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="done">
                                    Войти
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>















<!--<h1>Страница авторизации</h1>-->
<!--<p>-->
<!--<form action="" method="post">-->
<!--<table class="login">-->
<!--	<tr>-->
<!--		<th colspan="2">Авторизация</th>-->
<!--	</tr>-->
<!--	<tr>-->
<!--		<td>Логин</td>-->
<!--		<td><input type="text" name="login"></td>-->
<!--	</tr>-->
<!--	<tr>-->
<!--		<td>Пароль</td>-->
<!--		<td><input type="password" name="password"></td>-->
<!--	</tr>-->
<!--	<th colspan="2" style="text-align: right">-->
<!--	<input type="submit" value="Войти" name="btn"-->
<!--	style="width: 150px; height: 30px;"></th>-->
<!--</table>-->
<!--</form>-->
<!--</p>-->

<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
