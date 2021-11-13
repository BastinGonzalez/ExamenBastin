
<div class="row bg-secondary">
    <div class="col-6 mx-auto   bg-secondary">
        <div class="form-group ">
          <label>Primer Nombre:</label>
          <input wire:model = "empleado.primer_nombre"  class="form-control">
          @error('empleado.primer_nombre') <span class="text-danger">{{$message}}</span> @enderror

        </div>
        <div class="form-group">
            <label>Segundo Nombre:</label>
            <input wire:model = "empleado.segundo_nombre" type="text" class="form-control">
            @error('empleado.segundo_nombre') <span class="text-danger">{{$message}}</span> @enderror

          </div>
          <div class="form-group">
            <label>Apellido Materno:</label>
            <input wire:model = "empleado.apellido_paterno" type="text" class="form-control">
            @error('empleado.apellido_paterno') <span class="text-danger">{{$message}}</span> @enderror
          </div>
          <div class="form-group">
            <label>Apellido Materno</label>
            <input wire:model = "empleado.apellido_materno" type="text" class="form-control">
            @error('empleado.apellido_materno') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <select type="text" wire:model = "empleado.sexo"  class="form-control">
                <option>Femenino</option>
                <option>Masculino</option>
                <option>No Especificado</option>
              </select>
            @error('empleado.sexo') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Estado</label>
            <input wire:model = "empleado.estado" type="text" class="form-control">
            @error('empleado.estado') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Fecha de Nacimiento</label>
            <input wire:model = "empleado.fecha_nacimiento" type="date" class="form-control">
            @error('empleado.fecha_nacimiento') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Telefono</label>
            <input wire:model = "empleado.telefono" type="number" class="form-control">
            @error('empleado.telefono') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Correo Electronico</label>
            <input wire:model = "empleado.email" type="text" class="form-control">
            @error('empleado.email') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Puesto De Trabajo</label>
            <input wire:model = "empleado.puesto_trabajo" type="text" class="form-control">
            @error('empleado.puesto_trabajo') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>CURP</label>
            <input wire:model = "empleado.curp" type="text" class="form-control">
            @error('empleado.curp') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>RFC</label>
            <input wire:model = "empleado.rfc" type="text" class="form-control">
            @error('empleado.rfc') <span class="text-danger">{{$message}}</span> @enderror
        </div>

        <div class="form-group">
            <label>Codigo Postal</label>
            <input wire:model = "empleado.codigo_postal" type="number" class="form-control">
            @error('empleado.codigo_postal') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Salario</label>
            <input wire:model = "empleado.salario" type="number" class="form-control">
            @error('empleado.salario') <span class="text-danger">{{$message}}</span> @enderror
        </div>

        <div class="form-group">
            <label>Horario de Trabajo</label>
            <input wire:model = "empleado.horario_trabajo" type="text" class="form-control">
            @error('empleado.horario_trabajo') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Area de Trabajo</label>
            <input wire:model = "empleado.area_trabajo" type="text" class="form-control">
            @error('empleado.area_trabajo') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input wire:model = "empleado.facebook" type="text" class="form-control">
            @error('empleado.facebook') <span class="text-danger">{{$message}}</span> @enderror
        </div>



    </div>
</div>
