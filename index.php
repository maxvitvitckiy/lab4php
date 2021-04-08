<?php
$users = ['admin' => 'password', 'user' => 'password2'];

echo '<html>
        <head>
            <title>Authorization</title>
        </head>
        <body>         
            <form name="autorization"  action="" method="POST">
            Username: <input name="username" value=""><br>
            Password: <input type="password" name="password"value=""><br><p>
            <input type="submit" name="" value="Sign in">
            </form>
        </body>
    </html>';
if(!empty($_POST['username']) && !empty($_POST['password'])) {
    if($users[$_POST['username']] == $_POST['password']) {
        header("location:main.php");
    }
    else {
        echo '<script>alert("Incorrect username or password.")</script>';
    }
} 
