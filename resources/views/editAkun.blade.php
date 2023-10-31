@extends('layouts.adminBase')
@section('content')
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css4/style.css">
<div class="container">
    @foreach($akunPost as $p)
    <form class="form" action="/editAkun/update" method="POST">

        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$p->id}}">
        Nama:
        <input type="text" name="name" value="{{$p->name}}"><br>
        Email:
        <input type="text" name="email" value="{{$p->email}}"><br>
        Role:
        <input type="text" name="role" value="{{$p->role}}"><br>

        Password:
        <input type="text" name="password" value="{{$p->password}}"><br>
      
        <br><input type="submit" value="Edit post">
    </form>
    @endforeach

</div>
<script src="css4/js/jquery.min.js"></script>
<script src="css4/js/popper.js"></script>
<script src="css4/js/bootstrap.min.js"></script>
<script src="css4/js/main.js"></script>
    @endsection