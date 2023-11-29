<?php

namespace App\Trait;

use App\Exports\ExportUsers;
use Maatwebsite\Excel\Facades\Excel;

trait ExportTableTrait{


	public function exportDataToXlsx($table_headings, $table_data, $file_name)
	{

		if(is_array($table_data)){
            $table_data = collect($table_data);
        }

        return Excel::download(new ExportUsers($table_headings, $table_data), $file_name);
	}


	// public function exportDataToCSV($table_headings, $table_data, $file_name)
	// {
	// 	if(is_object($table_data)){
    //         $table_data = $table_data->toArray();
    //     }
        
    //     $file = fopen($file_name, 'w');

    //     if ($file === false) {
    //         echo "Error opening file";
    //         exit;
    //     }

    //     fputcsv($file, $table_headings);

    //     foreach($table_data as $row){

    //         fputcsv($file, $row);
    //     }

    //     fclose($file);

    //     header('Content-Disposition: attachment; filename="' . $file_name . '"');
    //     readfile($file_name);
	// }



}




?>