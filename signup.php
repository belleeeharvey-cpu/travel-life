<?php
include 'config.php';
if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "INSERT INTO users(email,password) VALUES('$email','$pass')";
    if(mysqli_query($conn, $query)){
        header("Location: login.php");
    } else {
        $error = "Error creating account";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Sign Up</title></head>
<body>
<h1>Sign Up</h1>
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="post">
Email: <input type="email" name="email" required><br>
Password: <input type="password" name="password" required><br>
<input type="submit" name="signup" value="Sign Up">
</form>
<a href="login.php">Login</a>
</body>
</html>
