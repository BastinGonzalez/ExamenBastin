<?php

namespace App\Http\Livewire\Empleados;
use App\Models\Empleado;
use Livewire\Component;

class CreateEmpleados extends Component
{
    public Empleado $empleado;
    public function mount(){
        $this->empleado = new Empleado();
    }
    public function render()
    {
        return view('livewire.empleados.create-empleados');
    }
    public function crear(){
        $this->validate();
        $this->empleado->save();
        return redirect(route('empleados.index'));
    }
    protected function rules(){
        return
            [
                'empleado.primer_nombre' => 'required',
                'empleado.segundo_nombre' => 'nullable',
                'empleado.apellido_paterno' => 'required',
                'empleado.apellido_materno' => 'nullable',
                'empleado.sexo' => 'required',
                'empleado.fecha_nacimiento' => 'required',
                'empleado.puesto_trabajo' => 'required',
                'empleado.curp' => 'required',
                'empleado.rfc' => 'required',
                'empleado.estado' => 'required',
                'empleado.codigo_postal' => 'numeric|required',
                'empleado.salario' => 'numeric|required',
                'empleado.email' => 'required',
                'empleado.horario_trabajo' => 'required',
                'empleado.area_trabajo' => 'required',
                'empleado.facebook' => 'nullable',
                'empleado.telefono' => 'numeric|required'

            ];
    }
}
