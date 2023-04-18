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
                        <span>************</span>
                        
                    </div>
                    <div class="current-date">
                        
                        <span>Number of plants : </span>
                        <span>25</span>
                        
                    </div>
                    <div class="current-date">
                        <span>Creation Date : </span>
                        <span>25</span>
                        <span>Feb</span>
                        <span>2023 </span>
                        
                    </div>
                    <form>
                        <h4>Are you sure to delete this Category?</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              I am aware of the consequences of deleteing this category. 
                            </label>
                          </div>
                        <button class="del-btn">Delete</button>
                    </form>

                </div>
                @endsection
