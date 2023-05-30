@extends('layout.dashboard')
@section('title', 'Input Confirm')
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
    <div class="row">
        <div class="col-10 col-lg-10 col-xl-8 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header">
                    <h6 class="mb-0" style="justify-content: center; text-align: center; margin-top: 10px">Approval
                        Permintaan Produksi</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_permintaan" class="form-control"
                                value="{{ $permintaan->nama_produk }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Target Delivery</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_permintaan" class="form-control"
                                value="{{ $permintaan->target_delivery }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-10 col-lg-10 col-xl-4 d-flex">
            <div class="card radius-10 overflow-hidden w-100">
                <div class="card-body">
                    <form action="/tambah-konfirmasi" method="POST">
                        @csrf
                        <div class="row mb-3">
                          <input type="hidden" name="id_permintaan" value="{{ $permintaan->id }}">
                            <label for="inputText" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <select class="form-select" style="width: 100%;" name="status" required>
                                    <option value="accept">Accept</option>
                                    <option value="decline">Decline</option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        @if ($errors->any())
                        <div class="alert alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                              <div class="fs-3 text-danger"><ion-icon name="close-circle-sharp" role="img" class="md hydrated" aria-label="close circle sharp"></ion-icon>
                              </div>
                              <div class="ms-3">
                                <div class="text-danger">
                                    @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                                </div>
                              </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    @endif
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-info"> Save</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
@section('js')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>
@endsection
