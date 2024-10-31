<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/styles3.css?v=1">
</head>
<body>
    <header>
        <div class="logo">NOTAS UTP</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">new account</a>
            <a href="#" class="login-button">login</a>
        </nav>
    </header>
    <main>
        <div class="form-container">
            <h2>Login</h2>
            <form action="login2.php" method="POST">
                <label for="email">Please enter Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Please enter password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">LOGIN</button>
            </form>
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </div>
    </main>
</body>
</html>
