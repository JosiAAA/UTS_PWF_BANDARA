
@extends('layouts.base')
@section('content')
<link rel="stylesheet" href="css2/fonts/icomoon/style.css">
<link rel="stylesheet" href="css2/css/owl.carousel.min.css">

<link rel="stylesheet" href="css2/css/bootstrap.min.css">

<link rel="stylesheet" href="css2/css/style.css">
<body>
    

<div class="content">
<div class="container">
<h2 class="mb-5">Harga Tiket</h2>
<div class="table-responsive">
<table class="table table-striped custom-table">
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">Maskapai</th>
<th scope="col">Destinasi</th>
<th scope="col">Tanggal</th>
<th scope="col">harga</th>

</tr>
</thead>
<tbody>
    @foreach($tiket as $p)
    <tr scope="row">
        
        <td>{{ $p->id }}</td>
        <td><a href="#">{{ $p->maskapai }}</a></td>
        <td>{{ $p->destinasi }}</td>
        <td>{{ $p->tanggal}}</td>
        <td><a href="#">{{ $p->harga }}</a></td>
        <!-- Add a data-id attribute to each "BELI" button to store the unique identifier -->
        <td>
            @auth
           
                <button class="beli-button btn btn-primary" data-id="{{ $p->id }}">BUY</button>
            @endauth
        </td>
        
       
    </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const beliButtons = document.querySelectorAll(".beli-button");
    
      beliButtons.forEach((button) => {
        button.addEventListener("click", function () {
          const row = this.closest("tr"); // Get the closest table row
          const maskapai = row.querySelector("td:nth-child(2)").textContent;
          const destinasi = row.querySelector("td:nth-child(3)").textContent;
          const tanggal = row.querySelector("td:nth-child(4)").textContent;
          const harga = row.querySelector("td:nth-child(5)").textContent;
    
          // Create a JavaScript object to store the data
          const tiketData = {
            maskapai,
            destinasi,
            tanggal,
            harga,
          };
    
          // Store the data in a cookie or use other methods to pass it to the next page
          // Example using localStorage:
          localStorage.setItem("tiketData", JSON.stringify(tiketData));
          window.location.href = "/pesan";
        });
      });
    });
    </script>
    
<script src="css2/js/jquery-3.3.1.min.js"></script>
<script src="css2/js/popper.min.js"></script>
<script src="css2/js/bootstrap.min.js"></script>
<script src="css2/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"80cb2487880f6be2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
</body>
@endsection