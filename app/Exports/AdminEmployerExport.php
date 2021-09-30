<?php

namespace App\Exports;

use App\Models\Employer;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdminEmployerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employer::all();
    }
}
