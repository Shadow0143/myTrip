<?php
namespace App\Exports;
use App\Models\leadmasters;
use Maatwebsite\Excel\Concerns\FromCollection;
class leadExport implements FromCollection
{
    public function collection() {
       $lead = leadmasters::orderBy('id','DESC')->paginate(999);
       return $lead;
    }
}