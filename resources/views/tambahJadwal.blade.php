@extends('layouts.adminBase')
@section('content')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
               
                    <h3>Tambah Data</h3>
                    <p>Isi Data Di Bawah Ini</p>
                    <form class="form" action="/tambahJadwal/store" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Maskapai:</label>
                            <input type="text" class="form-control" id="name" name="maskapai" required>
                        </div>
                        <div class="form-group">
                            <label for="name" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Destinasi:</label>
                            <input type="text" class="form-control" id="age" name="destinasi" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Tanggal:</label>
                            <input type="text" class="form-control" id="phone" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="age" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color:  rgb(0, 0, 0);">Jam:</label>
                            <input type="text" class="form-control" id="age" name="jam" required>
                        </div>
                        <div class="form-group">
                            <label for="age" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color:  rgb(0, 0, 0);">Gate:</label>
                            <input type="text" class="form-control" id="age" name="gate" required>
                        </div>
                       
                        <input type="hidden" name="action" value="tambahJadwal post">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

</script>
@endsection