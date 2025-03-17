<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body-secondary d-flex align-items-center justify-content-center vh-100">

<div class="card shadow" style="width: 350px;">
  <div class="card-body register-card-body">
    <p class="register-box-msg text-center fw-bold">Register a new membership</p>

    <form action="../index3.html" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Full Name" />
        <div class="input-group-text"><span class="bi bi-person"></span></div>
      </div>

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
            <label class="form-check-label" for="flexCheckDefault">
              I agree to the <a href="#" class="text-decoration-none">terms</a>
            </label>
          </div>
        </div>

        <div class="col-4">
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </div>
      </div>
    </form>

    <p class="mb-0 text-center mt-3">
      <a href="login" class="text-center text-decoration-none">I already have a membership</a>
    </p>
  </div>
</div>

</body>
