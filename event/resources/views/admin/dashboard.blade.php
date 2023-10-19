@extends('layouts.master')

@section('title')
    Users
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Users </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <TH>NAME</TH>
                <TH>PHONE</TH>
                <TH>USER TYPE</TH>
                <TH>EMAIL</TH>
              </thead>
              <tbody>
                {{-- @foreach($aser as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->usertype}}</td>
                    <td>{{$data->phone}}</td>
                </tr>
                @endforeach                 --}}
                <tr>
                  <td>1</td>
                  <td>Kshitij</td>
                  <td>8951526990</td>
                  <td>admin</td>
                  <td>4nm21is069@nmamit.in</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>bruno</td>
                  <td>6366091636</td>
                  <td>NULL</td>
                  <td>xyz@gmail.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    
@endsection