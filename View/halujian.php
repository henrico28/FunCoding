<div class="timer-container">
        <div id="timer-wrapper"><span id="time"></span></div>
        </div>
        <div class="flex-haluji">
            <div>           
                <form>
                    <h1>Soal Ujian</h1>
                    
                    <?php
                        $nomorSoal = 1;
                        for($i = 0; $i<sizeof($soal); $i++){
                        echo "<span>";
                        echo $nomorSoal;
                        echo ". </span";
                        echo "<p>";
                        echo $soal[$nomorSoal-1][0];
                        echo "<br></p>";
                        echo "<select name='$nomorSoal'>";
                        for($j = 1; $j<=4; $j++){
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
                    ?>
                    
                    <input id="btnUjian" type="submit" value="Submit">
                </form>
            </div>
        </div>
</div>
<?php require_once "script/scripttimer.php"; ?>