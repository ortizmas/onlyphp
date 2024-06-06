<?php
    $realpath = realpath(dirname(__FILE__));

    //Define path to cache directory
    defined("LIBRARY_PATH")
    || define("LIBRARY_PATH", $realpath);

    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Row.php');

    include_once(LIBRARY_PATH . '/src/Common/Entity/Comment/Comment.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Comment/TextRun.php');

    include_once(LIBRARY_PATH . '/src/Common/Entity/Style/CellAlignment.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Style/CellVerticalAlignment.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Style/Color.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Style/Style.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Style/Border.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Style/BorderPart.php');

    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/BooleanCell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/DateIntervalCell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/DateTimeCell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/EmptyCell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/ErrorCell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/FormulaCell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/NumericCell.php');
    include_once(LIBRARY_PATH . '/src/Common/Entity/Cell/StringCell.php');

    include_once(LIBRARY_PATH . '/src/Common/Exception/OpenSpoutException.php');
    include_once(LIBRARY_PATH . '/src/Common/Exception/EncodingConversionException.php');
    include_once(LIBRARY_PATH . '/src/Common/Exception/InvalidArgumentException.php');
    include_once(LIBRARY_PATH . '/src/Common/Exception/InvalidColorException.php');
    include_once(LIBRARY_PATH . '/src/Common/Exception/IOException.php');
    include_once(LIBRARY_PATH . '/src/Common/Exception/UnsupportedTypeException.php');

    include_once(LIBRARY_PATH . '/src/Common/Helper/Escaper/EscaperInterface.php');
    include_once(LIBRARY_PATH . '/src/Common/Helper/Escaper/ODS.php');
    include_once(LIBRARY_PATH . '/src/Common/Helper/Escaper/XLSX.php');

    include_once(LIBRARY_PATH . '/src/Common/Helper/EncodingHelper.php');
    include_once(LIBRARY_PATH . '/src/Common/Helper/FileSystemHelperInterface.php');
    include_once(LIBRARY_PATH . '/src/Common/Helper/FileSystemHelper.php');
    include_once(LIBRARY_PATH . '/src/Common/Helper/StringHelper.php');

    include_once(LIBRARY_PATH . '/src/Common/TempFolderOptionTrait.php');

    include_once(LIBRARY_PATH . '/src/Reader/ReaderInterface.php');
    include_once(LIBRARY_PATH . '/src/Reader/AbstractReader.php');
    include_once(LIBRARY_PATH . '/src/Reader/RowIteratorInterface.php');
    include_once(LIBRARY_PATH . '/src/Reader/SheetInterface.php');
    include_once(LIBRARY_PATH . '/src/Reader/SheetIteratorInterface.php');
    include_once(LIBRARY_PATH . '/src/Reader/SheetWithVisibilityInterface.php');

    include_once(LIBRARY_PATH . '/src/Reader/Common/Creator/ReaderFactory.php');
    include_once(LIBRARY_PATH . '/src/Reader/Common/Manager/RowManager.php');
    include_once(LIBRARY_PATH . '/src/Reader/Common/ColumnWidth.php');
    include_once(LIBRARY_PATH . '/src/Reader/Common/XMLProcessor.php');

    include_once(LIBRARY_PATH . '/src/Reader/CSV/Options.php');
    include_once(LIBRARY_PATH . '/src/Reader/CSV/Reader.php');
    include_once(LIBRARY_PATH . '/src/Reader/CSV/RowIterator.php');
    include_once(LIBRARY_PATH . '/src/Reader/CSV/Sheet.php');
    include_once(LIBRARY_PATH . '/src/Reader/CSV/SheetIterator.php');

    include_once(LIBRARY_PATH . '/src/Reader/Exception/ReaderException.php');
    include_once(LIBRARY_PATH . '/src/Reader/Exception/InvalidValueException.php');
    include_once(LIBRARY_PATH . '/src/Reader/Exception/IteratorNotRewindableException.php');
    include_once(LIBRARY_PATH . '/src/Reader/Exception/NoSheetsFoundException.php');
    include_once(LIBRARY_PATH . '/src/Reader/Exception/ReaderNotOpenedException.php');
    include_once(LIBRARY_PATH . '/src/Reader/Exception/SharedStringNotFoundException.php');
    include_once(LIBRARY_PATH . '/src/Reader/Exception/XMLProcessingException.php');


    include_once(LIBRARY_PATH . '/src/Reader/ODS/Options.php');
    include_once(LIBRARY_PATH . '/src/Reader/ODS/Reader.php');
    include_once(LIBRARY_PATH . '/src/Reader/ODS/RowIterator.php');
    include_once(LIBRARY_PATH . '/src/Reader/ODS/Sheet.php');
    include_once(LIBRARY_PATH . '/src/Reader/ODS/SheetIterator.php');
    include_once(LIBRARY_PATH . '/src/Reader/ODS/Helper/CellValueFormatter.php');
    include_once(LIBRARY_PATH . '/src/Reader/ODS/Helper/SettingsHelper.php');

    include_once(LIBRARY_PATH . '/src/Reader/Wrapper/XMLInternalErrorsHelper.php');
    include_once(LIBRARY_PATH . '/src/Reader/Wrapper/XMLReader.php');

    
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Options.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Reader.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/RowIterator.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Sheet.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/SheetHeaderReader.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/SheetIterator.php');

    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Helper/CellHelper.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Helper/CellValueFormatter.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Helper/DateFormatHelper.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Helper/DateIntervalFormatHelper.php');

    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SharedStringsManager.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SheetManager.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/StyleManagerInterface.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/StyleManager.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/WorkbookRelationshipsManager.php');

    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SharedStringsCaching/CachingStrategyFactoryInterface.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SharedStringsCaching/CachingStrategyInterface.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SharedStringsCaching/CachingStrategyFactory.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SharedStringsCaching/FileBasedStrategy.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SharedStringsCaching/InMemoryStrategy.php');
    include_once(LIBRARY_PATH . '/src/Reader/XLSX/Manager/SharedStringsCaching/MemoryLimit.php');

    include_once(LIBRARY_PATH . '/src/Writer/WriterInterface.php');
    include_once(LIBRARY_PATH . '/src/Writer/AbstractWriter.php');
    include_once(LIBRARY_PATH . '/src/Writer/AbstractWriterMultiSheets.php');
    include_once(LIBRARY_PATH . '/src/Writer/AutoFilter.php');

    include_once(LIBRARY_PATH . '/src/Writer/Common/AbstractOptions.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/ColumnWidth.php');

    include_once(LIBRARY_PATH . '/src/Writer/Common/Creator/WriterFactory.php');

    include_once(LIBRARY_PATH . '/src/Writer/Common/Entity/Sheet.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Entity/Workbook.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Entity/Worksheet.php');

    include_once(LIBRARY_PATH . '/src/Writer/Common/Helper/CellHelper.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Helper/FileSystemWithRootFolderHelperInterface.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Helper/ZipHelper.php');

    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/WorkbookManagerInterface.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/WorksheetManagerInterface.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/AbstractWorkbookManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/RegisteredStyle.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/SheetManager.php');

    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/Style/StyleManagerInterface.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/Style/AbstractStyleManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/Style/AbstractStyleRegistry.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/Style/PossiblyUpdatedStyle.php');
    include_once(LIBRARY_PATH . '/src/Writer/Common/Manager/Style/StyleMerger.php');

    include_once(LIBRARY_PATH . '/src/Writer/CSV/Options.php');
    include_once(LIBRARY_PATH . '/src/Writer/CSV/Writer.php');

    include_once(LIBRARY_PATH . '/src/Writer/Exception/WriterException.php');
    include_once(LIBRARY_PATH . '/src/Writer/Exception/WriterNotOpenedException.php');
    include_once(LIBRARY_PATH . '/src/Writer/Exception/InvalidSheetNameException.php');
    include_once(LIBRARY_PATH . '/src/Writer/Exception/SheetNotFoundException.php');
    include_once(LIBRARY_PATH . '/src/Writer/Exception/WriterAlreadyOpenedException.php');
   
    include_once(LIBRARY_PATH . '/src/Writer/Exception/Border/InvalidNameException.php');
    include_once(LIBRARY_PATH . '/src/Writer/Exception/Border/InvalidStyleException.php');
    include_once(LIBRARY_PATH . '/src/Writer/Exception/Border/InvalidWidthException.php');

    include_once(LIBRARY_PATH . '/src/Writer/ODS/Manager/Style/StyleManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/ODS/Manager/Style/StyleRegistry.php');
    include_once(LIBRARY_PATH . '/src/Writer/ODS/Manager/WorkbookManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/ODS/Manager/WorksheetManager.php');

    include_once(LIBRARY_PATH . '/src/Writer/ODS/Helper/BorderHelper.php');
    include_once(LIBRARY_PATH . '/src/Writer/ODS/Helper/FileSystemHelper.php');
    include_once(LIBRARY_PATH . '/src/Writer/ODS/Options.php');
    include_once(LIBRARY_PATH . '/src/Writer/ODS/Writer.php');


    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Manager/CommentsManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Manager/SharedStringsManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Manager/WorkbookManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Manager/WorksheetManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Manager/Style/StyleManager.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Manager/Style/StyleRegistry.php');

    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Entity/SheetView.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/MergeCell.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Options.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Writer.php');

    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Helper/BorderHelper.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Helper/DateHelper.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Helper/DateIntervalHelper.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Helper/FileSystemHelper.php');

    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Options/HeaderFooter.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Options/PageMargin.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Options/PageOrientation.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Options/PageSetup.php');
    include_once(LIBRARY_PATH . '/src/Writer/XLSX/Options/PaperSize.php');


    // function includeFiles($directory)
    // {
    //     $common_dir = $common_dir = scandir($directory);
    //     $files = [];
    //     foreach ($common_dir as $key => $filename) {
    //         if (strpos($filename, '.php') !== FALSE) {
    //             // include_once($directory.$filename);
    //             echo $directory.$filename . "<br>";
    //         }

    //         if (is_dir($filename)) {
    //             $common_dir = scandir($directory.$filename);
    //             foreach ($common_dir as $key => $file) {
    //                 if (strpos($file, '.php') !== FALSE) {
    //                     // include_once($directory.'/'.$filename .'/'.$file);
    //                     echo "$directory.'/'.$filename .'/'.$file <br>";
    //                 }
    //             }
    //         }
    //     }
    // }
    
    // $main_directory = LIBRARY_PATH . '/src/';
    
    // includeFiles($main_directory.'Writer/XLSX/Options/');
    // includeFiles($main_directory.'Common/Entity/');
    