<div>
    <div class="text-center card mx-auto bg-secondary" style="width: 26rem;">
        <img src="https://tienda.elsardinero.com/wp-content/uploads/2017/09/user.png" class="card-img-top" alt="...">
        <div class="card-body bg-secondary">
          <h5 class="card-title text-dark">{{$empleado->primer_nombre}} {{$empleado->segundo_nombre}} {{$empleado->apellido_materno}} {{$empleado->apellido_paterno}}</h5>
          <p class="card-text text-dark">{{$empleado->puesto_trabajo}}</p>
          <div class="card-footer text-muted">
          <button wire:click="eliminar" class="btn btn-danger">Eliminar</button>
          <a href="{{route('empleados.index')}}" class="btn btn-secondary">Cancelar</a>
          </div>
        </div>
      </div>
</div>
