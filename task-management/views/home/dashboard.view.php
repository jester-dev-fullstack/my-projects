<?php require "../views/layout/header.php"; ?>

<form action="/logout" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Log out</button>
</form>

<?php require "../views/layout/footer.php"; ?>
