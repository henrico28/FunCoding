
        <div class="flex-body">
            <div>
            <h1>Statistik</h1>
            <table>
                <tr>
                    <th>Bahasa</th>
                    <th>Level</th>
                    <th>Rata-Rata Skor</th>
                </tr>
                <?php
                        $counter = 0;
                        for ($x = 0; $x < sizeof($statistik); $x++) {
                            echo"<tr>";
                            echo "<td>".$statistik[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$statistik[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$statistik[$x][$counter]."</td>";
                            $counter = 0;
                            echo "</tr>";
                        }
                    ?>
            </table>
            </div>
        </div>
