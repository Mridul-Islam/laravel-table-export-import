<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUsers implements FromCollection, WithHeadings
{

    protected $table_headings;
    protected $table_data;

    public function __construct($table_headings, $table_data)
    {
        $this->table_headings = $table_headings;
        $this->table_data     = $table_data;
    }



    public function headings(): array
    {
        return $this->table_headings;
    }
    
    public function collection()
    {
        return $this->table_data;
    }

}
