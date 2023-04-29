@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard delete-section">
                    <div class="dash-heading">
                        <h3 style="color: red;">Delete Plant</h3>
                    </div>
                    <div class="current-date">
                        
                        <span>Plant Name : </span>
                        <span>{{$plant->name}}</span>
                        
                    </div>
                    <div class="current-date">
                        
                        <span>Category Name : </span>
                        <span>{{$plant->category->name}}</span>
                        
                    </div>
                    <div class="current-date">
                        
                        <span>Price : </span>
                        <span>{{$plant->price}}</span>
                        
                    </div>
                    
                    <form action="{{ route('plants.destroy', $plant->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                        <h4>Are you sure to delete this Plant ?</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                              I am aware of the consequences of deleteing this plant.
                            </label>
                          </div>
                        <button class="del-btn">Delete</button>
                    </form>

                </div>
               
        @endsection