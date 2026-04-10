<?php require "../views/layout/header.php"; ?>
<section class="login">
    <div class="wrapper">
        <div class="login_container">
            <div class="login-logo">
                <img src="/images/zendo.png" alt="Zendo Logo" class="login-logo-image">
            </div>
            <h1 class="login_head__text">Zendo</h1>
            <p class="login-description">A simple and powerful way to manage your daily tasks.</p>
            <div class="login_form__container">
                <form action="/register" method="POST">
                    <div class="login_form__containers">
                        <label for="first-name">First Name</label>
                        <input type="text" name="first_name" placeholder="First Name..." required <?= isset($errors["first_name"]) ? 'class="input-error"' : '' ?>>
                        <?php if (isset($errors["first_name"])) : ?>
                            <p class="error-message"><?= $errors['first_name'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="login_form__containers">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" placeholder="Last Name..." required <?= isset($errors["last_name"]) ? 'class="input-error"' : '' ?>>
                        <?php if (isset($errors["last_name"])) : ?>
                            <p class="error-message"><?= $errors['last_name'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="login_form__containers">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email..." required <?= isset($errors["email"]) ? 'class="input-error"' : '' ?>>
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
                        <button type="submit">Register</button>
                    </div>
                </form>

                <div class="login_form__register">
                    <p>Already have an account? <a href="/">Login here</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php require "../views/layout/footer.php"; ?>
