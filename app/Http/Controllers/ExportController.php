<?php

namespace App\Http\Controllers;

use App\Exports\AdminEmployerExport;
use App\Exports\AdminStudentExport;
use App\Models\Employer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function employerExport()
    {
        return Excel::download(new AdminEmployerExport, 'employers-record.xlsx');
    }

    public function studentExport()
    {
        return Excel::download(new AdminStudentExport, 'students-record.xlsx');
    }
}
