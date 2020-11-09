<html>
    <head>
        <title>Login to Replika Apple</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <center>
            <br>
            <img src="../img/apple.png" weight="150px" height="150px">
            <form action="login_proses.php" method="post">
            <br>
            <table class="login">
                <tr>
                    <td>
                        <label>Username</label>
                    </td>
                    <td>
                        <input type ="text" name="username" id="username" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type ="password" name="password" id="password" placeholder="Password">
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Login" class="btn btn-outline-dark" name="login" id="login">
        </center>
    </body>
</html>