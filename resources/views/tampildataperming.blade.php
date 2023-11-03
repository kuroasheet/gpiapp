@extends('layout.admin')

@section('content')

<body>
  <h1 class="text-center mb-4">Edit Data Persembahan Mingguan</h1>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            @if ($data)
              <form action="{{ route('offering.updatedata', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="text" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp" value="{{ $data->tanggal }}">
                </div>
                <div class="mb-3">
                  <label for="kas" class="form-label">Kas</label>
                  <input type="text" name="kas" class="form-control" id="kas" aria-describedby="emailHelp" value="{{ $data->kas }}">
                </div>
                <div class="mb-3">
                  <label for="misi" class="form-label">Misi</label>
                  <input type="text" name="misi" class="form-control" id="misi" aria-describedby="emailHelp" value="{{ $data->misi }}">
                </div>
                <div class="mb-3">
                  <label for="diakonia" class="form-label">Diakonia</label>
                  <input type="text" name="diakonia" class="form-control" id="diakonia" aria-describedby="emailHelp" value="{{ $data->diakonia }}">
                </div>
                <div class="mb-3">
                  <label for="ibadahrayatghminggu" class="form-label">Ibadah Raya tgh Minggu</label>
                  <input type="text" name="ibadahrayatghminggu" class="form-control" id="ibadahrayatghminggu" aria-describedby="emailHelp" value="{{ $data->ibadahrayatghminggu }}">
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
