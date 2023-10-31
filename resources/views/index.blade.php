@extends('layouts.baseAdmin')
@section('content')
    <a href="/tambah">+ Tambah  File Post</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>Images</th>
            <th>Judul</th>
            <th>Content</th>
            <th>comment</th>
            <th>opsi</th>
        </tr>
        @foreach($posting as $p)
        <tr>
            <td>
              <img src=" {{$p->image}}" alt="" style="max-width: 100px"> 
            </td>
            <td>
                {{$p->judul}}
            </td>
            <td>
                {{$p->content}}
            </td>
            <td>@foreach($p->comments()->get() as $comment)
                <div class="card shadow-sm mb-2">
                    <div class="card-body">
                        <i class="fa fa-comments"></i> {{ $comment->comment }}
                    </div>
                </div>
            @endforeach</td>

            
            <td><a href="/edit/{{ $p->id }}">Edit</a></td>
            <td> <a href="/hapus/{{ $p->id }}">Hapus</a></td>
          
        </tr>
        @endforeach
    </table>
    @endsection