<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class MostarEmpleados extends Component
{
    public Empleado $empleado;
    public function render()
    {
        $empleado = Empleado::all();
        return view('livewire.empleados.mostar-empleados',compact($empleado));
    }
}
