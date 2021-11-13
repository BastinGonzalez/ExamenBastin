<?php
namespace App\Http\Livewire\Empleados;

class RulesEmpleado{

    public static function Rules(){
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
