<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="login-page bg-body-secondary text-center d-flex align-items-center justify-content-center vh-100">
  
  <div class="login-box">

    <div class="card --bs-warning">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="../index3.html" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
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
          <!--end::Row-->
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
</style>