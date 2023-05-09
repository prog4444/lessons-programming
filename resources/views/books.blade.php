@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="margin-top:100px; margin-left:1rem;">
                <div class="card-header">{{ __('Китобҳо') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row" bis_skin_checked="1">
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/headers/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/a.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Хондан</h3>
                            <h3 class="h5 mb-1">Боргирӣ</h3>
                          </a>
                          <p class="text-muted">Китоби зерин барои бехтар ва бо сифат гардонидани коди шумо...</p>
                        </div>
                  
                  
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/heroes/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/b.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Хондан</h3>
                            <h3 class="h5 mb-1">Боргирӣ</h3>
                          </a>
                          <p class="text-muted">Агар шумо дар роҳи оғозкунии барномерзӣ бошед он гоҳ...</p>
                        </div>
                  
                  
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/features/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/d.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Хондан</h3>
                            <h3 class="h5 mb-1">Боргирӣ</h3>
                          </a>
                          <p class="text-muted">Китоби мазкур ба ҳамаи барномарезон новобаста аз дараҷаи онҳо...</p>
                        </div>
                  
                  
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/sidebars/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/c.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Хондан</h3>
                            <h3 class="h5 mb-1">Боргирӣ</h3>
                          </a>
                          <p class="text-muted">Барномарезӣ бо Python! Китоби зерин забони барномерзӣ Python-ро...</p>
                        </div>
                      </div>
                      <div class="row" bis_skin_checked="1">
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/headers/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/far.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Headers</h3>
                          </a>
                          <p class="text-muted">Display your branding, navigation, search, and more with these header components</p>
                        </div>
                  
                  
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/heroes/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/far.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Heroes</h3>
                          </a>
                          <p class="text-muted">Set the stage on your homepage with heroes that feature clear calls to action.</p>
                        </div>
                  
                  
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/features/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/far.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Features</h3>
                          </a>
                          <p class="text-muted">Explain the features, benefits, or other details in your marketing content.</p>
                        </div>
                  
                  
                        <div class="col-sm-6 col-md-4 col-xl-3 mb-3" bis_skin_checked="1">
                          <a class="d-block" href="/docs/5.0/examples/sidebars/">
                            <img class="img-thumbnail mb-3" srcset="" src="/images/far.jpg" alt="" width="480" height="300" loading="lazy">
                            <h3 class="h5 mb-1">Sidebars</h3>
                          </a>
                          <p class="text-muted">Common navigation patterns ideal for offcanvas or multi-column layouts.</p>
                        </div>
                      </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
     
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
          
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
          
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> ш Худжанд, Исмоили Сомонӣ Ленин 226</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 992 55 666 3291</p>
            <p><i class="fas fa-print me-3"></i> + 992 55 666 3291</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="#">TajLingvo.tj</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection