<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, inital-scale=1">
         <title>Login Page</title>
    </head>
    <body>
         <form name="input" action="login.php" method="get">
             <input type="submit" value="Home">
         </form>
         <form action="login.php" method = "post">
            <label for="username">Username</label> <input type="username" id="usename" name="username"><br /><br />
            <label for="password">Password</label> <input type="text" id="password" name="password"><br /><br />
            <button type = "submit">Login</button>
        </form>
    </body>
</html>
