@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 position-relative">
            <div class="row">
                <div class="col-md-4 bg-sucess sidebar">
                    <ul>
                        <li><a href="">
                                <h4>Manage employee & Rooms</h4>
                            </a></li>
                            <li><a href="/add-employee">Add Employee</a></li>
                        <li><a href="/manageemployee">Manage Employee</a></li>
                        <li><a href="/add-room">Add Room</a></li>
                        <li><a href="/manage-room">Manage Rooms</a></li>
                        <li><a href="">Manage Rooms</a></li>
                        <li><a href="">Delete Rooms</a></li>
                        <li><a href="">Edit Rooms</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="card-header active text-white" style="background-color:rgba(20,0,0,0.5)!important">
                        <h2>manage employee here</h2>
                    </div>
                    <div class="card-body>">
                        
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">username</th>
      <th scope="col">name</th>
      <th scope="col">mobile</th>
      
      <th scope="col">gender</th>
      <th scope="col">address</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->username}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->mobile}}</td>
      <td>{{$row->gender}}</td>
      <td>{{$row->address}}</td>
      <td><a href='{{URL("/manage-employee/".$row->id)}}'><span class ='bi bi-trash text-white'></span></a></td>

      <td>@mdo</td>
    </tr>
  @endforeach
  </tbody>
</table>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection