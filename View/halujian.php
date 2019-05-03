<div class="timer-container">
        <div id="timer-wrapper"><span id="time"></span></div>
        </div>
        <div class="flex-haluji">
            <div>           
                <form method="POST" action="result">

                    <h1>Soal Ujian</h1>
                    
                    <?php
                        $nomorSoal = 1;
                        for($i = 0; $i<sizeof($soal); $i++){
                        echo "<span>";
                        echo $nomorSoal;
                        echo ". </span";
                        echo "<p>";
                        echo $soal[$nomorSoal-1][1];
                        echo "<br></p>";
                        echo "<select name='$nomorSoal'>";
                        for($j = 2; $j<=5; $j++){
                            echo "<option value =";
                            echo $soal[$nomorSoal-1][$j];
                            echo ">";
                            echo $soal[$nomorSoal-1][$j];
                            echo "</option>";
                        }
                        $nomorSoal = $nomorSoal+1;
                        echo "</select>";
                        echo "<br><br>";
                    }                
                        session_start();
                        $_SESSION['start_time'] = time();
                        session_write_close();
                    ?>
                    
                    <input id="btnUjian" type="submit" value="Submit">
                </form>
            </div>
        </div>
</div>
<?php require_once "script/scripttimer.php"; ?>