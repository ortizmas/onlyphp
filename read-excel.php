<?php
require_once (dirname(__FILE__).'/Config/display-errors.php');

require_once('Library/PhpSpreadsheet/src/Bootstrap.php');

use \PhpOffice\PhpSpreadsheet\IOFactory;
use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// require dirname(__FILE__).'/Class/Excel.php';
// $excel = new Excel();
// $excel->readFile();

// Path to the XLSX file
$inputFileName = dirname(__FILE__). '/public/files/Lista.xlsx';

/*try {
    // Load the spreadsheet
    $spreadsheet = IOFactory::load($inputFileName);

    // Get the active sheet
    $sheet = $spreadsheet->getActiveSheet();

    // Get the highest row and column numbers referenced in the worksheet
    $highestRow = $sheet->getHighestRow(); // e.g. 10
    
    $highestColumn = $sheet->getHighestColumn(); // e.g 'F'
   
    // Loop through each row of the worksheet in turn
    for ($row = 1; $row <= $highestRow; $row++) {
        // Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        // Print the row data
        echo "<pre>";
        var_dump($row);
        echo "</pre>";
    }
} catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
    echo 'Error loading file: ', $e->getMessage();
}*/


// read excel spreadsheet
// $reader = new Xlsx();
// if($reader) {
//   $reader->setReadDataOnly(true);
//   $spreadsheet = $reader->load($inputFileName);  
//   $sheetData = $spreadsheet->getActiveSheet()->toArray();

//   foreach($sheetData as $row) {
//     if ($row[0] !== NULL) {
//         // get columns
//         $testTaker = isset($row[0]) ? $row[0] : "";
//         $correctAnswers = isset($row[1]) ? $row[1] : "";
//         $incorrectAnswers = isset($row[2]) ? $row[2] : "";
//     }
//   }
// }

# Create a new Xls Reader
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
// Tell the reader to only read the data. Ignore formatting etc.
$reader->setReadDataOnly(true);
// Read the spreadsheet file.
$spreadsheet = $reader->load($inputFileName);

$sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
$data = $sheet->toArray();

// Obter o index do nome do cabeçãlho
$newIndex = [];
foreach ($data as $key => $arr) {
    foreach ($arr as $index => $value) {
        if ($arr[$index] === 'email') {
            $newIndex['email'] = $index;
        }
        if ($arr[$index] === 'nome') {
            $newIndex['nome'] = $index;
        }
        if ($arr[$index] === 'cpf') {
            $newIndex['cpf'] = $index;
        }
        
    }
    break;
}

$newData = [];
foreach ($data as $key => $arr) {
    if ($key > 0) {
        $newData[] = [
            'email' => $arr[$newIndex['email']],
            'nome' => $arr[$newIndex['nome']],
            'cpf' => $arr[$newIndex['cpf']]
        ];
    }
}

echo "<pre>";
var_dump($newIndex['email'], $newData, true); 
echo "</pre>";
die();

/**
 * Other method
 */
$spreadsheet = IOFactory::load($inputFileName);

$totalSheets = $spreadsheet->getSheetCount(); // Total de hojas

$currentSheet = $spreadsheet->getSheet(0); // Folha atual
$numRows = $currentSheet->getHighestDataRow(); // Numero de filas da folha
$numCols = $currentSheet->getHighestColumn(); // Numero de colunas da filha

var_dump($numCols);
die();

$worksheet = $spreadsheet->getActiveSheet();
// $rows = $worksheet->toArray();
$rowInterator = $worksheet->getRowIterator();

$data = [];
foreach ($rowInterator as $key => $row) {
    $rowIndex = $row->getRowIndex();
    foreach ($worksheet->getColumnIterator() as $col) {
        $colIndex = $col->getColumnIndex();
        $cellValue = $worksheet->getCell($colIndex.$rowIndex)->getValue();
        
        if (empty($cellValue)) {
            $error = 'Error: Date, Sample and Isolate columns must not be empty in row ' . $rowIndex;
            error_log($error, 3, 'File');
            continue; //skip the loop
        } else {
            $data[] = $colIndex.$rowIndex;
        }
    }
}

echo "<pre>";
var_dump($data);
echo "</pre>";

?>