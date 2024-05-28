@extends ('layouts.app')
@section('content')

<div class="container">
    <div id="agenda">
        calendario
    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#evento">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>


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