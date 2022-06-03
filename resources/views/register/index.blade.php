<!doctype html>
<html lang="en">

<head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

  {{-- CDN Icon Bootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

  {{-- CDN Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
   
   

    <title>.TOUGHTS | Daftar</title>
</head>

<body>
  <div class="container-fluid">
    <h1 class="text-header-auth mt-big mb-big mt-5 mb-5"><a class="nav-link"href="/" style="font-size: 32px; font-weight: 900; line-height: 39px; font-style: normal; color:black;">.TOUGHTS</a></h1>
          
      
      <div class="d-flex justify-content-center mb-5">
          <div class="card-auth">
              <div class="text-card-header text-center">REGISTER</div>
              <form action="/register" method="post">
                @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                      @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    
                  </div>

                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value="{{ old('username') }}">
                    
                    @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror

                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                       
                    @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="Password" name="password" placeholder="Password" required>
                    
                    
                    @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <!-- <div class="mb-3 d-flex justify-content-center gap-1">
                      <a href="#"><img src="/assets/img/google logo.svg" alt="" srcset=""></a>
                      <a href="#"><img src="/assets/img/fb logo.svg" alt="" srcset=""></a>
                      <a href="#"><img src="/assets/img/apple logo.svg" alt="" srcset=""></a>

                  </div> -->
                  <div class="d-grid mx-5 my-4">
                      <button type="submit" class="btn btn-submit">Daftar</button>
                  </div>

                  <div class="text-center">
                      <div class="" style="color:#000000;">Sudah mempunyai akun? <a href="/login"
                              class="auth-helper">Masuk disini</a></div>

                  </div>
              </form>
          </div>
      </div>
  </div>

  







  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

    
</body>

</html>