<?php
include('config.php');

$error_message = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM profile WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['username'] = $username; // Store username in session
        header("Location: profile.php");
        exit();
    } else {
        $error_message = "Invalid username or password"; 
    }
}
?>

<!-- HTML form for login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trois</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>




<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <div class="centerlogo">
                <img class="trois" src="trois.png">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Remember Me</label>
                <a href="login.php">Forgot Password</a>
            </div>
            <input type="submit" class="btn" value="Login">
            <div class="register-link">
                <p>Don't have an account? <a href="login.php">Register</a></p>
            </div>
            <div class="error-message"><?php echo $error_message; ?></div>
        </form>
    </div>
</body>
</html>
