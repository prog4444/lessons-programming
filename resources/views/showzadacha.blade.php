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
        Масалахо сатхи 1
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
        Масалахо сатхи 2
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
        Масалахо сатхи 3
      </button>
    
      <div class="collapse" id="content-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/content/reboot/" class="d-inline-flex align-items-center rounded menu">Reboot</a></li>
            <li><a href="/docs/5.0/content/typography/" class="d-inline-flex align-items-center rounded menu">Typography</a></li>
            <li><a href="/docs/5.0/content/images/" class="d-inline-flex align-items-center rounded menu">Images</a></li>
            <li><a href="/docs/5.0/content/tables/" class="d-inline-flex align-items-center rounded menu">Tables</a></li>
            <li><a href="/docs/5.0/content/figures/" class="d-inline-flex align-items-center rounded menu">Figures</a></li>
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
                    @foreach($zadacha as $zadachas)
                    <p>{{ $zadachas->name }}</p>
                    @endforeach
                 
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection