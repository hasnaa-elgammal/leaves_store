@extends('layout')

@section('title')
    Edit Category
@endsection
 

@section('content')
                <div class="dashboard delete-section">
                    <div class="dash-heading">
                        <h3 style="color: red;">Delete Contact</h3>
                    </div>
                    <div class="current-date">
                        
                        <span>Email : </span>
                        <span>{{$contact->email}}</span>
                        
                    </div>
                    <div class="current-date">
                        
                        <span>Message : </span>
                        <span>{{$contact->message}}</span>
                        
                    </div>
                    
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')

                        <h4>Are you sure to delete this Contact?</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" required id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              I am aware of the consequences of deleteing this contact. 
                            </label>
                          </div>
                        <button class="del-btn">Delete</button>
                    </form>

                </div>
                
        @endsection
