@extends('layout.dashboard')
@section('title', 'Permintaan Produksi')
@section('assets')
<link href="{{ asset('assets/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/datetimepicker/css/classic.time.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/datetimepicker/css/classic.date.css') }}" rel="stylesheet" />
<link rel="stylesheet"
    href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
@endsection
@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>Edit Warna dan Ukuran</b> </h5>
                    </div>
                    <!-- /.card-header -->
                    <br>
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <form action="{{ route('update-item-produk', $itemProduk->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_permintaan" value="{{ $itemProduk->id_permintaan }}">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                <div class="col-sm-8">
                                    <select class="form-select" style="width: 100%;" name="id_warna" required>
                                        @foreach ($warna as $color )
                                            <option value="{{ $color->id }}">{{ $color->nama_warna }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                <div class="col-sm-8">
                                    <select class="form-select" style="width: 100%;" name="id_ukuran" required>
                                        @foreach ($ukuran as $size )
                                            <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Total</label>
                                <div class="col-sm-8">
                                    <input type="number" name="total" class="form-control" required>
                                </div>
                            </div>
        
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@section('js')


<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datetimepicker/js/picker.js') }}"></script>
<script src="{{ asset('assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
<script src="{{ asset('assets/js/form-date-time-pickes.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection
