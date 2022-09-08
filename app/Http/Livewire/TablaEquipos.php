<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Equipo;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;



class TablaEquipos extends Component
{

    use WithPagination;


    public function render()
    {
        //$equipos = Equipo::orderBy('Secuencial', 'asc')->paginate(10);
        $equipos= DB::table('equipos as e')
        ->join('responsable as r', 'e.CedulaResponsable','=', 'r.Cedula')
        ->join('departamento as d', 'd.Secuencial', '=', 'r.SecuencialDepartamento')
        ->orderby('d.NombreDepartamento', 'asc')
        ->select('e.Secuencial', 'd.NombreDepartamento', DB::raw("CONCAT(r.PrimerNombre, ' ',r.ApellidoPaterno, ' ', r.ApellidoMaterno ) AS NombreCompleto"), 'e.Nombre', 'e.DireccionIP')
        ->get();
        return view('livewire.tabla-equipos', compact('equipos'));
    }

    public function mostrar($id)
    {
        $equipo = DB::table('equipos as e')
        ->where('e.Secuencial', $id)
        ->first();
        
        return view('livewire.detalle', compact('equipo'));
    }
}
