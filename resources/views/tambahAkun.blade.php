@extends('layouts.adminBase')
@section('content')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
               
                    <h3>Tambah Data</h3>
                    <p>Isi Data Di Bawah Ini</p>
                    <form class="form" action="/tambahAkun/store" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Email:</label>
                            <input type="email" class="form-control" id="age" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="role" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: rgb(0, 0, 0);">Role:</label>
                            <select class="form-control" id="role" name="role" required>
                                <option value="user">User</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color:  rgb(0, 0, 0);">Password:</label>
                            <input type="password" class="form-control" id="age" name="password" required>
                        </div>
                        
                        <input type="hidden" name="action" value="tambahAkun post">
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