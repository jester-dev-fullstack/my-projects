<?php require "../views/layout/header.php"; ?>
<section class="login">
    <div class="wrapper">
        <div class="login_container">
            <div class="login-logo">
                <img src="/images/zendo.png" alt="Zendo Logo" class="login-logo-image">
            </div>
            <h1 class="login_head__text">Reset Password</h1>
            <div class="login_form__container">
                <p class="forgot_description">Enter your email address and we'll send you a link to reset your password.</p>

                <form action="/forgot-password" method="POST">
                    <div class="login_form__containers">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" placeholder="Enter your email..." required <?= isset($errors["email"]) ? 'class="input-error"' : '' ?>>
                        <?php if (isset($errors["email"])) : ?>
                            <p class="error-message"><?= $errors['email']; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="login_form__btn">
                        <button type="submit">Send Reset Link</button>
                    </div>
                </form>

                <?php if (isset($message)) : ?>
                    <p class="success-message"><?= $message ?></p>
                <?php endif; ?>

                <div class="forgot_links">
                    <p><a href="/">Back to Login</a></p>
                    <p>Don't have an account? <a href="/register">Register here</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php require "../views/layout/footer.php"; ?>
