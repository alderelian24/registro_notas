<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Registrate!</h1>
            <p>Por favor llena los siguientes campos</p>
        </header>
        <section>
            <form action="registro.php" method="post">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombre" required><br><br>
                <label for="apellido">Apellido:</label><br>
                <input type="text" name="apellido" id="apellido" required><br><br>
                <label for="correo">Correo:</label><br>
                <input type="email" name="correo" id="correo" required><br><br>
                <label for="contrasena">Contraseña:</label><br>
                <input type="password" name="contrasena" id="contrasena" required><br><br>
                <input type="submit" value="Registrarse">
            </form>
            <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
        </section>
        <footer>
            <p> Derechos reservados &copy; 2024</p>
        </footer>
        
    </body>
</html>

<?php
final class registro {
    public function sanitizeInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    public function sanitizeEmail($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email;
    }

    public function hashPasswordOpenSSL($password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    public function __construct($nombre, $apellido, $correo, $contrasena) {
        $this->nombre = sanitizeInput($_POST['nombre']);
        $this->apellido = sanitizeInput($_POST['apellido']);
        $this->correo = sanitizeEmail($_POST['correo']);
        $this->contrasena = hashPasswordOpenSSL($_POST['contrasena']);
    }
    public function validar() {
        if (empty($this->nombre) || empty($this->apellido) || empty($this->correo) || empty($this->contrasena)) {
            echo "Por favor llena todos los campos";
        } else {
            $this->guardar();
        }
    }
    public function guardar() {
        $conexion = new mysqli('localhost', 'root', '', 'registro');
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena) VALUES ('$this->nombre', '$this->apellido', '$this->correo', '$this->contrasena')";
        $conexion->query($sql);
        echo "Usuario registrado correctamente";
    }
}

if ($_POST) {
    $registro = new registro();
    $registro->validar();
}

?>
