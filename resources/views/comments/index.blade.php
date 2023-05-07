@extends('layouts.app')
@section('content')


{{-- menu --}}
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
    Python
  </button>

  <div class="collapse" id="customize-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded menu">Overview</a></li>
        <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded menu">Sass</a></li>
        <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded menu">Options</a></li>
        <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded menu">Color</a></li>

    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false">
    C++
  </button>

  <div class="collapse" id="layout-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/layout/breakpoints/" class="d-inline-flex align-items-center rounded menu">Breakpoints</a></li>
        <li><a href="/docs/5.0/layout/containers/" class="d-inline-flex align-items-center rounded menu">Containers</a></li>
        <li><a href="/docs/5.0/layout/grid/" class="d-inline-flex align-items-center rounded menu">Grid</a></li>
        <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded menu">Columns</a></li>

    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
    C#
  </button>

  <div class="collapse" id="content-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/content/reboot/" class="d-inline-flex align-items-center rounded menu">Reboot</a></li>
        <li><a href="/docs/5.0/content/typography/" class="d-inline-flex align-items-center rounded menu">Typography</a></li>
        <li><a href="/docs/5.0/content/images/" class="d-inline-flex align-items-center rounded menu">Images</a></li>
        <li><a href="/docs/5.0/content/tables/" class="d-inline-flex align-items-center rounded menu">Tables</a></li>

    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false">
    PHP
  </button>

  <div class="collapse" id="forms-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/forms/overview/" class="d-inline-flex align-items-center rounded menu">Overview</a></li>
        <li><a href="/docs/5.0/forms/form-control/" class="d-inline-flex align-items-center rounded menu">Form control</a></li>
        <li><a href="/docs/5.0/forms/select/" class="d-inline-flex align-items-center rounded menu">Select</a></li>
        <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded menu">Checks &amp; radios</a></li>

    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false" aria-current="true">
    MYSQL
  </button>

  <div class="collapse" id="components-collapse" bis_skin_checked="1" style="">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded menu">Accordion</a></li>
        <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded menu">Alerts</a></li>
        <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded menu">Badge</a></li>
        <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded menu">Breadcrumb</a></li>
   
    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false">
    Microsoft Access
  </button>

  <div class="collapse" id="helpers-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/helpers/clearfix/" class="d-inline-flex align-items-center rounded menu">Clearfix</a></li>
        <li><a href="/docs/5.0/helpers/colored-links/" class="d-inline-flex align-items-center rounded menu">Colored links</a></li>
        <li><a href="/docs/5.0/helpers/ratio/" class="d-inline-flex align-items-center rounded menu">Ratio</a></li>
        <li><a href="/docs/5.0/helpers/position/" class="d-inline-flex align-items-center rounded menu">Position</a></li>
    </ul>
  </div>
</li>


</div>

{{-- menu --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px; margin-left:1rem;">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 

    <div class="row mt-3">
        <div class="col-12 d-flex justify-content-end">
                <a href="{{route('answer')}}" class="btn btn-primary">Задать вопрос</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach($comments as $comment)
            <!-- Card -->
            <div class="card" style="margin: 1rem;">
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
                                <a href="{{route('comments.list',$comment->id)}}" class="btn btn-primary">Ответы</a>
                            </div>

                        </div> <!-- / .row -->
                    </div>

                    <!-- Text -->
                    <p class="mb-3">
                      {{$comment->text}}
                    </p>


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

    {{ __('You are logged in!') }}
                 
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
