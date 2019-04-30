<html>
<head>
    <link rel="stylesheet" href="View/styles/stylelogin.css">
</head>
<body>
    <div class="flex-register">
        <div>
            <h1>Create Your Account</h1>
            <form style="margin-top:20%;">  
                <a href="index.php"><img src="View/images/logo.png"></a> <br>
                <label>Full name</label><br>
                <input id="name" class = "txt" type="text" name="fname" placeholder="Enter Full Name" required> <br>
                <label>Username</label> <br>
                <input id="username" class = "txt" type="text" name="uname" placeholder="Enter User Name" pattern=".{5,}" required title="5 characters minimum"> <br>
                <span id="userauth"></span><br>
                <label>Password</label> <br>
                <input id="password" class = "txt" type="password" name="pass" placeholder="Enter Password" pattern=".{5,}" required title="5 characters minimum"> <br>
                <label>Country</label> <br>
                <input id="country" class = "txt" type="text" name="negara" placeholder="Enter Country Name" required>
                <br><br>
                <input id="buttons" type="submit" value="Register"> <br>
                <hr>
                <a href="login"><input id="buttons" type="button" value="Login"></a>
                <br><br>  
            </form>
        </div>
    </div>
    <script src="View/Script/scriptajax.js"></script>
</body>
</html>