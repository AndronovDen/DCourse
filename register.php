<?php require_once 'header.php'; ?>
<section class="container content py-4 px-2">
    <h1>Регистрация</h1>
    <form action="">
        <div class="field">
            <label class="label">Логин</label>
            <div class="control">
                <input class="input" type="text" placeholder="@vasyok">
            </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="vasya@mail.ru">
            </div>
        </div>

        <div class="field">
            <label class="label">Пароль</label>
            <div class="control">
                <input class="input" type="password" placeholder="12345">
            </div>
        </div>

        <div class="is-flex is-align-items-center">
            <input type="submit" value="Создать аккаунт" class="button is-link mr-2">
            <a href="/login.php">Уже зарегистрирован?</a>
        </div>
    </form>
</section>
<?php require_once 'footer.php'; ?>
