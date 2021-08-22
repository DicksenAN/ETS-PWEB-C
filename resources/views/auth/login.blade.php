<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Stock? Talk. | Login</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    {{-- Google Fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
  </head>
  <body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img
                src="{{asset('images/login.jpg')}}"
                alt="login"
                class="login-card-img"
              />
            </div>
            <div class="col-md-7">
              <div class="card-body">
								<h1 class="regis-title">Stock? Talk.</h1>
								<p class="login-card-description">Sign into your account</p>
								<form action="{{ route('login') }}" method="POST" autocomplete="off">
									@csrf
									<div class="form-group">
										<label for="signin-email" class="control-label">Email</label>
										<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
									</div>
									<div class="form-group">
										<label for="signin-password" class="control-label">Password</label>
										<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
									</div>
									<button type="submit" class="btn btn-block login-btn mb-4">Login</button>
								</form>
                <p class="login-card-footer-text">
                  Don't have an account?
                  <a href="/register" class="text-reset">Register here</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
