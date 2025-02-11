<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form">
        <div class="login-card">
    <form action="validate.php" method="POST">
        <div class="form-group">
    <label>Username</label>
    <input class="input-box" type="text" name="username" required>
</div>
<div class="form-group">
    <label>Passsword</label>
    <input class="input-box" type="password" name="password" required>
</div>
<div class="form-group"></div>
    <input class="submit" type="submit" name="Login" value="Login">
    <p>Already have an account? <a class="link" href="signup.php">Signup</a></p>
</div>
    </form>
</div>
</div>
</body>
</html>