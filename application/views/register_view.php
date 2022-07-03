    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Регистрация</div>

                    <div class="card-body">

                        <form id="registration" method="POST" action="" class="needs-validation" novalidate>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Имя</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required
                                           autocomplete="name" autofocus>
                                    <div class="invalid-feedback feedback-pos">
                                        Пожалуйста введите имя
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value=""
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required
                                           autocomplete="email">
                                    <!--                                <div class="valid-feedback feedback-pos">-->
                                    <!--                                    Выглядит хорошо!-->
                                    <!--                                </div>-->
                                    <div class="invalid-feedback feedback-pos">
                                        Пожалуйста введите валидный email
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required
                                           autocomplete="new-password">
                                    <div class="invalid-feedback feedback-pos">
                                        Пожалуйста введите пароль!
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Подтверждение
                                    пароля</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                    <div class="invalid-feedback feedback-pos">
                                        Пожалуйста подтвердите пароль!
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" name="submit" value="done">
                                        Регистрация
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

