<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body-secondary d-flex align-items-center justify-content-center vh-100">

<div class="card shadow" style="width: 350px;">
  <div class="card-body register-card-body">
    <p class="register-box-msg text-center fw-bold">Register a new membership</p>

    <form action="{{ route('signup') }}" method="post">
      @csrf
      <div class="input-group mb-3">
        <input type="text" name="name" class="form-control" placeholder="Full Name" required/>
        <div class="input-group-text"><span class="bi bi-person"></span></div>
      </div>
      @error('name')
        <div class="text-danger">{{ $message }}</div>
      @enderror

      <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email"  required/>
        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
      </div>
      @error('email')
        <div class="text-danger">{{ $message }}</div>
      @enderror

      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password"  required/>
        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
      </div>
      @error('password')
        <div class="text-danger">{{ $message }}</div>
      @enderror

      <div class="d-none">
        <input type="text" name="role" class="form-control" value="{{ $role }}" readonly  required/>
      </div>
      @error('role')
        <div class="text-danger">{{ $message }}</div>
      @enderror

      <div class="row">
        <div class="col-8">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="flexCheckDefault" required/>
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