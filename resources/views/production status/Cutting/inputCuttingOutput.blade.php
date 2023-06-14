@extends('layout.dashboard')
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
                        <h5 style="justify-content: center; text-align: center; margin-top: 10px"><b>INPUT CUTTING
                                OUTPUT</b> </h5>
                    </div>
                    <!-- /.card-header -->
                    <br>
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <div class="row" style="margin-left: 20px; margin-right: 20px">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">NOMOR WS</label>
                                <div class="col-sm-8">
                                    <input type="text" name="id_production_plan" class="form-control"
                                        value="{{ $worksheet->nomor_ws }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Nama Artikel</label>
                                <div class="col-sm-8">
                                    <input type="text" name="id_production_plan" class="form-control"
                                        value="{{ $worksheet->productionPlan->konfirmasi_permintaan->permintaan->nama_produk }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Target Delivery</label>
                                <div class="col-sm-8">
                                    <input type="text" name="id_production_plan" class="form-control"
                                        value="{{  $worksheet->productionPlan->konfirmasi_permintaan->permintaan->target_delivery }}"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="/dashboard-cutting-output" class="btn btn-secondary" role="button"
                                aria-pressed="true">Back</a>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal1">Cutting Ke 1</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal2">Cutting Ke 2</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal3">Cutting Ke 3</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal4">Cutting Ke 4</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal5">Cutting Ke 5</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal6">Cutting Ke 6</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal7">Cutting Ke 7</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal8">Cutting Ke 8</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal9">Cutting Ke 9</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal10">Cutting Ke 10</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal11">Cutting Ke 11</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal12">Cutting Ke 12</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal13">Cutting Ke 13</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal4">Cutting Ke 14</button>
                            &ensp;
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#exampleVerticallycenteredModal15">Cutting Ke 15</button>
                        </div>



                        <div class="modal fade" id="exampleVerticallycenteredModal1" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="1">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>



                        <div class="modal fade" id="exampleVerticallycenteredModal2" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="2">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal3" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="3">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal4" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="4">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal5" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="5">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal6" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="6">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal7" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="7">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal8" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="8">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal9" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="9">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal10" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="10">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="exampleVerticallycenteredModal11" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="11">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal12" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="12">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal13" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="13">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleVerticallycenteredModal14" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="14">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="exampleVerticallycenteredModal15" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Input Warna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/insert-cutting" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_process_cutting" value="15">
                                            <input type="hidden" name="id_worksheet" value="{{ $worksheet->id }}">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Warna</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_warna"
                                                        required>
                                                        @foreach ($warna as $color )
                                                        <option value="{{ $color->id }}">{{ $color->nama_warna }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-3 col-form-label">Ukuran</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" style="width: 100%;" name="id_ukuran"
                                                        required>
                                                        @foreach ($ukuran as $size )
                                                        <option value="{{ $size->id }}">{{ $size->jenis_ukuran }}
                                                        </option>
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
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @if ($cutting->where('id_process_cutting', 1)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 1</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 1)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 2)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 2</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 2)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 3)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 3</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 3)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 4)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 4</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 4)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 5)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 5</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 5)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 6)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 6</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 6)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 7)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 7</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 7)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 8)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 8</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 8)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 9)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 9</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 9)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 10)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 10</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 10)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 11)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 11</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 11)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 12)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 12</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 12)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 13)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 13</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 13)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 14)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 14</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 14)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                @if ($cutting->where('id_process_cutting', 15)->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cutting ke 15</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 10%; text-align: center">Warna</th>
                                        <th style="width: 10%; text-align: center">Ukuran</th>
                                        <th style="width: 10%; text-align: center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    $total = 0;
                                    @endphp
                                    @foreach ($cutting as $item)
                                        @if ($item->id_process_cutting == 15)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="text-align: center">{{ $item->warna->nama_warna }}</td>
                                                <td style="text-align: center">{{ $item->ukuran->jenis_ukuran }}</td>
                                                <td style="text-align: center">{{ $item->total }}</td>
                                            </tr>
                                            @php
                                            $total += $item->total;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <tr>
                                        <th style="width: 10%; text-align: center">Total</th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center">{{ $total }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif


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
