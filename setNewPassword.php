<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Set New Password</h1>
    </header>
    <main>
        <form action="includes/setNewPassword.inc.php" method="post">
            <input type="password" name="pwd" placeholder="New Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat New Password">
            <input type="hidden" name="selector" value="<?php echo $_GET["selector"] ?>">
            <input type="hidden" name="validator" value="<?php echo $_GET["validator"] ?>">
            <button type="submit" name="set-new-password-submit">Set New Password</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2020</p>
    </footer>
</body>
</html>