@extends('layouts.adminBase')
@section('content')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items" action="/tambah/store" method="POST">
                    <h3>Tambah Data</h3>
                    <p>Isi Data Di Bawah Ini</p>
                    <form class="requires-validation" novalidate>

                        <div class="col-md-12">
                           <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="email" name="umur" placeholder="Umur" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="telp" placeholder="No.Telp" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="maskapai" placeholder="Maskapai" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="destinasi" placeholder="Destinasi" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="tanggal" placeholder="Tanggal" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="email" name="harga" placeholder="Harga" required>
                             <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div>
                        </div>
              

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary"value="Tambah post">Tambah </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection