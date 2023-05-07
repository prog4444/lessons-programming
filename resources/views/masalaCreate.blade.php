@extends('layouts.app')

@section('content')

    <div class="container-fluid p-4 m-5" >
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h1 class="text-danger">Maasala Add</h1>
                <form action="{{ route('masala.store')}}" method="POST">
                    @csrf
                    <label for="">Title:</label>
                    <input type="text" class="form-control" name="title">
                    <label for="">Description:</label>
                    <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </form>
            </div>
        </div>
     
    </div>


@endsection
    
   
   



