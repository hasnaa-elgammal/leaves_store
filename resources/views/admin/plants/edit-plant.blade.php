@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard add-plant">
                    <div class="dash-heading">
                        <h3>Edit Plant</h3>
                    </div>
                    <div class="current-date">
                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                        <span>&nbsp;Last Update, </span>
                        <span>25</span>
                        <span>Feb</span>
                        <span>2023, </span>
                        <span>21:15</span>
                    </div>
                    <form>
                        <input type="text" placeholder="Plant Name" class="input-field" />
                        <select class="form-select form-select-sm select-field" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select> 
                        <input type="number" placeholder="Price" class="input-field" />
                        <input type="number" placeholder="Plants In stock" class="input-field" />
                        <div class="top">
                            <div class="standard add-image">
                                <p>Choose Category Image</p>
                                <div class="in">
                                    <input type="file" accept=".png,.jpg,.jpeg,.gif" name="uploadfile" id="img"
                                        style="display:none;" onchange="javascript:showoneimg()" />
                                    <label for="img">Browse</label>
                                </div>


                            </div>
                            
                        </div>
                        <div>
                            <ul id="images">

                            </ul>
                        </div>

                        <button class="edit-btn">Edit</button>
                    </form>

                </div>
               
        @endsection
