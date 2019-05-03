
        <div class="flex-body">
            <div>
                <h1>Pengguna</h1>
                <?php
                    for ($key=0;$key<$page;$key++) {
                        echo "<a href=?start=".($key*5).">".($key+1)."</a>";
                        echo "&nbsp;";
                    }
                ?>
                <hr>
                <table>
                    <tr>
                        <th>Nama Pengguna</th>
                        <th>Asal Negara</th>
                        <th>Email</th>
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
                            $counter = 0;
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>

            
        </div>
