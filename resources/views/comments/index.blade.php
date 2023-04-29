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
        <li><a href="/docs/5.0/getting-started/javascript/" class="d-inline-flex align-items-center rounded">JavaScript</a></li>
        <li><a href="/docs/5.0/getting-started/build-tools/" class="d-inline-flex align-items-center rounded">Build tools</a></li>
        <li><a href="/docs/5.0/getting-started/webpack/" class="d-inline-flex align-items-center rounded">Webpack</a></li>
        <li><a href="/docs/5.0/getting-started/parcel/" class="d-inline-flex align-items-center rounded">Parcel</a></li>
        <li><a href="/docs/5.0/getting-started/accessibility/" class="d-inline-flex align-items-center rounded">Accessibility</a></li>
        <li><a href="/docs/5.0/getting-started/rfs/" class="d-inline-flex align-items-center rounded">RFS</a></li>
        <li><a href="/docs/5.0/getting-started/rtl/" class="d-inline-flex align-items-center rounded">RTL</a></li>
    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false">
    Customize
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
    Layout
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
    Content
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
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false" aria-current="true">
    Components
  </button>

  <div class="collapse" id="components-collapse" bis_skin_checked="1" style="">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded">Accordion</a></li>
        <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded">Alerts</a></li>
        <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded">Badge</a></li>
        <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded">Breadcrumb</a></li>
        <li><a href="/docs/5.0/components/buttons/" class="d-inline-flex align-items-center rounded">Buttons</a></li>
        <li><a href="/docs/5.0/components/button-group/" class="d-inline-flex align-items-center rounded">Button group</a></li>
        <li><a href="/docs/5.0/components/card/" class="d-inline-flex align-items-center rounded">Card</a></li>
        <li><a href="/docs/5.0/components/carousel/" class="d-inline-flex align-items-center rounded">Carousel</a></li>
        <li><a href="/docs/5.0/components/close-button/" class="d-inline-flex align-items-center rounded">Close button</a></li>
        <li><a href="/docs/5.0/components/collapse/" class="d-inline-flex align-items-center rounded active" aria-current="page">Collapse</a></li>
        <li><a href="/docs/5.0/components/dropdowns/" class="d-inline-flex align-items-center rounded">Dropdowns</a></li>
        <li><a href="/docs/5.0/components/list-group/" class="d-inline-flex align-items-center rounded">List group</a></li>
        <li><a href="/docs/5.0/components/modal/" class="d-inline-flex align-items-center rounded">Modal</a></li>
        <li><a href="/docs/5.0/components/navs-tabs/" class="d-inline-flex align-items-center rounded">Navs &amp; tabs</a></li>
        <li><a href="/docs/5.0/components/navbar/" class="d-inline-flex align-items-center rounded">Navbar</a></li>
        <li><a href="/docs/5.0/components/offcanvas/" class="d-inline-flex align-items-center rounded">Offcanvas</a></li>
        <li><a href="/docs/5.0/components/pagination/" class="d-inline-flex align-items-center rounded">Pagination</a></li>
        <li><a href="/docs/5.0/components/popovers/" class="d-inline-flex align-items-center rounded">Popovers</a></li>
        <li><a href="/docs/5.0/components/progress/" class="d-inline-flex align-items-center rounded">Progress</a></li>
        <li><a href="/docs/5.0/components/scrollspy/" class="d-inline-flex align-items-center rounded">Scrollspy</a></li>
        <li><a href="/docs/5.0/components/spinners/" class="d-inline-flex align-items-center rounded">Spinners</a></li>
        <li><a href="/docs/5.0/components/toasts/" class="d-inline-flex align-items-center rounded">Toasts</a></li>
        <li><a href="/docs/5.0/components/tooltips/" class="d-inline-flex align-items-center rounded">Tooltips</a></li>
    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false">
    Helpers
  </button>

  <div class="collapse" id="helpers-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/helpers/clearfix/" class="d-inline-flex align-items-center rounded">Clearfix</a></li>
        <li><a href="/docs/5.0/helpers/colored-links/" class="d-inline-flex align-items-center rounded">Colored links</a></li>
        <li><a href="/docs/5.0/helpers/ratio/" class="d-inline-flex align-items-center rounded">Ratio</a></li>
        <li><a href="/docs/5.0/helpers/position/" class="d-inline-flex align-items-center rounded">Position</a></li>
        <li><a href="/docs/5.0/helpers/visually-hidden/" class="d-inline-flex align-items-center rounded">Visually hidden</a></li>
        <li><a href="/docs/5.0/helpers/stretched-link/" class="d-inline-flex align-items-center rounded">Stretched link</a></li>
        <li><a href="/docs/5.0/helpers/text-truncation/" class="d-inline-flex align-items-center rounded">Text truncation</a></li>
    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false">
    Utilities
  </button>

  <div class="collapse" id="utilities-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/utilities/api/" class="d-inline-flex align-items-center rounded">API</a></li>
        <li><a href="/docs/5.0/utilities/background/" class="d-inline-flex align-items-center rounded">Background</a></li>
        <li><a href="/docs/5.0/utilities/borders/" class="d-inline-flex align-items-center rounded">Borders</a></li>
        <li><a href="/docs/5.0/utilities/colors/" class="d-inline-flex align-items-center rounded">Colors</a></li>
        <li><a href="/docs/5.0/utilities/display/" class="d-inline-flex align-items-center rounded">Display</a></li>
        <li><a href="/docs/5.0/utilities/flex/" class="d-inline-flex align-items-center rounded">Flex</a></li>
        <li><a href="/docs/5.0/utilities/float/" class="d-inline-flex align-items-center rounded">Float</a></li>
        <li><a href="/docs/5.0/utilities/interactions/" class="d-inline-flex align-items-center rounded">Interactions</a></li>
        <li><a href="/docs/5.0/utilities/overflow/" class="d-inline-flex align-items-center rounded">Overflow</a></li>
        <li><a href="/docs/5.0/utilities/position/" class="d-inline-flex align-items-center rounded">Position</a></li>
        <li><a href="/docs/5.0/utilities/shadows/" class="d-inline-flex align-items-center rounded">Shadows</a></li>
        <li><a href="/docs/5.0/utilities/sizing/" class="d-inline-flex align-items-center rounded">Sizing</a></li>
        <li><a href="/docs/5.0/utilities/spacing/" class="d-inline-flex align-items-center rounded">Spacing</a></li>
        <li><a href="/docs/5.0/utilities/text/" class="d-inline-flex align-items-center rounded">Text</a></li>
        <li><a href="/docs/5.0/utilities/vertical-align/" class="d-inline-flex align-items-center rounded">Vertical align</a></li>
        <li><a href="/docs/5.0/utilities/visibility/" class="d-inline-flex align-items-center rounded">Visibility</a></li>
    </ul>
  </div>
</li>
<li class="mb-1">
  <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false">
    Extend
  </button>

  <div class="collapse" id="extend-collapse" bis_skin_checked="1">
    <ul class="list-unstyled fw-normal pb-1 small">
        <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded">Approach</a></li>
        <li><a href="/docs/5.0/extend/icons/" class="d-inline-flex align-items-center rounded">Icons</a></li>
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
                    <p>Compared with controls , children with 
                    had delayed acquisition of self-feeding behavior 
                    and solid food introduction  Impaired satiety was 
                    common and independent of medication use: 23.0% were never 
                    full 31.1% snacked constantly, and 27.0% concealed 
                    food (all P≤0.002). They consumed the equivalent of an additional 
                    meadaily  Children with FASD were more likely
                    to have a past diagnosis of underweight  
                    Mean body mass index was significantly reduced for males 
                     but not females  with FASD, and only 
                    two children with FASD were currently underweight. Children 
                    with FASD were more physically active
                    A survey that assessed eating behaviors was completed between 
                    October 2013 and May 2014 by the caregivers of children screened 
                    for FASD at the University of Minnesota's Fetal Alcohol Spectrum 
                    Disorders Program, and typically-developing children recruited 
                    from that clinic or from the Research Participation Core of the 
                    Waisman Center, University of Wisconsin. </p>

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
