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
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5>Дар бораи сайт</h5>
                    <hr>
                    <p style="font-size: 17px">Ин сайт ба забонҳои гуногун бахшида шудааст ва 
                      технологияҳои барномасозӣ, компютерҳо, платформаҳои мобилӣ ва ТЕХНОЛОГИЯҲО. 
                      Дар ин ҷо дастурҳо ва маводҳои гуногуни таълимӣ, мақолаҳо ва 
                      намунаҳо.</p>

                    <p style="font-size: 16px">Дар сайт шумо метавонед маводҳоро дар самтҳо ба монанди забон пайдо кунед 
                      C# ва оилаи ТЕХНОЛОГИЯҲОИ. NET (ASP.NET, WPF, Entity Framework ва ғайра), 
                      технологияҳои дар Асоси Java (Java SE, барномасозӣ Барои ANDROID OS Ва ғайра), 
                      Python, Dart (Аз Ҷумла Flutter), кор бо пойгоҳи додаҳо (Ms SQL Server, 
                      MySQL, MongoDB) ва инчунин технологияҳои ВЕБ, ба монанди HTML5, AJAX, jQuery, Node.js, 
                      ExtJS, Angular, React Ва ғайра.</p>
                      
                      <p style="font-size: 17px">Азбаски ҳает дар як ҷо намеистад, ҳама маводҳо ба қадри имкон пурра карда мешаванд 
                        ва нав карда мешаванд, то ба рӯҳияи вақт мувофиқат кунанд ва аҳамияти худро гум накунанд.</p>
                      
                      <p style="font-size: 17px">Барои ҳама саволҳо дар бораи сайт ба суроғаи зерин нависед <span style="color:blue; font-weight:bold;">prog90003@mail.com .<span></p>
                      
                      <p style="font-size: 17px">Ташаккур ки сайти моро истифода мебаред.</p>

   

    
                 
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
