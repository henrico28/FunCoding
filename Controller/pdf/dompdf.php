<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$name =  $_POST['name'];
$bahasa =  $_POST['bahasa'];
$level =  $_POST['level'];
$skor =  $_POST['skor'];
$html =
"<html> 
    <body>
        <img src=View/images/logo.png> 
        <hr>
        <div style='text-align:center'>
            <h3 style='color:black;'>Nama: $name</h3>
            <h1 style='color:red;'>Telah Lulus Ujian Pemrograman</h1>
            <h3 style='color:black;'>Bahasa: $bahasa</h3>
            <h3 style='color:black;'>Level: $level</h3>
            <h1 style='color:red;'>Nilai: $skor</h1>
        </div>
    </body>
</html>";



$dompdf->loadHtml($html);

$dompdf->setPaper('a4', 'landscape');
$dompdf->render();
$dompdf->stream();


?>