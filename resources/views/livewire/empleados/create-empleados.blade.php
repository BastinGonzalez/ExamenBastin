<div>
    <form wire:submit.prevent="crear" class="bg-secondary">

    <div class="text-center card bg-secondary">
        <div class="card-header">
            Nuevo Empleado
        </div>
        <div class="card-body bg-secondary">
            @include('livewire.empleados.formulario')
        </div>
        <div class="card-footer text-muted">
        <button wire:click="crear"  class="btn btn-success ">Crear</button>
        <a href="{{route('empleados.index')}}"  class="btn btn-secondary  ">Regresar</a>
    </div>
    </div>

</form>
</div>
