<?php
    session_start();
    $username = $password = $userError = $passError = '';
    if(isset($_POST['sub'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
            $_SESSION['login'] = true; header('LOCATION:todo_list.php'); die();
        }
        if($username !== 'admin')$userError = 'Invalid Username';
        if($password !== 'password')$passError = 'Invalid Password';
    }
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <title>Login</title>
</head>
<body>
    <form name='input' action='{$_SERVER['PHP_SELF']}' method='post'>
        <label for='username'></label><input type='text' value='$username' id='username' name='username' />
        <div class='error'>$userError</div>
        <label for='password'></label><input type='password' value='$password' id='password' name='password' />
        <div class='error'>$passError</div>
        <input type='submit' value='Home' name='sub' />
    </form>
    <script type='text/javascript' src='common.js'></script>
</body>
</html>";
?>