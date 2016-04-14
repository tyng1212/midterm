<html>
<head><title>Register</title>
</head>
<body>

<form action="log.php" method="POST">
User:<br />
<input type="text" name="user"><br />
Password:<br />
<input type="password" name="password"><br />
E-mail:<br />
<input type="text" name="e-mail"><br />
Tel:<br />
<input type="text" name="tel"><br />

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
</form>
</body>
</html>