@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
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
@endsection
