<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\ExportUsers;
use App\Trait\ExportTableTrait;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    use ExportTableTrait;

    public function exportToXlsx()
    {
        $table_headings = [
            'ID',
            'Name',
            'Email',
            'Password',
        ];

        $table_data = User::select([
            'id',
            'name',
            'email',
            'password'
        ])->get();

        $file_name = 'users.xlsx';

        return $this->exportDataToXlsx($table_headings, $table_data, $file_name);

    }





    // public function exportToCSV()
    // {
    //     $table_headings = [
    //         'ID',
    //         'Name',
    //         'Email',
    //         'Password',
    //     ];

    //     $table_data = User::select([
    //         'id',
    //         'name',
    //         'email',
    //         'password'
    //     ])->get();

    //     $file_name = 'users.csv';

    //     $this->exportDataToCSV($table_headings, $table_data, $file_name);

    // }


    
}// End of class
