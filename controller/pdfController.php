<?php


use Monolog\Level;
use Monolog\Logger;
use MyBestLog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('your.log', Level::Warning));
// add records to the log
$log->warning('Foo');
$log->error('Bar');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$contacts = get_all_contact(); 
$contactString = "";
foreach ($contacts as $contact) {
    $contactString .= $contact['forname']." ".$contact['name'].", ";
}
$pdf->Cell(40,10,$contactString);
$pdf->Output();
?> 