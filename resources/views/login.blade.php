@extends('layouts.base')
@section('content')
<style>
    body {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.3)), url('images/bandara.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      height: 100vh;
    }

    .form-outline {
      position: relative;
      text-align: left; /* Membuat label rata kiri */
    }

    /* Tambahkan text shadow ke semua teks */
    body, h2, p, label, input, select, .form-check-label, .btn {
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
  </style>
<body>
    

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Masukkan Email and Password yang telah terdaftar</p>

                            <form action="{{ route('login') }}" method="post">
                                @csrf

                                <div class="form-outline form-white mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" placeholder="contoh@gmail.com" value="{{ old('email') }}"required>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" placeholder="password" required>
                                </div>

                                <!-- Tambahkan checkbox untuk menampilkan password -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="showPassword">
                                    <label class="form-check-label text-white" for="showPassword">Show Password</label>
                                </div>


                                <!-- Tambahkan select box untuk memilih peran -->
                                <div class="form-outline form-white mb-4">
                                    <label for="role">Role</label>
                                    <select class="form-control form-control-lg" name="role" required>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>

                                <!-- Tambahkan checkbox untuk menampilkan password -->
                              
                                <button class="btn btn-outline-light btn-lg px-5" type="submit" value="Login">Login</button>

                            </form>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                              
                            </div>
                        </div>

                        <div>
                            <p class="mb-0">Belum Punya Akun? <a href="/register" class="text-white-50 fw-bold">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

<!-- Tambahkan script JavaScript untuk menampilkan/menyembunyikan password -->
<!-- Tambahkan script JavaScript untuk menampilkan/menyembunyikan password -->
<script>
    document.getElementById('showPassword').addEventListener('change', function () {
        var passwordInput = document.getElementById('typePasswordX');
        if (this.checked) { 
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>

@endsection
