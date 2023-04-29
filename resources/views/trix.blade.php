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
    <p>
        <input id="x" type="hidden" name="content" value="" />
        <trix-editor input="x" class="trix-content"></trix-editor>
    </p>
    <input type="submit" name="submit" value="Submit" />
</form>

{{ __('You are logged in!') }}
                 
</div>
</div>
</div>
</div>
</div>
   
@endsection
 
    
