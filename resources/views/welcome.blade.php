@extends('layout.admin')

@push('css')
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="{{ asset('template') }}/plugins/ekko-lightbox/ekko-lightbox.css">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $jumlahjemaat }}</h3>
                            <p>Total Jemaat</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $jumlahjemaatlaki }}</h3>
                            <p>Jumlah Jemaat Pria</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $jumlahjemaatperempuan }}</h3>
                            <p>Jumlah Jemaat Wanita</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $jumlahbaptis }}</h3>
                            <p>Jumlah Data Baptis</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <section>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title"> <i class="fas fa-image mr-1"></i> Galeri</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($galeri as $item)
                            <div class="col-sm-2">
                                <a href="{{ asset('storage/geleri/' . $item->image_path) }}" data-toggle="lightbox" data-title="{{ $item->judul }}" data-gallery="gallery">
                                    <img src="{{ asset('storage/geleri/' . $item->image_path) }}" class="img-fluid mb-2" alt="{{ $item->judul }}" />
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-phone mr-1"></i>
                                    Kontak
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                {!! $pengaturan->kontak !!}
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list mr-1"></i>
                                    Sejarah
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                {!! $pengaturan->sejarah !!}
                            </div><!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- Custom tabs (Charts with tabs)-->
            </section>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('scripts')
<!-- Ekko Lightbox -->
<script src="{{ asset('template') }}/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })

</script>
@endpush
