@extends('layout.dashboard')
@section('title', 'Input Production Plan')
@section('assets')
<link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
<link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
<link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
<link rel="stylesheet"
    href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
@endsection
@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>INPUT PRODUCTION
                                PLAN</b> </h5>
                    </div>
                    <!-- /.card-header -->
                    <br>
                    <div class="card-body">
                        <!-- General Form Elements -->

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Nama Artikel</label>
                            <div class="col-sm-8">
                                <input type="text" name="id_konfirmasi_permintaan" class="form-control"
                                    value="{{ $konfirmPermintaan->permintaan->nama_produk }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                            <div class="col-sm-8">
                                <input type="text" name="id_konfirmasi_permintaan" class="form-control"
                                    value="{{ $konfirmPermintaan->permintaan->target_delivery }}" disabled>
                            </div>
                        </div>
                        <form action="/tambah-productionPlan" method="POST">
                            @csrf    
                            <input type="hidden" name="id_konfirmasi_permintaan" value="{{ $konfirmPermintaan->id }}">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">ALLOCATION</label>
                            <div class="col-sm-8">
                                <select class="form-control select2" style="width: 100%;" name="id_allocation" required>
                                    <option selected="selected"></option>
                                    @foreach ($allocation as $lokasi )
                                    <option value="{{ $lokasi->id }}">{{ $lokasi->nama_allocation }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Jumlah</label>
                                <div class="col-sm-8">
                                    <input type="integer" name="jumlah" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">HPP</label>
                                <div class="col-sm-8">
                                    <input type="text" name="HPP" class="form-control" id="dengan-rupiah" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">CMT</label>
                                <div class="col-sm-8">
                                    <input type="text" name="CMT" class="form-control" id="rupiah" required>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Preparation</label>
                                <div class="col-sm-4">
                                    <input type="date" name="preparation_mulai" class="form-control" required>
                                </div>
                                _
                                <div class="col-sm-4">
                                    <input type="date" name="preparation_selesai" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">PPM</label>
                                <div class="col-sm-8">
                                    <input type="date" name="ppm" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Cutting</label>
                                <div class="col-sm-4">
                                    <input type="date" name="cutting_mulai" class="form-control" required>
                                </div>
                                _
                                <div class="col-sm-4">
                                    <input type="date" name="cutting_selesai" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Sewing</label>
                                <div class="col-sm-4">
                                    <input type="date" name="sewing_mulai" class="form-control" required>
                                </div>
                                _
                                <div class="col-sm-4">
                                    <input type="date" name="sewing_selesai" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Finishing</label>
                                <div class="col-sm-4">
                                    <input type="date" name="finishing_mulai" class="form-control" required>
                                </div>
                                _
                                <div class="col-sm-4">
                                    <input type="date" name="finishing_selesai" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Packing</label>
                                <div class="col-sm-4">
                                    <input type="date" name="packing_mulai" class="form-control" required>
                                </div>
                                _
                                <div class="col-sm-4">
                                    <input type="date" name="packing_selesai" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Closing</label>
                                <div class="col-sm-4">
                                    <input type="date" name="closing_mulai" class="form-control" required>
                                </div>
                                _
                                <div class="col-sm-4">
                                    <input type="date" name="closing_selesai" class="form-control" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-info"> Save</button>
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
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/rupiah.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>
@endsection
