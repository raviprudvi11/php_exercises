<?php
$username = '';
$password = '';
$email = '';
if (isset($_GET['username']) && isset($_GET['email'])&&isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $email =$_GET['email'];
}
?>
<html lang="en">
    <head>
    <title>Forms</title>
    <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>Mini inscription form</h1>
           
        </header>
        <main>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
             <input type="text" name="email :" value="<?= $email ?>" />
                 <input type="text" name="username :" value="<?= $username ?>" />
                <input type="password" name="password :" value="" />
                <input type="submit" value="Submit" />
            </form>
        </main>
    </body>        
</html>
