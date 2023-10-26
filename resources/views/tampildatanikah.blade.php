@extends('layout.admin')

@section('content')

<body>
  <h1 class="text-center mb-4">Edit Data Nikah</h1>

  <div class="container">
      
      <div class="row justify-content-center">
          <div class="col-8">
              <div class="card">
                  <div class="card-body">
                    @if ($data)
                      <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nomor Surat Nikah</label>
                            <input type="text" name="nomorsuratnikah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pasangan</label>
                            <input type="text" name="namapasangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tanggal Menikah</label>
                              <input type="text" name="tanggalmenikah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>  
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        @else
                        <!-- Handle ketika $data adalah null atau tidak ada -->
                        @endif
                  </div>
              </div>
          </div>
      </div>
  </div>


  

<!-- Include Bootstrap JS and jQuery (for Bootstrap JavaScript components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endsection