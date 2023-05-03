@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible" style="margin:10px">
  {{ session()->get('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
@endif
                <div class="dashboard">
                    <div class="dash-heading">
                        <h3>Users</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span >&nbsp;Last Update, </span>
                        <span >25</span>
                        <span >Feb</span>
                        <span >2023, </span>
                        <span >21:15</span>
                    </div>
                    <button class="add-btn" onclick="location.href='{{ route('users.create') }}'">+ Add New User</button>
                    <div class="table-tag">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone </th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $id = 0; ?>
                            @foreach($users as $user)
                              <tr>
                                <th scope="row">{{ $id += 1 }}</th>
                                <td>{{$user->first_name . " " . $user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile_number}}</td>
                                <td><a href="{{ route('users.edit', $user->id) }}" class="edit">Edit</a></td>
                                <td><a href="{{ route('users.show', $user->id) }}" class="del">Delete</a></td>
                              </tr>
                              @endforeach
                              
                              
                              
                            </tbody>
                          </table>
                    </div>
                    
            </div>
           
    @endsection
