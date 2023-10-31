@extends('layouts.adminBase')

@section('content')
<div class="container">
    <form class="form" action="/tambah/store" method="POST">
        {{ csrf_field() }}
        Judul:
        <input required type="text" name="judul"><br>
        Content:
        <textarea required name="content" id="" cols="30" rows="10"></textarea>
        <br><input type="submit" value="Tambah post">
    </form>
</div>
@endsection 