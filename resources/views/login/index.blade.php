<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

  {{-- CDN Icon Bootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
  {{-- CDN Tailwind --}}
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

  {{-- CDN Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">

    
    <title>Haltev | {{ $title }}</title>
  </head>
  <body>

    {{-- extend tapi sekalian mengambil function function yang ada --}}
   
    

    <div class="container ">
      
      

      <div class="row justify-content-center">
        {{-- <div class="col-md-4 form-login rounded"> --}}
        <div class="">
        {{-- alert --}}
        <!-- alert -->
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        
          <h1 class="text-header-auth mt-big mb-big mt-5 mb-5"><a class="nav-link"href="/" style="font-size: 32px; font-weight: 900; line-height: 39px; font-style: normal; color:black;">.TOUGHTS</a></h1>
          
          <div class="d-flex justify-content-center  " >
              <div class="card-auth " style="box-shadow: 0 0rem 1rem rgba(0,0,0,1;">
                  <div class="text-card-header text-center">LOGIN</div>
                  
                  <form action="/login" method="POST" class="mb-3">
                    @csrf
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" autofocus required value="{{ old('username') }}" >
                      </div>

                      @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                      <div class="mb-3">
                        <label for="floatingPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        
                      </div>
                      <div class="d-grid mx-5 my-4">
                          <button type="submit" class="btn btn-submit">Login</button>
                      </div>

                      <div class="text-center">
                          <div class="" style="color:black;">Belum mempunya akun? <a href="/register"
                                  class="auth-helper">Daftar disini</a></div>

                                  
                  </form>
              </div>
          </div>
        
      </div>
    </div>

    

    
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    


  </body>
</html>