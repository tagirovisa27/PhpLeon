<?php session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>

<div class="line">
    Логин
    <?php if (!isset($_SESSION['user'])) { ?>
        <form method="POST" action="reqst.php">
            <input type="email" name="email" placeholder="Ваш email">
            <input type="password" name="password" placeholder="Ваш пороль">
            <button>Войти</button>
        </form>
    <?php } else { ?>
        <div>
            <?php echo $_SESSION['user']; ?>
        </div>
    <?php } ?>
</div>

</body>

</html>