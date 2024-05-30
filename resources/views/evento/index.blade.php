@extends ('layouts.app')
@section('content')

<div class="container">
    <div id="agenda">
        calendario
    </div>


    <!-- Modal trigger button -->
    <button
      type="button"
      class="btn btn-primary btn-lg"
      data-bs-toggle="modal"
      data-bs-target="#myModal"
    >
      Launch
    </button>
    
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div
      class="modal fade"
      id="myModal"
      tabindex="-1"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      
      role="dialog"
      aria-labelledby="modalTitleId"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titulo">
              
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form id="formulario">
            <div class="modal-body">
                <div class="form-floating mb-3">
                  <input type="date" class="form-control" id="start">
                  <label for="start" class="form-label">Fecha</label>
                </div>
            </div>
          </form>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Optional: Place to the bottom of scripts -->
    <script>
      const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
      );
    </script>
    

    {{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Evento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="eventoFecha" class="form-control" readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div> --}}


<!-- <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
    </div> 
    <div class="modal-body">
        <div class="form-group">
          <label for=""></label>
          <input type="text" class="form-control" name="" id="" aria-describedby="">
        </div>
    </div>

  </div>
</div>
</div> -->
@endsection