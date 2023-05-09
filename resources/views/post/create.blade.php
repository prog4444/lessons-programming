@extends('layouts.main')
@section('content')

<div class="container-fluid p-4">
  <div class="row justify-content-md-center">
      <div class="col-md-12">
          <h1 class="text-danger">Masala Add</h1>
         
            <form action="{{ route('masala.store') }}" method="post">
              @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="summernote" placeholder="Text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            </form>
      </div>
  </div>

</div>




@endsection


