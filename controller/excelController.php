<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function downloadExcelFile() {
    // Créer une nouvelle instance Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Ajouter des données
    $sheet->setCellValue('A1', 'Nom');
    $sheet->setCellValue('B1', 'Prénom');
    $sheet->setCellValue('C1', 'Âge');

    $sheet->setCellValue('A2', 'Dupont');
    $sheet->setCellValue('B2', 'Jean');
    $sheet->setCellValue('C2', 29);

    $sheet->setCellValue('A3', 'Martin');
    $sheet->setCellValue('B3', 'Claire');
    $sheet->setCellValue('C3', 34);

    // Créer l'objet Writer pour Excel
    $writer = new Xlsx($spreadsheet);

    // Envoyer les en-têtes pour télécharger le fichier Excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="utilisateurs.xlsx"');
    header('Cache-Control: max-age=0');

    // Sauvegarder le fichier directement dans la sortie PHP
    $writer->save('php://output');
}

downloadExcelFile();
