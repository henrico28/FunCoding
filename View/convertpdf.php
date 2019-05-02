<?php
require 'pdfcrowd.php';

$client = new \Pdfcrowd\HtmlToPdfClient("username", "apikey");
$pdf = $client->convertUrl('https://en.wikipedia.org/');
?>