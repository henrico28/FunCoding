      
        <div class="flex-profile">
            <div class="foto">
            <form action="upload" method="post" id="lblFoto" enctype="multipart/form-data">
                <label for="profileImage">Foto Anda</label><br>
                <?php
                    echo "<img style=heigth:60%;width:100% src='View/styles/uploads/".$data."' id='displayPicture' onclick='trigger()'>";
                ?>
                <br><br>
                <input type="file" name="upfile" id="upfile" onchange="display(this)"><br><br>
                <input class="buttonfoto" type="submit" value="Simpan" id="simpan">
            </form>
            <form action="reset" id="lblFoto" method="post">
                <input class="buttonfoto" type="submit" value="Hapus" id="hapusFoto">
            </form>
        </div>
            <div>
                <h1>Profile</h1>
                <hr>
                <p>Nama lengkap: <?=$nama?></p><br>
                <p>Username: <?=$user?></p><br>
                <p>Asal negara: <?=$negara?></p><br>
                <p>Email: <?=$email?></p><br>
            </div>
        </div>
        <div class="flex-history">
            <div>
                <h1>History</h1>
                <hr>
                <!-- <div class = "historyUjian"> -->
                <table>
                    <?php
                        $counter = 0;
                        for ($x = 0; $x < sizeof($history); $x++) {
                            echo"<tr>";
                            echo "<td>".$history[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$history[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$history[$x][$counter]."</td>";
                            $counter = 0;
                            echo "</tr>";
                        }
                    ?>
                </table>
            <!-- </div> -->
            </div>
        </div>
