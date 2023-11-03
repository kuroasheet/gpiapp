@extends('layout.admin')

@section('content')

<body>
  <h1 class="text-center mb-4">Edit Data Baptis</h1>

  <div class="container">
      
      <div class="row justify-content-center">
          <div class="col-8">
              <div class="card">
                  <div class="card-body">
                    @if ($data)
                      <form action="{{ route('baptism.updatedata', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="nomorsuratbaptis" class="form-label">Nomor Surat Baptis</label>
                            <input type="text" name="nomorsuratbaptis" class="form-control" id="nomorsuratbaptis" aria-describedby="emailHelp" value="{{ $data->nomorsuratbaptis }}">
                          </div>
                          <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" value="{{ $data->nama }}">
                          </div>
                          <div class="mb-3">
                              <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                              <input type="text" name="tanggallahir" class="form-control" id="tanggallahir" aria-describedby="emailHelp" value="{{ $data->tanggallahir }}">
                            </div>
                            <div class="mb-3">
                              <label for="namaayah" class="form-label">Nama Ayah</label>
                              <input type="text" name="namaayah" class="form-control" id="namaayah" aria-describedby="emailHelp" value="{{ $data->namaayah }}">
                            </div>
                            <div class="mb-3">
                              <label for="namaibu" class="form-label">Nama Ibu</label>
                              <input type="text" name="namaibu" class="form-control" id="namaibu" aria-describedby="emailHelp" value="{{ $data->namaibu }}">
                            </div>
                            <div class="mb-3">
                              <label for="dibaptisoleh" class="form-label">Dibaptis Oleh</label>
                              <input type="text" name="dibaptisoleh" class="form-control" id="dibaptisoleh" aria-describedby="emailHelp" value="{{ $data->dibaptisoleh }}">
                            </div>
                            <div class="mb-3">
                              <label for="tanggalbaptis" class="form-label">Tanggal Baptis</label>
                              <input type="text" name="tanggalbaptis" class="form-control" id="tanggalbaptis" aria-describedby="emailHelp" value="{{ $data->tanggalbaptis }}">
                            </div>
                            <!-- Add similar value attributes for other input fields -->
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
