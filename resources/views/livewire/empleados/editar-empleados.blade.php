<div>
    <form wire:submit.prevent="editar ">

    <div class="text-center card bg-secondary">
        <div class="card-header bg-secondary">
            Editar Empleado
        </div>
        <div class="card-body bg-secondary">
            @include('livewire.empleados.formulario')
        </div>
        <div class="card-footer text-muted">
        <button wire:click="editar"  class="btn btn-success ">Editar</button>
        <a href="{{route('empleados.index')}}"  class="btn btn-secondary  ">Cancelar</a>
    </div>
    </div>

</form>
</div>
