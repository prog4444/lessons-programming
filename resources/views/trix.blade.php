@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
<form method="post" action={{ route('store') }}>
    @csrf
    
    <input id="title" type="hidden" name="title" value="" />
    <trix-editor input="title" class="trix-content"></trix-editor>
    <input type="submit" name="submit" value="Submit" />
      
    
   
</form>

{{ __('You are logged in!') }}
                 
</div>
</div>
</div>
</div>
</div>
   
@endsection
 
    
