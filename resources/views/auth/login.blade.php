<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="login-page bg-body-secondary text-center d-flex align-items-center justify-content-center vh-100">

  <div class="login-box">

    <div class="card --bs-warning">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="/login" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <div class="error_group">
              <ul class="error">@error('email') {{ $message }} @enderror</ul>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <div class="error_group">
              <ul class="error">@error('password') {{ $message }} @enderror</ul>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
              </div>
            </div>

            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
          </div>
        </form>

        <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
        <p class="mb-0">
          <a href="/signup" class="text-center"> Register a new membership </a>
        </p>
      </div>
    </div>
  </div>
</body>

<style>
  .login-box {
    max-width: 400px;
    width: 100%;
    padding: 5px;
  }

  .error_group {
    max-width: 343px;
    width: 100%;
    justify-content: center;
    text-align: center;
    position: absolute;
    top: -10px;
  }

  .error {
    text-align: center;
    color: red;
    font-size: 14px;
    z-index: 100;
  }
</style>