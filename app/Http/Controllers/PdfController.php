<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Barryvdh\DomPDF\Facade\PDF;

class PdfController extends Controller
{
    public function imprimirEstudiantes(Request $request){
        $estudiante=Estudiante::orderBy('id','ASC')->get(); 
        $pdf = PDF::loadView('pdf.estudiantesPDF',['estudiante' => $estudiante ]);
        $pdf->setPaper('carta', 'landscape');

        return $pdf->stream(); 
    }
}
