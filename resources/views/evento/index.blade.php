@extends('layouts.layout')
@section('content')

<div class="container" style="width: 90%">
    <div id="agenda">
        <!-- El calendario se renderizará aquí -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <input type="text" id="eventoFecha" class="form-control" readonly> --}}

                    <form action="">

                      {{-- {!! csrf_field() !!} --}}

                        <div class="form-group">
                          <label for="id">ID:</label>
                          <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                          <label for="title">Título</label>
                          <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el título del evento">
                          <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                          <label for="descripcion">Descripción</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="start">start</label>
                          <input type="date" id="start" name="start" class="form-control">
                          <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                          <label for="end">end</label>
                          <input type="date" id="end" name="end" class="form-control">
                          <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                    <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
