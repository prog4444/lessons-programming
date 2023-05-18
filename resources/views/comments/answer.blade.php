@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px; ">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




    <div class="row">
        <div class="col-12">

            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                       
                    </div>
                    <div class="row">

                        <form action="{{ route('answer.store') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <!-- Input -->
                                <div class="mt-1">
                                    <label class="sr-only">Вопрос...</label>
                                    <textarea class="form-control form-control-flush" name="text"   rows="5" placeholder="Вопрос" maxlength="1000"></textarea>
                                </div>
                              
                            </div>
                            <div class="col-12">
                                <!-- Icons -->
                                <button type="submit" class="text-reset btn-primary">
                                    Сохронить
                                </button>
                            </div>
                        </form>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>
</div>
</div>
@endsection
