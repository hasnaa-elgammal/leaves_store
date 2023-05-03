@extends('layout')

@section('title')
    Add Category
@endsection
 

@section('content')
@if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    
                <div class="dashboard">
                    <div class="dash-heading">
                        <h3>Add Category</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span>&nbsp;Last Update, </span>
                        <span>25</span>
                        <span>Feb</span>
                        <span>2023, </span>
                        <span>21:15</span>
                    </div>
                    <form  action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="text" placeholder="Category Name" class="input-field"  name="name"/>
                        <input type="number" placeholder="Number of plants" class="input-field" name="num_of_plants" />
                        <div class="top">
                            <div class="standard add-image">
                                <p>Choose Category Image</p>
                                <div class="in">
                                    <input type="file" accept=".png,.jpg,.jpeg,.gif" name="uploadfile" id="img" required 
                                        style="display:none;" onchange="javascript:showoneimg()" />
                                    <label for="img">Browse</label>
                                </div>


                            </div>
                            
                        </div>
                        <div>
                            <ul id="images">

                            </ul>
                        </div>
                        

                        <button class="add">Add</button>
                    </form>

                </div>
                @endsection