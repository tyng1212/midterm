<html>
<head><title>Login</title>
</head>
<body>

<form action="index.php" method="POST">
User:<br />
<input type="text" name="user">
<br />
Password:<br />
<input type="password" name="password">
<br />
<input type="submit" name="submit" value="Login">
<input type="reset" name="reset" value="Reset">
<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
</form>
</body>
</html>