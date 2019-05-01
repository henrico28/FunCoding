
        <div class="flex-body">
            <div>
                <h1>Top 10 User</h1>
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Nama Pengguna</th>
                        <th>Jumlah Sertifikat</th>
                    </tr>
                    <?php
                        $counter = 0;
                        for ($x = 0; $x < sizeof($top10); $x++) {
                            echo"<tr>";
                            echo "<td>".$top10[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$top10[$x][$counter]."</td>";
                            $counter = $counter+1;
                            echo "<td>".$top10[$x][$counter]."</td>";
                            $counter = 0;
                            echo "</tr>";
                        }
                    ?>
                </table>
            <div>
        </div>
