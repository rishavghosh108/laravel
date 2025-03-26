<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>




{{-- <div class="container w-50"> --}}
    {{-- <div class="card shadow-lg mt-5"> --}}
      <div class="d-flex justify-content-center align-items-center">
        @if(session('users'))
            @php
                $users = session('users');
            @endphp
    
            @if(!$users->isEmpty())
                <div class="card shadow-lg border-0 rounded-3 p-4" style="max-width: 70vw; width: 100%;">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="fw-bold text-uppercase mb-0">Search Results</h4>
                    </div>
    
                    <div class="card-body">
                      <table class="table table-bordered table-striped text-center">
                          <thead class="table-dark">
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($users as $user)
                                  <tr>
                                      <td>{{ $user->id }}</td>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>{{ $user->status }}</td>
                                      <form action="update" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value={{$user->id}} class>
                                        <input type="hidden" name="status" value={{ $user->status === 'approved' ? 'suspended' : 'approved' }}>
                                        <td><button>{{ $user->status === 'approved' ? 'suspende' : 'approve' }}</button></td>
                                    </form>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
                </div>
            @else
                <div class="alert alert-danger text-center shadow-lg border-0 rounded-3 p-4" 
                    style="max-width: 400px; width: 100%;">
                    <p class="fw-bold text-uppercase mb-0">No Users Found</p>
                </div>
            @endif
        @endif
    {{-- </div> --}}
    </div>
  {{-- </div> --}}