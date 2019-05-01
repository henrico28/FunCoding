
        <div class="flex-profile">
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
