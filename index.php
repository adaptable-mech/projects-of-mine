<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "the_end" && $password === "endof07") {
        $_SESSION['user'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">
    <div class="login-container text-center">
        <h2 class="mb-4 text-danger fw-bold">Welcome Back</h2>
        <?php if(isset($error)) echo "<p class='text-danger'>$error</p>"; ?>
        <form method="POST" class="p-4 shadow-lg rounded bg-dark text-white">
            <div class="mb-3">
                <input type="text" name="username" placeholder="Username" class="form-control text-center" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control text-center" required>
            </div>
            <button type="submit" class="btn btn-danger w-100 mb-3">Sign In</button>
            <a href="#" class="text-white">Sign Up</a>
        </form>
    </div>
</body>
</html>
