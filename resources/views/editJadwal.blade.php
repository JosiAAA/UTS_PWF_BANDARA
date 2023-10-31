@extends('layouts.adminBase')
@section('content')
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css4/style.css">
<div class="container">
    @foreach($jadwalPost as $p)
    <form class="form" action="/editJadwal/update" method="POST">

        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$p->id}}">
        Maskapai:
        <input type="text" name="maskapai" value="{{$p->maskapai}}"><br>
        Destinasi:
        <input type="text" name="destinasi" value="{{$p->destinasi}}"><br>
        Tanggal:
        <input type="text" name="tanggal" value="{{$p->tanggal}}"><br>
        Jam:
        <input type="text" name="jam" value="{{$p->jam}}"><br>
        Gate:
        <input type="text" name="gate" value="{{$p->gate}}"><br>
      
        <br><input type="submit" value="Edit post">
    </form>
    @endforeach

</div>
<script src="css4/js/jquery.min.js"></script>
<script src="css4/js/popper.js"></script>
<script src="css4/js/bootstrap.min.js"></script>
<script src="css4/js/main.js"></script>
    @endsection