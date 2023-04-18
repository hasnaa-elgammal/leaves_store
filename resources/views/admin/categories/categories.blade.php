
@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard">
                    <div class="dash-heading">
                        <h3>Categories</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span >&nbsp;Last Update, </span>
                        <span >25</span>
                        <span >Feb</span>
                        <span >2023, </span>
                        <span >21:15</span>
                    </div>
                    <button class="add-btn" onclick="location.href='{{ route('categories.create') }}'">+ Add New Category</button>
                    <div class="table-tag">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Image</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Number of plants</th>
                                <th scope="col">Creation Date</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $id = 0; ?>
                              
                           @foreach($categories as $category):
                              <tr>
                                <th scope="row">{{ $id += 1 }}</th>
                                <td><img src="{{ asset('assets/admin/img/')}}" width="75"/></td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->num_of_plants}}</td>
                                <td>{{$category->created_at}}</td>
                                <td><a href="{{ route('categories.edit', $category->id) }}" class="edit">Edit</a></td>
                                <td><a href="{{ route('categories.show', $category->id) }}" class="del">Delete</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                    
            </div>
           
    @endsection
