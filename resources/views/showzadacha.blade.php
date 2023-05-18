@extends('layouts.app')
@section('content')

{{-- menu --}}
@foreach($zadacha as $zadachas)
<div class="container" >
    <div style="width: 15%; position: fixed; top: 100px; left: 120px;  height: 100%; overflow-y: scroll;">
    <div class="collapse" id="getting-started-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/getting-started/introduction/" class="d-inline-flex align-items-center rounded">Introduction</a></li>
            <li><a href="/docs/5.0/getting-started/download/" class="d-inline-flex align-items-center rounded">Download</a></li>
            <li><a href="/docs/5.0/getting-started/contents/" class="d-inline-flex align-items-center rounded">Contents</a></li>
            <li><a href="/docs/5.0/getting-started/browsers-devices/" class="d-inline-flex align-items-center rounded">Browsers &amp; devices</a></li>
    
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false">
        Масалахо сатхи 1
      </button>
    
      <div class="collapse" id="customize-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="{{route('showzadachaOne')}}" class="d-inline-flex align-items-center rounded menu">Мисоли 1</a></li>
            <li><a href="{{route('showzadachaTho')}}" class="d-inline-flex align-items-center rounded menu">Мисоли 2</a></li>
            <li><a href="#" class="d-inline-flex align-items-center rounded menu">Мисоли 3</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded menu">Мисоли 4</a></li>
            <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 5</a></li>
            <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 6</a></li>
            <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded menu">Мисоли 7</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded menu">Мисоли 8</a></li>
            <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 9</a></li>
            <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 10</a></li>


        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false">
        Масалахо сатхи 2
      </button>
    
      <div class="collapse" id="layout-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
          <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 1</a></li>
          <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 2</a></li>
          <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded menu">Мисоли 3</a></li>
          <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded menu">Мисоли 4</a></li>
          <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 5</a></li>
          <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 6</a></li>
          <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded menu">Мисоли 7</a></li>
          <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded menu">Мисоли 8</a></li>
          <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 9</a></li>
          <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 10</a></li>

        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
        Масалахо сатхи 3
      </button>
    
      <div class="collapse" id="content-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
          <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 1</a></li>
          <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 2</a></li>
          <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded menu">Мисоли 3</a></li>
          <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded menu">Мисоли 4</a></li>
          <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 5</a></li>
          <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 6</a></li>
          <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded menu">Мисоли 7</a></li>
          <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded menu">Мисоли 8</a></li>
          <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Мисоли 9</a></li>
          <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Мисоли 10</a></li>
        </ul>
      </div>
    </li>
    </div>
    
    {{-- menu --}}
    








<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px; margin-left:1rem;">
                <div class="card-header">Masalaho</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p style="text-align: center; font-size:16px;">{{ $zadachas->title }}</p>
                    <p>{!!$zadachas->description!!}</p>

                    


                    
                    <div class="row mt-6 ">
                      <div class="row">
                        <div class="col-12">
                
                            <!-- Card -->
                            <div class="">
                                <div class="card-body">
                                    <div class="row">
                                      
                                    </div>
                                    <div class="row">
                
                                        <form action="{{ route('answer.store') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12">
                                                <!-- Input -->
                                                <div class="mt-1">
                                                    <label class="sr-only">Савол...</label>
                                                    <textarea class="form-control form-control-flush" name="text"   rows="5" placeholder="Вопрос" maxlength="1000"></textarea>
                                                    <input type="hidden" value="{{$zadachas->id}}" name="zadacha_id">
                                                </div>
                                              
                                            </div>
                                            <div class="col-12">
                                                <!-- Icons -->
                                                <button type="submit" class="btn btn-primary">
                                                    Сабткунӣ
                                                </button>
                                            </div>
                                        </form>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          @foreach($comments as $comment)
                          <!-- Card -->
                          <div class="card" style="width: 87%; margin-left: 5%;">
                              <div class="card-body">
                                  <!-- Header -->
                                  <div class="mb-3">
                                      <div class="row align-items-center">
                                          <div class="col ml-n2">
              
                                              <!-- Title -->
                                              <h4 class="mb-1">
                                                  {{$comment->user->name}}
                                              </h4>
                                              <!-- Time -->
                                              <p class="card-text small text-muted">
                                                  <span class="fe fe-clock"></span> <time >{{$comment->created_at}}</time>
                                              </p>
              
                                          </div>
                                          <div class="col-auto">
                                              <a href="{{route('comments.list',$comment->id)}}" class="btn btn-primary">Ҷавоб</a>
                                          </div>
              
                                      </div> <!-- / .row -->
                                  </div>
              
                                  <!-- Text -->
                                
                                <pre style="text-size:16px">{{$comment->text}}</pre>
                                
                                
                                 
              
              
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
                                          </div>
                                      </div> <!-- / .row -->
                                  </div>
              
                                  <!-- Divider -->
                                  <hr>
                              </div>
                          </div>
                              @endforeach
                      </div>
                  </div>
                  <div class="d-flex justify-content-center">
                      {!! $comments->onEachSide(5)->links() !!}
                  </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach   
@endsection