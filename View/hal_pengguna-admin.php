
        <div class="home">
            <div>
                <h1>Daftar Pengguna</h1>
                <table>
                    <tr>
                        <th>Nama Pengguna</th>
                        <th>Asal Negara</th>
                        <th>Email</th>
                        <th>Hapus</th>
                    </tr>
                    <?php
                        $counter = 0;
                        for ($x = 0; $x < sizeof($data); $x++) {
                            echo"<tr>";
                            echo "<td>".$data[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$data[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$data[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td> <input type=submit value=delete> ";
                            $counter = 0;
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            <div>
                <h1>Tambah User</h1>
                <form  method="POST" action="adduseradmin">  
                    <label>Full name</label><br>
                    <input id="name" class = "txt" type="text" name="fname" placeholder="Enter Full Name" required> <br>
                    <label>Username</label> <br>
                    <input id="username" class = "txt" type="text" name="uname" placeholder="Enter Username" pattern=".{5,}" required title="5 characters minimum"> <br>
                    <span id="userauth"></span><br>
                    <label>Password</label> <br>
                    <input id="password" class = "txt" type="password" name="pass" placeholder="Enter Password" pattern=".{5,}" required title="5 characters minimum"> <br>
                    <label>Country</label> <br>
                    <input id="country" class = "txt" type="text" name="negara" placeholder="Enter Country Name" required><br>
                    <label>Email</label> <br>
                    <input id="email" class = "txt" type="text" name="email" placeholder="Enter Email" required>
                    <br><br>
                    <input id="buttons" type="submit" value="Register"> <br>
                </form>
            </div>
        </div>
