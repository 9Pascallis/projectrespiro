@extends('layout.dashboard')
@section('title', 'Tambah User')
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
                        <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>Tambah User</b>
                        </h5>
                    </div>
                    <!-- /.card-header -->
                    <br>
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <form action="/insert-user" method="POST">
                            @csrf
                            <div class=" row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-select" style="width: 100%;" name="id_role" required>
                                        @foreach ($role as $item )
                                        <option value="{{ $item->id }}">{{ $item->nama_role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" value="{{old('username')}}"
                                        class="form-control @error('username') is-invalid @enderror me-2" required>
                                    @error('username')
                                    <span class="invalid-feedback">{{ $message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-success">Save</button>
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
@endsection
@section('js')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>
@endsection
