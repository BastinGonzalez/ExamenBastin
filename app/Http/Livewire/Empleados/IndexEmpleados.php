<?php

namespace App\Http\Livewire\Empleados;

use App\Models\Empleado;
use Livewire\Component;

class IndexEmpleados extends Component
{
    protected $paginationTheme='boostrap';
    public function render()
    {
        $empleados = Empleado::paginate(10);
        return view('livewire.empleados.index-empleados',compact('empleados'));
    }
}
