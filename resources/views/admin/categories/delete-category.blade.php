@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard delete-section">
                    <div class="dash-heading">
                        <h3 style="color: red;">Delete Category</h3>
                    </div>
                    <div class="current-date">
                        
                        <span>Category Name : </span>
                        <span>{{$category->name}}</span>
                        
                    </div>
                    <div class="current-date">
                        
                        <span>Number of plants : </span>
                        <span>{{$category->num_of_plants}}</span>
                        
                    </div>
                    <div class="current-date">
                        <span>Creation Date : </span>
                        <span>{{ date('d/m/Y', strtotime($category->created_at)) }}</span>
                     
                        
                    </div>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')

                        <h4>Are you sure to delete this Category?</h4>
                        <div class="form-check">
                            <input class="form-check-input" required type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              I am aware of the consequences of deleteing this category. 
                            </label>
                          </div>
                        <button type="submit"  class="del-btn">Delete</button>
                    </form>

                </div>
                @endsection
