<?php
session_start();

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = 'admin';
    $valid_password = 'admin';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header('Location: admin.php');
        exit();
    } else {
        $error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Admin</title>
</head>

<body>
    <div class="container">
        <h2>Login Admin</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Masukkan Username" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>