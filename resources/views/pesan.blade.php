@extends('layouts.base')
@section('content')
<link rel="stylesheet" href="css2/fonts/icomoon/style.css">
<link rel="stylesheet" href="css2/css/owl.carousel.min.css">
<link rel="stylesheet" href="css2/css/bootstrap.min.css">
<link rel="stylesheet" href="css2/css/style.css">
<body>
<div class="content">
    <div class="container">
        <h2 class="mb-5">Pembelian Tiket</h2>
        <div class="row">
            <div class="col-md-6">
                <!-- Display airline ticket information from local storage -->
                <h3 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);color: white;">Detail Tiket Pesawat</h3>
                <p>Maskapai: <span id="maskapai"></span></p>
                <p>Destinasi: <span id="destinasi"></span></p>
                <p>Tanggal: <span id="tanggal"></span></p>
                <p>Harga: <span id="harga"></span></p>
            </div>
            <div class="col-md-6">
                <!-- Create the form for name, age, and phone number -->
                <h3 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: white;">Informasi Pemesan</h3>
                <form class="form" action="/pesan/store" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: white;">Nama:</label>
                        <input type="text" class="form-control" id="name" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="age" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: white;">Umur:</label>
                        <input type="number" class="form-control" id="age" name="umur" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: white;">Nomor Telepon:</label>
                        <input type="tel" class="form-control" id="phone" name="telp" required>
                    </div>
                    <input type="hidden" class="form-control" id="maskapai_input" name="maskapai" required>
                    <input type="hidden" class="form-control" id="destinasi_input" name="destinasi" required>
                    <input type="hidden" class="form-control" id="tanggal_input" name="tanggal" required>
                    <input type="hidden" class="form-control" id="harga_input" name="harga" required>
                    <input type="hidden" name="action" value="pesan post">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tiketDataString = localStorage.getItem("tiketData");
        if (tiketDataString) {
            const tiketData = JSON.parse(tiketDataString);

            // Display the retrieved ticket data on the page
            document.getElementById("maskapai").textContent = tiketData.maskapai;
            document.getElementById("destinasi").textContent = tiketData.destinasi;
            document.getElementById("tanggal").textContent = tiketData.tanggal;
            document.getElementById("harga").textContent = tiketData.harga;

            // Set the value of hidden input fields
            document.getElementById("maskapai_input").value = tiketData.maskapai;
            document.getElementById("destinasi_input").value = tiketData.destinasi;
            document.getElementById("tanggal_input").value = tiketData.tanggal;
            document.getElementById("harga_input").value = tiketData.harga;
        }
    });
</script>

<script src="css2/js/jquery-3.3.1.min.js"></script>
<script src="css2/js/popper.min.js"></script>
<script src="css2/js/bootstrap.min.js"></script>
<script src="css2/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"80cb2487880f6be2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
</body>
@endsection
