<div>
    <div class="row">
    <div class="col-6 mx-auto text-center">
        <div class="text-center card bg-secondary">
        <div class="card-header">
            <h1>Empleado {{$empleado->id}} </h1>
        </div>
        <div class="card-body bg-secondary">
            <p style="font-size:19px;">
            Nombre:  <br>{{$empleado->primer_nombre}} {{$empleado->segundo_nombre}} {{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}
            <br><br> Sexo:  <br>{{$empleado->sexo}}
            <br><br> Fecha de Nacimiento:  <br>{{$empleado->fecha_nacimiento}}
            <br><br> Puesto:  <br>{{$empleado->puesto_trabajo}}
            <br><br> CURP:  <br>{{$empleado->curp}}
            <br><br> RFC:  <br>{{$empleado->rfc}}
            <br><br> Estado:  <br>{{$empleado->estado}}
            <br><br> CP:  <br>{{$empleado->codigo_postal}}
            <br><br> Salario:  <br>{{$empleado->salario}}
            <br><br> Correo:  <br>{{$empleado->email}}
            <br><br> Horario:  <br>{{$empleado->horario_trabajo}}
            <br><br> Area de Trabajo:  <br>{{$empleado->area_trabajo}}
            <br><br> Facebook:  <br>{{$empleado->facebook}}
            <br><br> Telefono:  <br>{{$empleado->telefono}}
        </p>

        </div>
        <div class="card-footer text-muted">
        <a href="{{route('empleados.index')}}"  class="btn btn-info  ">Regresar</a>
    </div>
    </div>
</div>
</div>
</div>
