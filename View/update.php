<div class="flex-body">
            <div>
                <h1>UPDATE PASSWORD</h1>
                <form method="POST" action="update">
                    <a href="index.php"><img src="View/images/logo.png"></a> <br>
                    <label>New Password</label> <br>
                    <input class = "txt" type="password" name="npass" placeholder="Enter New Password" pattern=".{5,}" required title="5 characters minimum"> <br>
                    <label>Confirm Password<label> <br>
                    <input class = "txt" type="password" name="cpass" placeholder="Enter Confirm Password" pattern=".{5,}" required title="5 characters minimum"> <br>
                    <br><br>
                    <input id="buttons" type="button" value="Change Password"> <br>      
                </form>
            </div>
        </div>