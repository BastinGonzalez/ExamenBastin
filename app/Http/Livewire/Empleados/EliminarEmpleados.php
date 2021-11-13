<?php

namespace App\Http\Livewire\Empleados;
use App\Models\Empleado;
use Livewire\Component;

class EliminarEmpleados extends Component
{
    public Empleado $empleado;
    public function render()
    {
        return view('livewire.empleados.eliminar-empleados');
    }
    public function eliminar(){
        $this->empleado->delete();
        return redirect(route('empleados.index'));
    }
}
