<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = 
    ['id_acudiente','id_curso','tipo_documento','identificacion','nombres','primer_apellido','segundo_apellido','genero','fecha_nacimiento','edad','nombre_padre','nombre_madre','rol','estado'];
}
