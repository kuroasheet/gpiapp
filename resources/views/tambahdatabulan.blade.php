@extends('layout.admin')

@section('content')
<body>
  <h1 class="text-center mb-5 mt-5">Tambah Laporan Keuangan Bulanan</h1>

  <div class="container mb-5">
      
      <div class="row justify-content-center">
          <div class="col-8">
              <div class="card">
                  <div class="card-body">
                      <form action="/month/insertdata" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Bulan</label>
                            <input type="text" name="bulan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Pemasukan</label>
                              <input type="text" name="pemasukan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>                           
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Pengeluaran</label>
                              <input type="text" name="pengeluaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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