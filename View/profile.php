      
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
                <a href="updatepass"><input class="buttonfoto" type="button" value="Change Password" style="width: 200px;"/></a>
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
                            $bahasa =$history[$x][$counter];
                            $counter = $counter+1;
                            echo "<td>".$history[$x][$counter]."</td>";
                            $level =$history[$x][$counter];
                            $counter = $counter+1;
                            echo "<td>".$history[$x][$counter]."</td>";
                            $skor =$history[$x][$counter];
                            
                            if($counter==2){
                                if($history[$x][$counter] > 70){
                                    $counter1 = 0;
                                    echo "<td>";
                                    echo "<form action='createpdf' method='POST'>";
                                    echo "<input type = hidden name = 'name' value='$nama'/>";
                                    echo "<input type = hidden name ='bahasa' value='$bahasa'/>";
                                    $counter1 = $counter1 + 1;
                                    echo "<input type = hidden name ='level' value='$level'/>";
                                    $counter1 = $counter1 + 1;
                                    echo "<input type = hidden name ='skor' value='$skor'/>";
                                    echo "<input type = 'submit'/>";
                                    echo "</form>";
                                    echo "</td>";
                                    /** 
                                    echo 
                                    "<td>
                                        <form action='createpdf' method='POST'>
                                            <input type = hidden name = 'name' value=$nama/>
                                            <input type = 'submit'/>
                                        </form>
                                    </td>";
                                    */
                                }
                                else{
                                    echo "<td>Anda belum lulus</td>";
                                }
                            }
                            
                            $counter = 0;

                            echo "</tr>";
                        }
                    ?>
                </table>
            
            </div>
        </div>
