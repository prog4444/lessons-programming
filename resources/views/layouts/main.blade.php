<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #7952b3;">
        <div class="container-fluid">
          <a class="navbar-brand" style="color: aliceblue;" href="{{route('show.index')}}">TajLingvo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" style="color: aliceblue;" href="{{route('masala.index')}}">Masala Add</a>
              <a class="nav-link" style="color: aliceblue;" href="#">Features</a>
              <a class="nav-link"  style="color: aliceblue;" href="#">Pricing</a>
              <a class="nav-link disabled" style="color: aliceblue;" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </div>
      </nav>
    
    
        
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-body'>
                        <p>Салом: Администратор</p>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
<script src="/bootstrap/js/core/jquery.min.js"></script>
<script src="/bootstrap/js/core/popper.min.js"></script>
<script src="/bootstrap/js/core/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{ asset('bootstrap/js/st.js') }}" ></script>

<script src="{{ asset('bootstrap/js/st.js') }}" ></script>
<script src="bootstrap/js/st.js"></script>

<script>
    $('#summernote').summernote({
      placeholder: 'Description',
      tabsize: 2,
      height: 250
    });
  </script>
</body>
</html>