
@extends('layouts.adminBase')
@section('content')
<link rel="stylesheet" href="css2/fonts/icomoon/style.css">
<link rel="stylesheet" href="css2/css/owl.carousel.min.css">

<link rel="stylesheet" href="css2/css/bootstrap.min.css">

<link rel="stylesheet" href="css2/css/style.css">
<body>
    

<div class="content">
<div class="container">
<h2 class="mb-5">Daftar Akun</h2>
<div class="table-responsive">
<table class="table table-striped custom-table">
    <a href="/tambahAkun" class="btn btn-primary">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Nama</th>
<th scope="col">Email</th>
<th scope="col">Role</th>
<th scope="col">Password</th>
<th scope="col">Created At</th>
<th scope="col">Updated At</th>

</tr>
</thead>
<tbody>
    @foreach($akunPost as $p)
    <tr scope="row">
        
        <td>{{ $p->id }}</td>
        <td><a >{{ $p->name }}</a></td>
        <td>{{ $p->email }}</td>
        <td>{{ $p->role }}</td>
        <td><a>{{ $p->password }}</a></td>
        <td>{{ $p->created_at }}</td>
        <td>{{ $p->updated_at}}</td>
      
         
        <td><a href="/editAkun/{{ $p->id }}" class="btn btn-primary" style="color: white; background-color: transparent;">Edit</a></td>
        <td><a href="/hapusAkun/{{ $p->id }}" class="btn btn-primary delete-button" style="color: white; background-color: transparent;">Delete</a></td>




       
       
       
    </tr>
    @endforeach
</tbody>
</table>
</div>


</div>
</div>
<script src="css2/js/jquery-3.3.1.min.js"></script>
<script src="css2/js/popper.min.js"></script>
<script src="css2/js/bootstrap.min.js"></script>
<script src="css2/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"80cb2487880f6be2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
<script>
    document.querySelectorAll('.delete-button').forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault(); // Menghentikan tindakan default tombol
  
        const confirmation = confirm('Apakah Anda yakin ingin menghapus data ini?'); // Menampilkan pesan konfirmasi
        
        if (confirmation) {
          // Jika pengguna mengonfirmasi, lanjutkan dengan menghapus
          window.location.href = this.getAttribute('href');
        }
      });
    });
  </script>
  
</body>
@endsection