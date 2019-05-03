<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$name =  $_POST['name'];

$html =
"<html> 
    <body>  
        <p style='color:blue;'>$name</p>
    
    </body>
</html>";



$dompdf->loadHtml($html);

$dompdf->setPaper('a4', 'landscape');
$dompdf->render();
$dompdf->stream();


?>