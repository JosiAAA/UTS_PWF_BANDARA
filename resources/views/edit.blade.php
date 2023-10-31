@extends('layouts.adminBase')
@section('content')
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css4/style.css">
<div class="container">
    @foreach($posting as $p)
    <form class="form" action="/edit/update" method="POST">

        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$p->id}}">
        Nama:
        <input type="text" name="nama" value="{{$p->nama}}"><br>
        Umur:
        <input type="text" name="umur" value="{{$p->umur}}"><br>
        No.Telp:
        <input type="text" name="telp" value="{{$p->telp}}"><br>

        Maskapai:
        <input type="text" name="maskapai" value="{{$p->maskapai}}"><br>
        Destinasi:
        <input type="text" name="destinasi" value="{{$p->destinasi}}"><br>
        Tanggal:
        <input type="text" name="tanggal" value="{{$p->tanggal}}"><br>
        Harga:
        <input type="text" name="harga" value="{{$p->harga}}"><br>
        <br><input type="submit" value="Edit post">
    </form>
    @endforeach

</div>
<script src="css4/js/jquery.min.js"></script>
<script src="css4/js/popper.js"></script>
<script src="css4/js/bootstrap.min.js"></script>
<script src="css4/js/main.js"></script>
    @endsection