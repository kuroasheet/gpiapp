@extends('layout.admin')
@push('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Optional: Include custom CSS styles -->
    <style>
        /* Tambahkan gaya kustom di sini */
    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Baptis</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Baptis</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <a href="/baptism/tambahbaptis" class="btn btn-success">Tambah +</a>
    
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
              <form action="/baptis" method="GET" class="form-inline">
                <label class="sr-only" for="search">Cari:</label>
                <div class="input-group">
                  <input type="search" id="search" name="search" class="form-control" aria-label="Cari" placeholder="Cari...">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Cari</button>
                  </div>
                </div>
              </form>                        
            </div>
        </div>
        <div class="row">
        {{-- @if ($message = Session::get('success'))
             <div class="alert alert-success" role="alert">
                {{ $message }}
                 </div>
        @endif --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomor Surat Baptis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Dibaptis Oleh</th>
                    <th scope="col">Tanggal Baptis</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;   
                @endphp
                @foreach ($data as $index => $row)
                <tr>
                    <th scope="row">{{ $index + $data->firstItem() }}</th>
                    <td>{{ $row->nomorsuratbaptis }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->tanggallahir }}</td>
                    <td>{{ $row->namaayah }}</td>
                    <td>{{ $row->namaibu }}</td>
                    <td>{{ $row->dibaptisoleh }}</td>
                    <td>{{ $row->tanggalbaptis }}</td>
                    <td>
                        <a href="/baptism/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('delete', ['id' => $row->id]) }}" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Hapus</a>

                    </td>
                  </tr>
                @endforeach
    
                  
                </tbody>
              </table>
              {{ $data->links() }}
        </div>
    </div>
    </div>

@endsection

@push('scripts')
<!-- Include Bootstrap JS and jQuery (for Bootstrap JavaScript components) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
  $('.delete').click(function (event) {
      event.preventDefault(); // Prevent the default anchor behavior
  
      var baptisid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
  
      swal({
          title: "Apakah anda yakin?",
          text: "Anda akan menghapus Data Bpk/Ibu, Sdra/i " + nama + " ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
          if (willDelete) {
              window.location = "/baptism/delete/" + baptisid;
              swal("Data berhasil dihapus!", {
                  icon: "success",
              });
          } else {
              swal("Data tidak jadi dihapus!");
          }
      });
  });
  </script>

<script>
@if (Session::has ('success'))
    toastr.success("{{ Session::get('success') }}", 'Sukses!');
@endif


</script>
@endpush