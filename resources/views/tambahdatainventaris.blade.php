@extends('layout.admin')

@section('content')
<body>
  <h1 class="text-center mb-5 mt-5">Tambah Data Inventaris</h1>

  <div class="container mb-5">
      
      <div class="row justify-content-center">
          <div class="col-8">
              <div class="card">
                  <div class="card-body">
                      <form action="/insertdata" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                            <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Volume</label>
                            <input type="text" name="volume" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Tahun</label>
                              <input type="number" name="tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Sumber</label>
                              <input type="text" name="sumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nilai</label>
                              <input type="text" name="nilai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="jenisKelamin" class="form-label">Kondisi</label>
                              <select class="form-select" name="kondisi" id="kondisi" name="kondisi" aria-label="Kondisi">
                                  <option selected disabled>Pilih Kondisi Barang</option>
                                  <option value="Sangat Bagus">Sangat Bagus</option>
                                  <option value="Bagus">Bagus</option>
                                  <option value="Kurang Bagus">Kurang Bagus</option>
                                  <option value="Sedang dlm Perbaikan">Sedang dlm Perbaikan</option>
                                  <option value="Rusak">Rusak</option>
                              </select>
                          </div>   
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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