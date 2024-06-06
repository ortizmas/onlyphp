<?php
use SimpleExcel\SimpleExcel;

require_once('./Library/SimpleExcel/SimpleExcel.php'); // load the main class file (if you're not using autoloader)

class Excel {
    

    public function __construct()
    {
        //
    }

    public function readFile($file = null, $extendion = null, $delimiter = ";")
    {
        $file = './public/files/CMGTES _Participantes.csv';
        
        $excel = new SimpleExcel('csv');                    // instantiate new object (will automatically construct the parser & writer type as CSV)

        // Convert in excel data
        // $excel->writer->setData(
        //     array
        //     (
        //         array('ID',  'Name',            'Kode'  ),
        //         array('1',   'Kab. Bogor',       '1'    ),
        //         array('2',   'Kab. Cianjur',     '1'    ),
        //         array('3',   'Kab. Sukabumi',    '1'    ),
        //         array('4',   'Kab. Tasikmalaya', '2'    )
        //     )
        // );                                                  // add some data to the writer
        // $excel->writer->setDelimiter(";");   
        //  print_r($excel);
        //  die();               // (optional) if delimiter not set, by default comma (",") will be used instead
        // $excel->writer->saveFile($file);             // get specific data from the specified cell (2nd row in 1st column)

        // echo '<pre>';
        // print_r($excel);                                      // echo the array
        // echo '</pre>';

        try {
            $excel->parser->setDelimiter(";"); 
            $excel->parser->loadFile($file); // Try load a file which doesn't actually exists

            // foreach ($excel as $key => $value) {
            //     echo '<pre>';
            //     print_r($value);  // echo the array
            //     echo '</pre>';
            //     die();
            // }
            echo '<pre>';
            print_r($excel);  // echo the array
            echo '</pre>';
        } catch (Exception $e) {    
            // handle exception here
            if ($e->getCode() == SimpleExcelException::FILE_NOT_FOUND) {
                echo $e->getMessage();
                echo 'Please try to load another file';
            }
        }
        
    }

}