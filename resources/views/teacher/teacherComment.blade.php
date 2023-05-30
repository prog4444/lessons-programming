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

                    {{-- {{ __('You are logged in!') }} --}}
                 

    <div class="row">
        <div class="col-12">

            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Header -->
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col ml-n2">
                                <!-- Title -->
                                <h4 class="mb-1">
                                    {{$parent->user->name}}
                                </h4>
                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <span class="fe fe-clock"></span> <time>{{$parent->created_at}}</time>
                                </p>

                            </div>
                            <div class="col-auto">
                                <a href="{{route('showzadacha')}}" class="btn btn-primary">Назад</a>
                            </div>
                        </div> <!-- / .row -->
                    </div>

                    <!-- Text -->
                   
                    <pre>{{$parent->text}}</pre>
                  

                    <div class="mb-3">
                        <div class="row">
                            <div class="col">

                                <!-- Buttons -->
                                <a href="#!" class="btn btn-sm btn-white">
                                    😬 1
                                </a>
                                <a href="#!" class="btn btn-sm btn-white">
                                    👍 2
                                </a>
                                <a href="#!" class="btn btn-sm btn-white">
                                    Add Reaction
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>

                    <!-- Divider -->
                    <hr>

                    <!-- Comments -->
                    <div class="comment mb-3">
                        @foreach($comments as $comment)

                                    <div class="row">
                                        <div class="col">

                                            <!-- Title -->
                                            <h5 class="comment-title">
                                                {{$comment->user->name}}
                                            </h5>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Time -->
                                            <time class="comment-time">
                                                {{$comment->created_at}}
                                            </time>

                                        </div>
                                    </div> <!-- / .row -->
                                    <!-- Text -->
                                    
                                     <pre>{{$comment->text}}</pre>
                                    

                             
                            <hr>
                            @endforeach
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <form action="{{ route('comments.store') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                        <input name="parent_id" hidden value="{{$parent->id}}">
                        <div class="col ml-n2">
                            <!-- Input -->
                            <div class="mt-1">
                                <label class="sr-only">Ваш коммент</label>
                                <textarea class="form-control form-control-flush" name="text"   rows="3" placeholder="Вопрос" maxlength="1000"></textarea>
                            </div>
            
                        </div>
                        <div class="col-auto align-self-end">
                            <!-- Icons -->
                                <button type="submit" class="text-reset">
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
