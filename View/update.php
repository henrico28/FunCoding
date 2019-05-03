<div class="flex-body">
<h1>UPDATE PASSWORD</h1>
            <div class="container-update">
                
                <form method="POST" action="update">
                    <label>New Password</label> <br>
                    <input class = "txtUpdate" type="password" name="npass" placeholder="Enter New Password" pattern=".{5,}" required title="5 characters minimum"> <br>
                    <label>Confirm Password<label> <br>
                    <input class = "txtUpdate" type="password" name="cpass" placeholder="Enter Confirm Password" pattern=".{5,}" required title="5 characters minimum"> <br>
                    <br><br>
                    <input id="buttons" class="btnUpdate"type="submit" value="Change Password"> <br>      
                </form>
            </div>
        </div>