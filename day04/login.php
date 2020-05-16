


<!DOCTYPE html>
<html>
    <title>PHP login page</title>
<body>

<div id ="form">
    <form action="process.php" method ="POST">
        <p>
            <label> username:</label>
            <input type="text" id ="user" name="name" />
        </p>
        <p>
               
                <input type="submit" id ="btn" value="login" />
            </p>
    </form>
</div>

</body>
</html>


<div class="header">    
              <h1> REGISTER PAGE</h1>
        </div>
     <form method="post" action="db_connectivity.php">
    <table>
        <tr>
            <td>USERNAME :</td>
            <td><input type="text" name="username" class="textinput"></td>
        </tr>
        <tr>
            <td>EMAIL :</td>
            <td><input type="email" name="email" class="textinput"></td>
        </tr>
        <tr>
            <td>PASSWORD :</td>
            <td><input type="password" name="password" class="textinput"></td>
        </tr>
        <tr>
            <td> CONFIRM PASSWORD :</td>
            <td><input type="password" name="password2" class="textinput"></td>
        </tr>
        <tr>
           
            <td><input type="submit" name="register_btn" value="Register"></td>
        </tr>

    </table>
</form>
    </body>
</html>