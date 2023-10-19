@extends('layouts.master')

@section('title')
    Event
@endsection

@section('content')



<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> EVENTS  </h4>

          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
         
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>NO.</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>ORGANISER</th>
                <th>VENUE</th>
                <th>DATE</th>
                {{-- <th>EDIT</th>
                <th>DELETE</th> --}}
              </thead>
              <tbody>
                @foreach ($event as $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->title}}</td>
                  <td>{{$data->description}}</td>
                  <td>{{$data->organiser}}</td>
                  <td>{{$data->venue}}</td>
                  <td>{{$data->date}}</td>                  
                  {{-- <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td> --}}
                </tr>
                @endforeach
                

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}
</script>
  
@endsection

@section('scripts')

@endsection