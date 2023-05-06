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
            <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
            <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded">Sass</a></li>
            <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded">Options</a></li>
            <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded">Color</a></li>
            <li><a href="/docs/5.0/customize/components/" class="d-inline-flex align-items-center rounded">Components</a></li>
            <li><a href="/docs/5.0/customize/css-variables/" class="d-inline-flex align-items-center rounded">CSS variables</a></li>
            <li><a href="/docs/5.0/customize/optimize/" class="d-inline-flex align-items-center rounded">Optimize</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false">
        Масалахо сатхи 2
      </button>
    
      <div class="collapse" id="layout-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/layout/breakpoints/" class="d-inline-flex align-items-center rounded">Breakpoints</a></li>
            <li><a href="/docs/5.0/layout/containers/" class="d-inline-flex align-items-center rounded">Containers</a></li>
            <li><a href="/docs/5.0/layout/grid/" class="d-inline-flex align-items-center rounded">Grid</a></li>
            <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded">Columns</a></li>
            <li><a href="/docs/5.0/layout/gutters/" class="d-inline-flex align-items-center rounded">Gutters</a></li>
            <li><a href="/docs/5.0/layout/utilities/" class="d-inline-flex align-items-center rounded">Utilities</a></li>
            <li><a href="/docs/5.0/layout/z-index/" class="d-inline-flex align-items-center rounded">Z-index</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
        Масалахо сатхи 3
      </button>
    
      <div class="collapse" id="content-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/content/reboot/" class="d-inline-flex align-items-center rounded">Reboot</a></li>
            <li><a href="/docs/5.0/content/typography/" class="d-inline-flex align-items-center rounded">Typography</a></li>
            <li><a href="/docs/5.0/content/images/" class="d-inline-flex align-items-center rounded">Images</a></li>
            <li><a href="/docs/5.0/content/tables/" class="d-inline-flex align-items-center rounded">Tables</a></li>
            <li><a href="/docs/5.0/content/figures/" class="d-inline-flex align-items-center rounded">Figures</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false">
        Forms
      </button>
    
      <div class="collapse" id="forms-collapse" bis_skin_checked="1">
        <ul class="list-unstyled fw-normal pb-1 small">
            <li><a href="/docs/5.0/forms/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
            <li><a href="/docs/5.0/forms/form-control/" class="d-inline-flex align-items-center rounded">Form control</a></li>
            <li><a href="/docs/5.0/forms/select/" class="d-inline-flex align-items-center rounded">Select</a></li>
            <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded">Checks &amp; radios</a></li>
            <li><a href="/docs/5.0/forms/range/" class="d-inline-flex align-items-center rounded">Range</a></li>
            <li><a href="/docs/5.0/forms/input-group/" class="d-inline-flex align-items-center rounded">Input group</a></li>
            <li><a href="/docs/5.0/forms/floating-labels/" class="d-inline-flex align-items-center rounded">Floating labels</a></li>
            <li><a href="/docs/5.0/forms/layout/" class="d-inline-flex align-items-center rounded">Layout</a></li>
            <li><a href="/docs/5.0/forms/validation/" class="d-inline-flex align-items-center rounded">Validation</a></li>
        </ul>
      </div>
    </li>

    </div>
    
    {{-- menu --}}
    








<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px; margin-left:1rem;">
                <div class="card-header">{{ __('Dashboard') }}</div>

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