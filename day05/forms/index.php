<?php
//var_dump($_SERVER['REQUEST_METHOD']);
$username = '';
$password = '';
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
}

?>
<html lang="en">
    <head>
    <title>Forms</title>
    <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>Forms</h1>
            <nav>
                <a href="<?= $_SERVER['PHP_SELF']?>">No parameters</a>
            </nav>
        </header>
        <main>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <input type="text" name="username" value="<?= $username ?>" />
                <input type="password" name="password" value="<?= $password ?>" />
                <input type="submit" value="Submit" />
            </form>
        </main>
    </body>        
</html>
