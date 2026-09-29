<?php

// Incluimos la configuración de conexión a la base de datos.
include('../../../app/config.php');

// Verificamos que la información haya sido enviada mediante POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $url . '/admin/usuarios/create.php');
    exit;
}

// Recibimos y limpiamos los datos enviados desde el formulario.
$nombre_completo = trim($_POST['nombre_completo'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$password_verify = $_POST['password_verify'] ?? '';
$cargo = $_POST['cargo'] ?? '';

// Validamos que los campos obligatorios tengan información.
if ($nombre_completo === '' || $email === '' || $password === '' || $password_verify === '' || $cargo === '') {
    session_start();

    $_SESSION['mensaje'] = 'Todos los campos obligatorios deben ser diligenciados.';
    $_SESSION['icono'] = 'error';

    header('Location: ' . $url . '/admin/usuarios/create.php');
    exit;
}

// Validamos que el correo tenga un formato válido.
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    session_start();

    $_SESSION['mensaje'] = 'El correo electrónico ingresado no es válido.';
    $_SESSION['icono'] = 'error';

    header('Location: ' . $url . '/admin/usuarios/create.php');
    exit;
}

// Verificamos que las contraseñas coincidan.
if ($password !== $password_verify) {
    session_start();

    $_SESSION['mensaje'] = 'Las contraseñas no coinciden.';
    $_SESSION['icono'] = 'error';

    header('Location: ' . $url . '/admin/usuarios/create.php');
    exit;
}

// Verificamos que el correo no se encuentre registrado.
// Se utiliza una consulta preparada para evitar inyección SQL.
$sql = "SELECT id_usuario FROM tb_usuarios WHERE email = :email";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email);
$query->execute();

$usuario_existente = $query->fetch(PDO::FETCH_ASSOC);

if ($usuario_existente) {
    session_start();

    $_SESSION['mensaje'] = 'El correo electrónico ' . $email . ' ya está registrado.';
    $_SESSION['icono'] = 'error';

    header('Location: ' . $url . '/admin/usuarios/create.php');
    exit;
}

// Convertimos la contraseña en un hash seguro antes de almacenarla.
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Registramos la fecha y hora actual.
$fechaHora = date('Y-m-d H:i:s');

// Preparamos la consulta para registrar el nuevo usuario.
$sentencia = $pdo->prepare(
    "INSERT INTO tb_usuarios
    (nombre_completo, email, password, cargo, fyh_creacion)
    VALUES
    (:nombre_completo, :email, :password, :cargo, :fyh_creacion)"
);

// Asociamos los valores a los parámetros de la consulta.
$sentencia->bindParam(':nombre_completo', $nombre_completo);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password', $password_hash);
$sentencia->bindParam(':cargo', $cargo);
$sentencia->bindParam(':fyh_creacion', $fechaHora);

// Ejecutamos el registro.
if ($sentencia->execute()) {

    session_start();

    $_SESSION['mensaje'] = 'El usuario fue registrado correctamente.';
    $_SESSION['icono'] = 'success';

    header('Location: ' . $url . '/admin/usuarios/');
    exit;

} else {

    session_start();

    $_SESSION['mensaje'] = 'No fue posible registrar el usuario.';
    $_SESSION['icono'] = 'error';

    header('Location: ' . $url . '/admin/usuarios/create.php');
    exit;
}