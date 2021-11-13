<div class="container">
    <h1 class="text-center float-center mt-3">TRABAJADORES</h1>
    <a   type="button" class="btn btn-success mt-3 mb-3 float-right" href="{{route('empleados.create')}}"><i class="fas fa-plus-square" ></i></a>

    <table class="table ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Segundo Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Sexo</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Estado</th>
            <th scope="col">Facebook</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody class="text-white">
            @foreach ($empleados as $empleado)
          <tr>
            <th scope="row">{{$empleado->id}}</th>
            <td>{{$empleado->primer_nombre}}</td>
            <td>{{$empleado->segundo_nombre}}</td>
            <td>{{$empleado->apellido_paterno}}</td>
            <td>{{$empleado->apellido_materno}}</td>
            <td>{{$empleado->sexo}}</td>
            <td>{{$empleado->fecha_nacimiento}}</td>
            <td>{{$empleado->estado}}</td>
            <td>{{$empleado->curp}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>
                <a type="button" class="btn btn-primary  btn-sm" href="{{route('empleados.mostrar',$empleado)}}"><i class="fas fa-eye"></i></a>
                <a type="button" class="btn btn-success btn-sm " href="{{route('empleados.editar',$empleado)}}"><i class="fas fa-edit"></i></i></a>
                <a type="button" class="btn btn-danger   btn-sm" href="{{route('empleados.eliminar',$empleado)}}"><i class="fas fa-trash-alt"></i></a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      {{$empleados->links()}}

    </div>
