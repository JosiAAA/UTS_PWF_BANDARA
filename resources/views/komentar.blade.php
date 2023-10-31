@extends('layouts.base')

@section('content')
<body style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.3)),url(images/bandara.jpg);
   
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.3)),url(images/bandara.jpg);
    height: 100%;
  width: 100%;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat; ">
    

    <div class="container my-5 py-5"style="text-align:center">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="card text-dark" style="height: auto; width: 100%;">
            <h4 class="mb-0">Komentar terbaru</h4>
            <p class="fw-light mb-4 pb-2">Komentar Terbaru Dari Pengguna Lain</p>
            @foreach($postcom as $p)
            <div class="card-body p-4">
             
                
              <div class="d-flex flex-start">
                <img class="rounded-circle shadow-1-strong me-3"
                  src="https://static.thenounproject.com/png/3542335-200.png" alt="avatar" width="60"
                  height="60" />
                <div>
                  <h6 class="fw-bold mb-1">{{ $p->nama}}</h6>
                  <div class="d-flex align-items-center mb-3">
                     <p class="mb-0">{{ $p->tanggal}}</p>
                   
                     
                    </p>
                    <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                    <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                    <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                  </div>s
                  <p class="mb-0">
                    {{ $p->komentar }}
                  </p>
                </div>
              </div>
            </div>
            @endforeach
           
    <div class="container my-5 py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-start align-items-center">
                <form class="form" action="/komentar/store" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="tanggal" value="{{ date('F d, Y') }}">
                    <img class="rounded-circle shadow-1-strong me-3"
                        src="https://static.thenounproject.com/png/3542335-200.png" alt="avatar" width="60"
                        height="60" /> Anda   
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2" for="nama">
                            Nama
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-500"
                            id="nama" name="nama" type="text" placeholder="Enter your name" required>
                    </div>  
                </div>
                </div>
                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                    <div class="d-flex flex-start w-100">
                        <div class="form-outline w-100">
                            <textarea class="form-control" id="textAreaExample" name="komentar" 
                                style="background: #fff;" required></textarea>
                            <label class="form-label" for="textAreaExample">Komentar</label>
                        </div>
                    </div>
                    <div class="float-end mt-2 pt-1">
                        <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                    </div>
                </div>
                </form>
                
                
          </div>
        </div>
      </div>
    </div>
</body>
@endsection    
