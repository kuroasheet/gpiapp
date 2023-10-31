@extends('layout.admin')

@section('content')

<body>
  <h1 class="text-center mb-4">Edit Data Inventaris</h1>

  <div class="container">
      
      <div class="row justify-content-center">
          <div class="col-8">
              <div class="card">
                  <div class="card-body">
                    @if ($data)
                      <form action="{{ route('updatedata', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="namabarang" class="form-label">Nama Barang</label>
                            <input type="text" name="namabarang" class="form-control" id="namabarang" aria-describedby="emailHelp" value="{{ $data->namabarang }}">
                          </div>
                          <div class="mb-3">
                            <label for="volume" class="form-label">Volume</label>
                            <input type="text" name="volume" class="form-control" id="volume" aria-describedby="emailHelp" value="{{ $data->volume }}">
                          </div>
                          <div class="mb-3">
                              <label for="tahun" class="form-label">Tahun</label>
                              <input type="number" name="tahun" class="form-control" id="tahun" aria-describedby="emailHelp" value="{{ $data->tahun }}">
                            </div>
                            <div class="mb-3">
                              <label for="sumber" class="form-label">Sumber</label>
                              <input type="text" name="sumber" class="form-control" id="sumber" aria-describedby="emailHelp" value="{{ $data->sumber }}">
                            </div>
                            <div class="mb-3">
                              <label for="nilai" class="form-label">Nilai</label>
                              <input type="text" name="nilai" class="form-control" id="nilai" aria-describedby="emailHelp" value="{{ $data->nilai }}">
                            </div>
                            <div class="mb-3">
                              <label for="kondisi" class="form-label">Kondisi</label>
                              <select class="form-select" name="kondisi" id="kondisi" aria-label="Kondisi">
                                  <option selected disabled>Pilih Kondisi Barang</option>
                                  <option value="Sangat Bagus" {{ $data->kondisi === 'Sangat Bagus' ? 'selected' : '' }}>Sangat Bagus</option>
                                  <option value="Bagus" {{ $data->kondisi === 'Bagus' ? 'selected' : '' }}>Bagus</option>
                                  <option value="Kurang Bagus" {{ $data->kondisi === 'Kurang Bagus' ? 'selected' : '' }}>Kurang Bagus</option>
                                  <option value="Sedang dlm Perbaikan" {{ $data->kondisi === 'Sedang dlm Perbaikan' ? 'selected' : '' }}>Sedang dlm Perbaikan</option>
                                  <option value="Rusak" {{ $data->kondisi === 'Rusak' ? 'selected' : '' }}>Rusak</option>
                              </select>
                            </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @else
                        <!-- Handle when $data is null or doesn't exist -->
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
