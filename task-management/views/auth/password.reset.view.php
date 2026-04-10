<?php require "../views/layout/header.php"; ?>
<section class="login">
    <div class="wrapper">
        <div class="login_container">
            <h1 class="login_head__text">Set New Password</h1>
            <div class="login_form__container">
                <p class="forgot_description">Enter your new password below to reset your account.</p>

                <form action="/reset-password" method="POST">
                    <input type="hidden" name="token" value="<?= htmlspecialchars($token ?? '') ?>">

                    <div class="login_form__containers">
                        <label for="password">New Password</label>
                        <input type="password" name="password" placeholder="Enter new password..." required <?= isset($errors["password"]) ? 'class="input-error"' : '' ?>>
                        <?php if (isset($errors["password"])) : ?>
                            <p class="error-message"><?= $errors['password'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="login_form__containers">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm your password..." required <?= isset($errors["password_confirmation"]) ? 'class="input-error"' : '' ?>>
                        <?php if (isset($errors["password_confirmation"])) : ?>
                            <p class="error-message"><?= $errors['password_confirmation'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="password_requirements">
                        <p>Password must:</p>
                        <ul>
                            <li>Be at least 6 characters long</li>
                            <li>Match the confirmation field</li>
                        </ul>
                    </div>

                    <div class="login_form__btn">
                        <button type="submit">Reset Password</button>
                    </div>
                </form>

                <?php if (isset($message)) : ?>
                    <p class="success-message"><?= $message ?></p>
                <?php endif; ?>

                <div class="forgot_links">
                    <p><a href="/">Back to Login</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php require "../views/layout/footer.php"; ?>
