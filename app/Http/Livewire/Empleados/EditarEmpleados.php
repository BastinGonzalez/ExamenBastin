<?php

namespace App\Http\Livewire\Empleados;
use App\Models\Empleado;
use Livewire\Component;

class EditarEmpleados extends Component
{
    public Empleado $empleado;
    public function render()
    {
        return view('livewire.empleados.editar-empleados');
    }
    public function editar(){
        $this->validate();
        $this->empleado->save();
        return redirect(route('empleados.index'));
    }
    protected function rules(){
        return RulesEmpleado::Rules();
    }
}
