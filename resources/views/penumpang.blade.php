
@extends('layouts.base')
@section('content')
<link rel="stylesheet" href="css2/fonts/icomoon/style.css">
<link rel="stylesheet" href="css2/css/owl.carousel.min.css">

<link rel="stylesheet" href="css2/css/bootstrap.min.css">

<link rel="stylesheet" href="css2/css/style.css">
<body>
    

<div class="content">
<div class="container">
<h2 class="mb-5">Daftar Penumpang</h2>
<div class="table-responsive">
<table class="table table-striped custom-table">
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">Nama</th>
<th scope="col">Umur</th>
<th scope="col">No.Telp</th>
<th scope="col">Maskapai</th>
<th scope="col">Destinasi</th>
<th scope="col">Tanggal</th>
<th scope="col">Harga</th>
</tr>
</thead>
<tbody>
    @foreach($posting as $p)
    <tr scope="row">
        
        <td>{{ $p->id }}</td>
        <td><a >{{ $p->nama }}</a></td>
        <td>{{ $p->umur }}</td>
        <td>{{ $p->telp }}</td>
        <td><a>{{ $p->maskapai }}</a></td>
        <td>{{ $p->destinasi }}</td>
        <td>{{ $p->tanggal}}</td>
        <td>{{ $p->harga}}</td>
       
       
    </tr>
    @endforeach
</tbody>
</table>
</div>
<div class="pagination">
    
    {{ $posting->links() }}
</div>

</div>
</div>
<script src="css2/js/jquery-3.3.1.min.js"></script>
<script src="css2/js/popper.min.js"></script>
<script src="css2/js/bootstrap.min.js"></script>
<script src="css2/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"80cb2487880f6be2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
</body>
@endsection