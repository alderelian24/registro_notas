<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="header__title">Set New Password</h1>
        </header>
        <main class="main">
            <form action="includes/setNewPassword.inc.php" method="post" class="form">
                <input type="password" name="pwd" placeholder="New Password" class="form__input">
                <input type="password" name="pwd-repeat" placeholder="Repeat New Password" class="form__input">
                <input type="hidden" name="selector" value="<?php echo $_GET["selector"] ?>" class="form__input">
                <input type="hidden" name="validator" value="<?php echo $_GET["validator"] ?>" class="form__input">
                <button type="submit" name="set-new-password-submit" class="form__button">Set New Password</button>
            </form>
        </main>
        <footer class="footer">
            <p class="footer__text">&copy; 2020</p>
        </footer>
    </div>
</body>
</html>