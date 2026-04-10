<?php require "../views/layout/header.php"; ?>
<section class="login">
    <div class="wrapper">
        <div class="login_container">
            <h1 class="login_head__text">Task Management App</h1>
            <div class="login_form__container">
                <form action="/login" method="POST">
                    <div class="login_form__containers">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email..." required <?= isset($errors["email"]) ? 'class="input-error"' : '' ?> value="<?= htmlspecialchars($email ?? '') ?>">
                        <?php if (isset($errors["email"])) : ?>
                            <p class="error-message"><?= $errors['email'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="login_form__containers">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password..." required <?= isset($errors["password"]) ? 'class="input-error"' : '' ?>>
                        <?php if (isset($errors["password"])) : ?>
                            <p class="error-message"><?= $errors['password'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="login_form__btn">
                        <button type="submit">Log in</button>
                    </div>

                    <div class="login_form__forgot">
                        <a href="/forgot-password">Forgot password?</a>
                    </div>
                </form>

                <div class="login_form__register">
                    <p>Don't have an account? <a href="/register">Register here</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php require "../views/layout/footer.php"; ?>
