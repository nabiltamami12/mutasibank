<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
class MutasiExport implements FromArray, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
  
      
protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function headings(): array
    {
        return ["No","Tanggal", "Nominal Mutasi", "Tipe Mutasi" , "Nominal Akhir" , "Bank" , "Tanggal Akses Mutasi" ,"ID Nasabah"];
    }
    public function array(): array
    {
        return $this->data;
    }

   
}
