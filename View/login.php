<html>
    <head>
        <link rel="stylesheet" href="View/styles/stylelogin.css">
    </head>
    <body>
        <div class="flex-body">
            <div>
                <h1>LOGIN</h1>
                <form method="POST" action="signin">
                    <a href="index.php"><img src="View/images/logo.png"></a> <br>
                    <label>Username</label> <br>
                    <input id="txt" type="text" name="uname" placeholder="Enter User Name"> <br>
                    <label>Password<label> <br>
                    <input id="txt" type="password" name="pass" placeholder="Enter Password"> <br>
                    <br><br>
                    <input id="buttons" type="submit" value="Login"> <br>
                    <hr>
                    <a href="signup"><input id="buttons" type="button" value="Sign Up"></a>
                    <br><br>       
                </form>
            </div>
        </div>
    </body>
</html>